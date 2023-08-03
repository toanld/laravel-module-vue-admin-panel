import{v as h,o as l,b as d,w as r,e as t,u as s,X as $,i,H as y,t as p,q as e,B as v,L as w,f as x,g as u,z as B,F as N,k as j}from"./md5.aa6931b5.js";import{x as A,r as C,t as O,u as S,v as V}from"./mdi.1fe06ea7.js";import{_ as E,a as D}from"./SectionMain.5eac383a.js";import{_ as T}from"./SectionTitleLineWithButton.7aa7a069.js";import{_ as m,a as _}from"./CardBox.165fa27d.js";import{_ as U}from"./BaseButtons.be0b0423.js";import{_ as q}from"./NotificationBar.980e9d63.js";import{_ as b,a as F}from"./Sort.b0709389.js";import"./layout.444d265a.js";import"./style.cab1fa8d.js";import"./FormControl.d3465687.js";import"./index.92938b48.js";import"./colors.ab6f195c.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.384a7273.js";const L={class:"py-2 flex"},M={class:"flex pl-4"},z={key:0},H={"data-label":"Name"},I={"data-label":"Email"},K={key:0,class:"before:hidden lg:w-1 whitespace-nowrap"},P={class:"py-4"},de={__name:"Index",props:{users:{type:Object,default:()=>({})},filters:{type:Object,default:()=>({})},can:{type:Object,default:()=>({})}},setup(a){const f=h({search:a.filters.search}),g=h({});function k(n){confirm("Are you sure you want to delete?")&&g.delete(route("user.destroy",n))}return(n,c)=>(l(),d(E,null,{default:r(()=>[t(s($),{title:"Users"}),t(D,null,{default:r(()=>[t(T,{icon:s(A),title:"Users",main:""},{default:r(()=>[a.can.delete?(l(),d(m,{key:0,"route-name":n.route("user.create"),icon:s(C),label:"Add",color:"info","rounded-full":"",small:""},null,8,["route-name","icon"])):i("",!0)]),_:1},8,["icon"]),n.$page.props.flash.message?(l(),d(q,{key:0,color:"success",icon:s(O)},{default:r(()=>[y(p(n.$page.props.flash.message),1)]),_:1},8,["icon"])):i("",!0),t(_,{class:"mb-6","has-table":""},{default:r(()=>[e("form",{onSubmit:c[1]||(c[1]=x(o=>s(f).get(n.route("user.index")),["prevent"]))},[e("div",L,[e("div",M,[v(e("input",{type:"search","onUpdate:modelValue":c[0]||(c[0]=o=>s(f).search=o),class:"rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50",placeholder:"Search"},null,512),[[w,s(f).search]]),t(m,{label:"Search",type:"submit",color:"info",class:"ml-4 inline-flex items-center px-4 py-2"})])])],32)]),_:1}),t(_,{class:"mb-6","has-table":""},{default:r(()=>[e("table",null,[e("thead",null,[e("tr",null,[e("th",null,[t(b,{label:"Name",attribute:"name"})]),e("th",null,[t(b,{label:"Email",attribute:"email"})]),a.can.edit||a.can.delete?(l(),u("th",z,"Actions")):i("",!0)])]),e("tbody",null,[(l(!0),u(N,null,B(a.users.data,o=>(l(),u("tr",{key:o.id},[e("td",H,[t(s(j),{href:n.route("user.show",o.id),class:"no-underline hover:underline text-cyan-600 dark:text-cyan-400"},{default:r(()=>[y(p(o.name),1)]),_:2},1032,["href"])]),e("td",I,p(o.email),1),a.can.edit||a.can.delete?(l(),u("td",K,[t(U,{type:"justify-start lg:justify-end","no-wrap":""},{default:r(()=>[a.can.edit?(l(),d(m,{key:0,"route-name":n.route("user.edit",o.id),color:"info",icon:s(S),small:""},null,8,["route-name","icon"])):i("",!0),a.can.delete?(l(),d(m,{key:1,color:"danger",icon:s(V),small:"",onClick:G=>k(o.id)},null,8,["icon","onClick"])):i("",!0)]),_:2},1024)])):i("",!0)]))),128))])]),e("div",P,[t(F,{data:a.users},null,8,["data"])])]),_:1})]),_:1})]),_:1}))}};export{de as default};
