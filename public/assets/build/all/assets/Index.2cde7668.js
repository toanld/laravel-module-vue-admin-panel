import{v as h,o as a,b as c,w as l,e as s,u as n,X as _,i as r,H as k,t as p,q as t,B as $,L as w,f as v,g as u,z as x,F as B}from"./md5.aa6931b5.js";import{m as C,r as N,t as O,l as j,u as D,v as M}from"./mdi.1fe06ea7.js";import{_ as S,a as V}from"./SectionMain.5eac383a.js";import{_ as A}from"./SectionTitleLineWithButton.7aa7a069.js";import{_ as d,a as y}from"./CardBox.165fa27d.js";import{_ as T}from"./BaseButtons.be0b0423.js";import{_ as q}from"./NotificationBar.980e9d63.js";import{_ as E,a as F}from"./Sort.b0709389.js";import"./layout.444d265a.js";import"./style.cab1fa8d.js";import"./FormControl.d3465687.js";import"./index.92938b48.js";import"./colors.ab6f195c.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.384a7273.js";const L={class:"py-2 flex"},z={class:"flex pl-4"},H=t("th",null," Description ",-1),I={key:0},P={"data-label":"Name"},U={"data-label":"Description"},X={key:0,class:"before:hidden lg:w-1 whitespace-nowrap"},G={class:"py-4"},de={__name:"Index",props:{menus:{type:Object,default:()=>({})},filters:{type:Object,default:()=>({})},can:{type:Object,default:()=>({})}},setup(e){const f=h({search:e.filters.search}),g=h({});function b(i){confirm("Are you sure you want to delete?")&&g.delete(route("menu.destroy",i))}return(i,m)=>(a(),c(S,null,{default:l(()=>[s(n(_),{title:"Menus"}),s(V,null,{default:l(()=>[s(A,{icon:n(C),title:"Menus",main:""},{default:l(()=>[e.can.delete?(a(),c(d,{key:0,"route-name":i.route("menu.create"),icon:n(N),label:"Add",color:"info","rounded-full":"",small:""},null,8,["route-name","icon"])):r("",!0)]),_:1},8,["icon"]),i.$page.props.flash.message?(a(),c(q,{key:0,color:"success",icon:n(O)},{default:l(()=>[k(p(i.$page.props.flash.message),1)]),_:1},8,["icon"])):r("",!0),s(y,{class:"mb-6","has-table":""},{default:l(()=>[t("form",{onSubmit:m[1]||(m[1]=v(o=>n(f).get(i.route("menu.index")),["prevent"]))},[t("div",L,[t("div",z,[$(t("input",{type:"search","onUpdate:modelValue":m[0]||(m[0]=o=>n(f).search=o),class:"rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50",placeholder:"Search"},null,512),[[w,n(f).search]]),s(d,{label:"Search",type:"submit",color:"info",class:"ml-4 inline-flex items-center px-4 py-2"})])])],32)]),_:1}),s(y,{class:"mb-6","has-table":""},{default:l(()=>[t("table",null,[t("thead",null,[t("tr",null,[t("th",null,[s(E,{label:"Name",attribute:"name"})]),H,e.can.edit||e.can.delete||e.can.manage?(a(),u("th",I,"Actions")):r("",!0)])]),t("tbody",null,[(a(!0),u(B,null,x(e.menus.data,o=>(a(),u("tr",{key:o.id},[t("td",P,p(o.name),1),t("td",U,p(o.description),1),e.can.edit||e.can.delete||e.can.manage?(a(),u("td",X,[s(T,{type:"justify-start lg:justify-end","no-wrap":""},{default:l(()=>[e.can.manage?(a(),c(d,{key:0,"route-name":i.route("menu.item.index",o.id),color:"warning",icon:n(j),small:""},null,8,["route-name","icon"])):r("",!0),e.can.edit?(a(),c(d,{key:1,"route-name":i.route("menu.edit",o.id),color:"info",icon:n(D),small:""},null,8,["route-name","icon"])):r("",!0),e.can.delete?(a(),c(d,{key:2,color:"danger",icon:n(M),small:"",onClick:K=>b(o.id)},null,8,["icon","onClick"])):r("",!0)]),_:2},1024)])):r("",!0)]))),128))])]),t("div",G,[s(F,{data:e.menus},null,8,["data"])])]),_:1})]),_:1})]),_:1}))}};export{de as default};
