import{v as _,o as l,b,w as a,e as t,u as e,X as x,f as $,n as i,g as m,t as d,i as p}from"./md5.aa6931b5.js";import{a as V}from"./mdi.1fe06ea7.js";import{_ as y,a as k,b as u,c as v,d as c,e as f,f as w}from"./FormControl.4efa94b2.js";import{_ as B}from"./BaseButtons.b83baa83.js";import"./layout.3ebfc9c1.js";import"./NavBar.24a1504e.js";import"./BaseLevel.5a91c855.js";import"./index.92938b48.js";const C={key:0,class:"text-red-400 text-sm"},g={key:0,class:"text-red-400 text-sm"},M={__name:"Create",setup(N){const r=_({name:"",description:""});return(n,o)=>(l(),b(y,null,{default:a(()=>[t(e(x),{title:"Create erp"}),t(w,null,{default:a(()=>[t(k,{title:"Add erp",main:""},{default:a(()=>[t(u,{"route-name":n.route("erp.index"),icon:e(V),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1}),t(v,{form:"",onSubmit:o[2]||(o[2]=$(s=>e(r).post(n.route("erp.store")),["prevent"]))},{footer:a(()=>[t(B,null,{default:a(()=>[t(u,{type:"submit",color:"info",label:"Submit",class:i({"opacity-25":e(r).processing}),disabled:e(r).processing},null,8,["class","disabled"])]),_:1})]),default:a(()=>[t(c,{label:"Name",class:i({"text-red-400":e(r).errors.name})},{default:a(()=>[t(f,{modelValue:e(r).name,"onUpdate:modelValue":o[0]||(o[0]=s=>e(r).name=s),type:"text",placeholder:"Enter Name",error:e(r).errors.name},{default:a(()=>[e(r).errors.name?(l(),m("div",C,d(e(r).errors.name),1)):p("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"]),t(c,{label:"Description",class:i({"text-red-400":e(r).errors.description})},{default:a(()=>[t(f,{modelValue:e(r).description,"onUpdate:modelValue":o[1]||(o[1]=s=>e(r).description=s),type:"textarea",placeholder:"Enter Description",error:e(r).errors.description},{default:a(()=>[e(r).errors.description?(l(),m("div",g,d(e(r).errors.description),1)):p("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"])]),_:1})]),_:1})]),_:1}))}};export{M as default};
