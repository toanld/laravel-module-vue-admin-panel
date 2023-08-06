import{P as l,h as d}from"./md5.70b4c196.js";const s={white:"bg-white text-black",light:"bg-white text-black dark:bg-slate-900/70 dark:text-white",contrast:"bg-gray-800 text-white dark:bg-white dark:text-black",success:"bg-emerald-500 border-emerald-500 text-white",danger:"bg-red-500 border-red-500 text-white",warning:"bg-yellow-500 border-yellow-500 text-white",info:"bg-blue-500 border-blue-500 text-white"},a={white:"text-black dark:text-slate-100",light:"text-gray-700 dark:text-slate-400",contrast:"dark:text-white",success:"text-emerald-500",danger:"text-red-500",warning:"text-yellow-500",info:"text-blue-500"};a.white,a.light,a.contrast,a.success,a.danger,a.warning,a.info;const g=(e,o,r)=>{const t={bg:{white:"bg-white text-black",contrast:"bg-gray-800 text-white dark:bg-white dark:text-black",light:"bg-gray-50 text-black",success:"bg-emerald-600 dark:bg-emerald-500 text-white",danger:"bg-red-600 dark:bg-red-500 text-white",warning:"bg-yellow-600 dark:bg-yellow-500 text-white",info:"bg-blue-600 dark:bg-blue-500 text-white"},bgHover:{white:"hover:bg-gray-50",contrast:"hover:bg-gray-900 hover:dark:bg-slate-100",light:"hover:bg-gray-200",success:"hover:bg-emerald-700 hover:border-emerald-700 hover:dark:bg-emerald-600 hover:dark:border-emerald-600",danger:"hover:bg-red-700 hover:border-red-700 hover:dark:bg-red-600 hover:dark:border-red-600",warning:"hover:bg-yellow-700 hover:border-yellow-700 hover:dark:bg-yellow-600 hover:dark:border-yellow-600",info:"hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600"},borders:{white:"border-gray-100",contrast:"border-gray-900 dark:border-slate-100",light:"border-gray-100 dark:border-slate-700",success:"border-emerald-600 dark:border-emerald-500",danger:"border-red-600 dark:border-red-500",warning:"border-yellow-600 dark:border-yellow-500",info:"border-blue-600 dark:border-blue-500"},text:{white:"text-black dark:text-slate-100",contrast:"dark:text-slate-100",light:"text-gray-700 dark:text-slate-400",success:"text-emerald-600 dark:text-emerald-500",danger:"text-red-600 dark:text-red-500",warning:"text-yellow-600 dark:text-yellow-500",info:"text-blue-600 dark:text-blue-500"},outlineHover:{white:"hover:bg-gray-100 hover:text-gray-900 dark:hover:text-slate-900",contrast:"hover:bg-gray-800 hover:text-gray-100 hover:dark:bg-slate-100 hover:dark:text-black",light:"hover:bg-gray-100 hover:text-gray-900 dark:hover:text-slate-900",success:"hover:bg-emerald-600 hover:text-white hover:text-white hover:dark:text-white hover:dark:border-emerald-600",danger:"hover:bg-red-600 hover:text-white hover:text-white hover:dark:text-white hover:dark:border-red-600",warning:"hover:bg-yellow-600 hover:text-white hover:text-white hover:dark:text-white hover:dark:border-yellow-600",info:"hover:bg-blue-600 hover:text-white hover:dark:text-white hover:dark:border-blue-600"}};if(!t.bg[e])return e;const b=[o?t.text[e]:t.bg[e],t.borders[e]];return r&&b.push(o?t.outlineHover[e]:t.bgHover[e]),b},i=l({name:"BaseButtons",props:{noWrap:Boolean,type:{type:String,default:"justify-start"},classAddon:{type:String,default:"mr-3 last:mr-0 mb-3"},mb:{type:String,default:"-mb-3"}},render(){const e=this.$slots&&this.$slots.default,o=["flex","items-center",this.type,this.noWrap?"flex-nowrap":"flex-wrap"];return this.mb&&o.push(this.mb),d("div",{class:o},e?this.$slots.default().map(r=>r&&r.children&&typeof r.children=="object"?d(r,{},r.children.map(t=>d(t,{class:[this.classAddon]}))):d(r,{class:[this.classAddon]})):null)}});export{i as _,a,s as c,g};