import{a as L}from"./layout.3ebfc9c1.js";import{b as h,a as z}from"./BaseLevel.5a91c855.js";import{_ as C}from"./NavBar.24a1504e.js";import{_ as y,a as S,b as V,c as A,d as N,e as j}from"./Search.342de661.js";import{s as B,A as q,j as D,J as H,o,g as a,q as e,e as t,w as p,F as u,z as f,u as d,t as i,Q as b,n as g,i as v,H as w,l as T}from"./md5.aa6931b5.js";import{D as k}from"./mdi.1fe06ea7.js";const E={class:"hidden shadow-3xl z-[100] border border-gray-200 overflow-hidden z-50 my-4 sm:w-11/12 md:w-11/12 lg:w-11/12 xl:w-9/12 text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 rounded-xl !-left-10",id:"apps-dropdown"},F={class:"block py-2 px-4 text-base font-medium text-gray-700"},I=e("div",{class:"text-main"},"Lorem...",-1),O={class:"block"},J={class:"max-w-full"},P={class:"w-full grid lg:grid-cols-4 lg:gap-4 sm:grid-cols-1 sm:h-600 md:grid-cols-1 md:h-600 sm:overflow-y-auto md:overflow-y-auto"},Q={class:"lg:block md:hidden uppercase text-xs pl-3 pt-5 pb-3 font-bold"},U={href:"#",class:"w-full p-3 flex items-center group rounded-2xl border border-white hover:border-gray-200"},G={class:"ml-2 w-full"},K={class:"text-sm text-gray-200 text-gray-800 h-6 flex justify-between"},M={class:"text-[.7em] whitespace-nowrap text-gray-600 -mt-1"},R={class:"sm:block md:block lg:hidden"},W={class:"uppercase w-max text-xs pl-3 pt-5 pb-3 font-bold border-b border-b-gray-200"},X={class:"grid grid-cols-2 gap-2"},Y={href:"#",class:"w-full p-3 flex items-center group rounded-2xl border border-white hover:border-gray-200"},Z={class:"ml-2 w-full"},ee={class:"text-sm text-gray-200 text-gray-800 h-6 flex justify-between"},te={class:"text-[.7em] whitespace-nowrap text-gray-600 -mt-1"},se={__name:"AppList",setup(x){const r=B("use");let c=q({});return c=D(()=>H().props.navigation.menu_app),(m,n)=>(o(),a("div",E,[e("div",F,[t(S,{variant:"underline",modelValue:r.value,"onUpdate:modelValue":n[0]||(n[0]=l=>r.value=l),class:""},{default:p(()=>[t(y,{name:"use",title:"Hay d\xF9ng",class:"text-main"},{default:p(()=>[I]),_:1}),t(y,{name:"all",title:"T\u1EA5t c\u1EA3"},{default:p(()=>[e("div",O,[e("div",J,[e("div",P,[(o(!0),a(u,null,f(d(c),(l,$)=>(o(),a("div",{key:$},[e("div",Q,i(l.name),1),(o(!0),a(u,null,f(l.children,(s,_)=>(o(),a("div",{class:"lg:block md:hidden",key:_},[e("a",U,[s.icon?(o(),a("i",{key:0,style:b(s.color),class:g(["w-9 h-9 flex justify-center items-center !text-lg flex-none group-hover:text-white rounded-xl",s.icon])},null,6)):v("",!0),e("div",G,[e("div",K,[w(i(s.name)+" ",1),t(h,{path:d(k),class:"flex-none hidden text-gray-800 group-hover:block -mt-1",size:18},null,8,["path"])]),e("div",M,i(s.text),1)])])]))),128)),e("div",R,[e("div",W,i(l.name),1),e("div",X,[(o(!0),a(u,null,f(l.children,(s,_)=>(o(),a("div",{key:_},[e("a",Y,[s.icon?(o(),a("i",{key:0,style:b(s.color),class:g(["w-9 h-9 flex justify-center items-center !text-lg flex-none group-hover:text-white rounded-xl",s.icon])},null,6)):v("",!0),e("div",Z,[e("div",ee,[w(i(s.name)+" ",1),t(h,{path:d(k),class:"flex-none hidden text-gray-800 group-hover:block -mt-1",size:18},null,8,["path"])]),e("div",te,i(s.text),1)])])]))),128))])])]))),128))])])])]),_:1})]),_:1},8,["modelValue"])])]))}},oe={class:"antia liased bg-gray-50 dark:bg-gray-900"},ae=e("i",{class:"sidemenu-item-icon icon-contact-card"},null,-1),me={__name:"LayoutErp",props:{title:String},setup(x){const r=L(),c=()=>{document.querySelector(".bow-old").classList.remove("block"),document.querySelector(".bow-old").classList.add("hidden"),typeof internalInstance<"u"&&internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()};return(m,n)=>(o(),a(u,null,[e("div",oe,[t(C,{title:x.title},null,8,["title"]),t(z),e("main",{class:g(["pl-4 pb-b h-auto pt-20 transition-position",{"md:ml-16":d(r).isAsideLgActive,"md:ml-60":!d(r).isAsideLgActive}])},[e("div",{class:"mini:text-red-400 sm:text-blue-200",onClick:n[0]||(n[0]=(...l)=>m.clickNotify&&m.clickNotify(...l))},"tesst"),ae,T(m.$slots,"default")],2)]),e("div",{class:"bow-old fixed top-0 left-0 w-full h-full bg-gray-300 opacity-50 z-50 hidden",onClick:c}),t(V),t(A),t(se),t(N),t(j)],64))}};export{me as _};