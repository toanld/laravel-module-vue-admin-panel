import{v as x,o as n,b as V,w as o,e as r,u as e,X as $,f as y,n as m,g as p,t as l,i as c,q as k}from"./md5.70b4c196.js";import{m as v,a as B}from"./mdi.1fe06ea7.js";import{_ as N,a as h}from"./SectionMain.e07b901c.js";import{_ as w}from"./SectionTitleLineWithButton.356a1587.js";import{_ as f,a as g}from"./CardBox.2b30ec6e.js";import{_ as d}from"./FormField.6453adae.js";import{_}from"./FormControl.6d368bba.js";import{_ as E}from"./BaseButtons.77aed73d.js";import"./layout.5230da31.js";import"./style.a65dbca8.js";import"./colors.8bfa7444.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.94af2ec9.js";import"./index.6361a0cd.js";const U={key:0,class:"text-red-400 text-sm"},C={key:0,class:"text-red-400 text-sm"},J={__name:"Edit",props:{menu:{type:Object,default:()=>({})}},setup(b){const s=b,t=x({_method:"put",name:s.menu.name,description:s.menu.description});return(u,a)=>(n(),V(N,null,{default:o(()=>[r(e($),{title:"Update menu"}),r(h,null,{default:o(()=>[r(w,{icon:e(v),title:"Update menu",main:""},{default:o(()=>[r(f,{"route-name":u.route("menu.index"),icon:e(B),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1},8,["icon"]),r(g,{form:"",onSubmit:a[2]||(a[2]=y(i=>e(t).post(u.route("menu.update",s.menu.id)),["prevent"]))},{footer:o(()=>[r(E,null,{default:o(()=>[r(f,{type:"submit",color:"info",label:"Submit",class:m({"opacity-25":e(t).processing}),disabled:e(t).processing},null,8,["class","disabled"])]),_:1})]),default:o(()=>[r(d,{label:"Name",class:m({"text-red-400":e(t).errors.name})},{default:o(()=>[r(_,{modelValue:e(t).name,"onUpdate:modelValue":a[0]||(a[0]=i=>e(t).name=i),type:"text",placeholder:"Enter Name",error:e(t).errors.name},{default:o(()=>[e(t).errors.name?(n(),p("div",U,l(e(t).errors.name),1)):c("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"]),r(d,{label:"Machine Name"},{default:o(()=>[k("div",null,l(s.menu.machine_name),1)]),_:1}),r(d,{label:"Description",class:m({"text-red-400":e(t).errors.description})},{default:o(()=>[r(_,{modelValue:e(t).description,"onUpdate:modelValue":a[1]||(a[1]=i=>e(t).description=i),type:"text",placeholder:"Enter Description",error:e(t).errors.description},{default:o(()=>[e(t).errors.description?(n(),p("div",C,l(e(t).errors.description),1)):c("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"])]),_:1})]),_:1})]),_:1}))}};export{J as default};