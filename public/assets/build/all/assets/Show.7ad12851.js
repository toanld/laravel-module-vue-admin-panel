import{o as r,b as n,w as a,e,u as o,X as m,q as t,t as i}from"./md5.aa6931b5.js";import{x as c,a as d}from"./mdi.1fe06ea7.js";import{_,a as p}from"./SectionMain.5eac383a.js";import{_ as u}from"./SectionTitleLineWithButton.7aa7a069.js";import{_ as f,a as b}from"./CardBox.165fa27d.js";import"./layout.444d265a.js";import"./style.cab1fa8d.js";import"./FormControl.d3465687.js";import"./index.92938b48.js";import"./colors.ab6f195c.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.384a7273.js";const h=t("td",{class:"p-4 pl-8 text-slate-500 dark:text-slate-400 hidden lg:block"}," Name ",-1),w={"data-label":"Name"},x=t("td",{class:"p-4 pl-8 text-slate-500 dark:text-slate-400 hidden lg:block"}," Created ",-1),k={"data-label":"Created"},q={__name:"Show",props:{permission:{type:Object,default:()=>({})}},setup(s){return(l,B)=>(r(),n(_,null,{default:a(()=>[e(o(m),{title:"View permission"}),e(p,null,{default:a(()=>[e(u,{icon:o(c),title:"View permission",main:""},{default:a(()=>[e(f,{"route-name":l.route("permission.index"),icon:o(d),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1},8,["icon"]),e(b,{class:"mb-6"},{default:a(()=>[t("table",null,[t("tbody",null,[t("tr",null,[h,t("td",w,i(s.permission.name),1)]),t("tr",null,[x,t("td",k,i(new Date(s.permission.created_at).toLocaleString()),1)])])])]),_:1})]),_:1})]),_:1}))}};export{q as default};