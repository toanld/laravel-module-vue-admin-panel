import{v as _,o as l,b,w as o,e as t,u as e,X as x,f as $,n,g as m,t as d,i as p}from"./md5.70b4c196.js";import{a as V}from"./mdi.1fe06ea7.js";import{_ as y,a as k,b as u,c as v,d as c,e as f,f as w}from"./FormControl.130028e1.js";import{_ as B}from"./BaseButtons.9ff78bc1.js";import"./layout.e715207b.js";import"./AsideMenu.a6c1d6c6.js";import"./UserProfile.vue_vue_type_style_index_0_lang.75410824.js";import"./index.6361a0cd.js";import"./BaseLevel.1520b0ec.js";const C={key:0,class:"text-red-400 text-sm"},g={key:0,class:"text-red-400 text-sm"},O={__name:"Create",setup(N){const r=_({name:"",description:""});return(i,s)=>(l(),b(y,null,{default:o(()=>[t(e(x),{title:"Create personnel"}),t(w,null,{default:o(()=>[t(k,{title:"Add personnel",main:""},{default:o(()=>[t(u,{"route-name":i.route("personnel.index"),icon:e(V),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1}),t(v,{form:"",onSubmit:s[2]||(s[2]=$(a=>e(r).post(i.route("personnel.store")),["prevent"]))},{footer:o(()=>[t(B,null,{default:o(()=>[t(u,{type:"submit",color:"info",label:"Submit",class:n({"opacity-25":e(r).processing}),disabled:e(r).processing},null,8,["class","disabled"])]),_:1})]),default:o(()=>[t(c,{label:"Name",class:n({"text-red-400":e(r).errors.name})},{default:o(()=>[t(f,{modelValue:e(r).name,"onUpdate:modelValue":s[0]||(s[0]=a=>e(r).name=a),type:"text",placeholder:"Enter Name",error:e(r).errors.name},{default:o(()=>[e(r).errors.name?(l(),m("div",C,d(e(r).errors.name),1)):p("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"]),t(c,{label:"Description",class:n({"text-red-400":e(r).errors.description})},{default:o(()=>[t(f,{modelValue:e(r).description,"onUpdate:modelValue":s[1]||(s[1]=a=>e(r).description=a),type:"textarea",placeholder:"Enter Description",error:e(r).errors.description},{default:o(()=>[e(r).errors.description?(l(),m("div",g,d(e(r).errors.description),1)):p("",!0)]),_:1},8,["modelValue","error"])]),_:1},8,["class"])]),_:1})]),_:1})]),_:1}))}};export{O as default};
