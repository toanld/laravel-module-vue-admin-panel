import{v as f,o as i,b as p,w as a,e as r,u as e,X as u,f as _,n,g as d,t as c,i as b}from"./md5.70b4c196.js";import{x as $,a as x}from"./mdi.1fe06ea7.js";import{_ as y,a as k}from"./SectionMain.e07b901c.js";import{_ as w}from"./SectionTitleLineWithButton.356a1587.js";import{_ as l,a as B}from"./CardBox.2b30ec6e.js";import{_ as C}from"./FormField.6453adae.js";import{_ as V}from"./FormControl.6d368bba.js";import{_ as g}from"./BaseButtons.77aed73d.js";import"./layout.5230da31.js";import"./style.a65dbca8.js";import"./colors.8bfa7444.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.94af2ec9.js";import"./index.6361a0cd.js";const v={key:0,class:"text-red-400 text-sm"},F={__name:"Create",setup(N){const o=f({name:""});return(s,t)=>(i(),p(y,null,{default:a(()=>[r(e(u),{title:"Create permission"}),r(k,null,{default:a(()=>[r(w,{icon:e($),title:"Add permission",main:""},{default:a(()=>[r(l,{"route-name":s.route("permission.index"),icon:e(x),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1},8,["icon"]),r(B,{form:"",onSubmit:t[1]||(t[1]=_(m=>e(o).post(s.route("permission.store")),["prevent"]))},{footer:a(()=>[r(g,null,{default:a(()=>[r(l,{type:"submit",color:"info",label:"Submit",class:n({"opacity-25":e(o).processing}),disabled:e(o).processing},null,8,["class","disabled"])]),_:1})]),default:a(()=>[r(C,{label:"Name",class:n({"text-red-400":e(o).errors.name})},{default:a(()=>[r(V,{modelValue:e(o).name,"onUpdate:modelValue":t[0]||(t[0]=m=>e(o).name=m),type:"text",placeholder:"Enter Name",error:e(o).errors.name},{default:a(()=>[e(o).errors.name?(i(),d("div",v,c(e(o).errors.name),1)):b("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"])]),_:1})]),_:1})]),_:1}))}};export{F as default};