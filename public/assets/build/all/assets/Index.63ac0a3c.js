import{v as p,o,b as d,w as r,e as a,u as s,X as k,i as l,H as h,t as y,q as e,B as $,L as v,f as w,g as m,z as x,F as B,k as N}from"./md5.aa6931b5.js";import{x as j,r as A,t as C,u as O,v as S}from"./mdi.1fe06ea7.js";import{_ as V,a as D}from"./SectionMain.5eac383a.js";import{_ as P}from"./SectionTitleLineWithButton.7aa7a069.js";import{_ as u,a as _}from"./CardBox.165fa27d.js";import{_ as T}from"./BaseButtons.be0b0423.js";import{_ as q}from"./NotificationBar.980e9d63.js";import{_ as E,a as F}from"./Sort.b0709389.js";import"./layout.444d265a.js";import"./style.cab1fa8d.js";import"./FormControl.d3465687.js";import"./index.92938b48.js";import"./colors.ab6f195c.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.384a7273.js";const L={class:"py-2 flex"},M={class:"flex pl-4"},z={key:0},H={"data-label":"Name"},I={key:0,class:"before:hidden lg:w-1 whitespace-nowrap"},K={class:"py-4"},le={__name:"Index",props:{permissions:{type:Object,default:()=>({})},filters:{type:Object,default:()=>({})},can:{type:Object,default:()=>({})}},setup(t){const f=p({search:t.filters.search}),b=p({});function g(n){confirm("Are you sure you want to delete?")&&b.delete(route("permission.destroy",n))}return(n,c)=>(o(),d(V,null,{default:r(()=>[a(s(k),{title:"Permissions"}),a(D,null,{default:r(()=>[a(P,{icon:s(j),title:"Permissions",main:""},{default:r(()=>[t.can.delete?(o(),d(u,{key:0,"route-name":n.route("permission.create"),icon:s(A),label:"Add",color:"info","rounded-full":"",small:""},null,8,["route-name","icon"])):l("",!0)]),_:1},8,["icon"]),n.$page.props.flash.message?(o(),d(q,{key:0,color:"success",icon:s(C)},{default:r(()=>[h(y(n.$page.props.flash.message),1)]),_:1},8,["icon"])):l("",!0),a(_,{class:"mb-6","has-table":""},{default:r(()=>[e("form",{onSubmit:c[1]||(c[1]=w(i=>s(f).get(n.route("permission.index")),["prevent"]))},[e("div",L,[e("div",M,[$(e("input",{type:"search","onUpdate:modelValue":c[0]||(c[0]=i=>s(f).search=i),class:"rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50",placeholder:"Search"},null,512),[[v,s(f).search]]),a(u,{label:"Search",type:"submit",color:"info",class:"ml-4 inline-flex items-center px-4 py-2"})])])],32)]),_:1}),a(_,{class:"mb-6","has-table":""},{default:r(()=>[e("table",null,[e("thead",null,[e("tr",null,[e("th",null,[a(E,{label:"Name",attribute:"name"})]),t.can.edit||t.can.delete?(o(),m("th",z,"Actions")):l("",!0)])]),e("tbody",null,[(o(!0),m(B,null,x(t.permissions.data,i=>(o(),m("tr",{key:i.id},[e("td",H,[a(s(N),{href:n.route("permission.show",i.id),class:"no-underline hover:underline text-cyan-600 dark:text-cyan-400"},{default:r(()=>[h(y(i.name),1)]),_:2},1032,["href"])]),t.can.edit||t.can.delete?(o(),m("td",I,[a(T,{type:"justify-start lg:justify-end","no-wrap":""},{default:r(()=>[t.can.edit?(o(),d(u,{key:0,"route-name":n.route("permission.edit",i.id),color:"info",icon:s(O),small:""},null,8,["route-name","icon"])):l("",!0),t.can.delete?(o(),d(u,{key:1,color:"danger",icon:s(S),small:"",onClick:X=>g(i.id)},null,8,["icon","onClick"])):l("",!0)]),_:2},1024)])):l("",!0)]))),128))])]),e("div",K,[a(F,{data:t.permissions},null,8,["data"])])]),_:1})]),_:1})]),_:1}))}};export{le as default};
