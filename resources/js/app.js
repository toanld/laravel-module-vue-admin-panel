import '../css/main.css';

import NProgress from 'nprogress'
import { createPinia } from 'pinia'
import { useStyleStore } from '@/Stores/style.js'
import { useLayoutStore } from '@/Stores/layout.js'

import { darkModeKey, styleKey } from '@/config.js'
import 'flowbite';
import { createApp, h} from 'vue';
//window.md5 = require('md5');
import { createInertiaApp, router } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import {myTrans} from "@/functions";
import md5 from 'md5';
window.myTrans = myTrans;
window.md5 = md5;
window.translateFormData = new FormData();
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

const pinia = createPinia()

createInertiaApp({
    progress: {
        // The delay after which the progress bar will appear
        // during navigation, in milliseconds.
        delay: 250,

        // The color of the progress bar.
        color: '#29d',

        // Whether to include the default NProgress styles.
        includeCSS: true,

        // Whether the NProgress spinner will be shown.
        showSpinner: false,
    },
    title: (title) => `${title} - ${appName}`,
    //resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    resolve: (name) => {
        let page = null;

        let isModule = name.split("::");

        if (isModule.length > 1) {
            // let a =   import.meta.glob('@modules/Admin/Resources/Pages/Index.vue')['/modules/Admin/Resources/Pages/Index.vue']();
            let module = isModule[0];
            let pathTo = isModule[1];
            pathTo = pathTo.replace("\\", "/");
            //console.log(module, pathTo);//Admin Resources/Pages/Index
            let key = `/Modules/${module}/${pathTo}.vue`;
            console.log('module');
            //let value = import.meta.glob('@modules/*/Resources/Pages/**/*.vue');
            let value = import.meta.glob('@modules/*/Resources/Pages/**/*.vue');
            page = resolvePageComponent(key, value);

        } else {
            page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        let app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            //.use(myPlugin)
            .use(ZiggyVue, Ziggy);
             app.config.globalProperties.$overflowHidenBody = () => {
            document.querySelector('body').classList.add('overflow-hidden');
        }
        app.config.globalProperties.$removeOverflowHidenBody = () => {
            document.querySelector('body').classList.remove('overflow-hidden');
        }
        app.config.globalProperties.$myTrans = myTrans;
        app.directive('click-outside', {
          mounted(el, binding, vnode) {
            el.clickOutsideEvent = function(event) {
              if (!(el === event.target || el.contains(event.target))) {
                binding.value(event, el);
              }
            };
            document.body.addEventListener('click', el.clickOutsideEvent);
          },
          unmounted(el) {
            document.body.removeEventListener('click', el.clickOutsideEvent);
          }
        });
        return app.mount(el);
    },
});

router.on('start', () => NProgress.start())
router.on('finish', () => {
    NProgress.done();
})

const styleStore = useStyleStore(pinia)
const layoutStore = useLayoutStore(pinia)

/* App style */
styleStore.setStyle(localStorage[styleKey] ?? 'basic')

/* Dark mode */
if ((!localStorage[darkModeKey] && window.matchMedia('(prefers-color-scheme: dark)').matches) || localStorage[darkModeKey] === '1') {
  styleStore.setDarkMode(true)
}

/* Collapse mobile aside menu on route change */
router.on('navigate', (event) => {
  layoutStore.isAsideMobileExpanded = false
  layoutStore.isAsideLgActive = true
})
