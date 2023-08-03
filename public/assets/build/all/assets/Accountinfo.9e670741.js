import{v as V,o as d,b,w as o,e as s,u as e,H as q,t as i,i as m,q as B,f as x,n as u,g as p}from"./md5.aa6931b5.js";import{k as y,a as C,t as N,y as A,z as S,A as h,B as R,C as $}from"./mdi.1fe06ea7.js";import{_ as U,a as P}from"./SectionMain.5eac383a.js";import{_,a as k}from"./CardBox.165fa27d.js";import{a as E}from"./colors.ab6f195c.js";import{_ as c}from"./FormField.a3a1d628.js";import{_ as f}from"./FormControl.d3465687.js";import{_ as g}from"./BaseButtons.be0b0423.js";import{_ as F}from"./NotificationBar.980e9d63.js";import{_ as O}from"./SectionTitleLineWithButton.7aa7a069.js";import"./layout.444d265a.js";import"./style.cab1fa8d.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./BaseLevel.384a7273.js";import"./index.92938b48.js";const Y={class:"grid grid-cols-1 lg:grid-cols-2 gap-6"},z={key:0,class:"text-red-400 text-sm"},L={key:0,class:"text-red-400 text-sm"},M={key:0,class:"text-red-400 text-sm"},T={key:0,class:"text-red-400 text-sm"},j={key:0,class:"text-red-400 text-sm"},te={__name:"Accountinfo",props:{user:{type:Object,default:()=>({})}},setup(v){const w=v,t=V({name:w.user.name,email:w.user.email}),r=V({old_password:null,new_password:null,confirm_password:null});return(n,a)=>(d(),b(U,null,{default:o(()=>[s(P,null,{default:o(()=>[s(O,{icon:e(y),title:"Profile",main:""},{default:o(()=>[s(_,{"route-name":n.route("dashboard"),icon:e(C),label:"Back",color:"white","rounded-full":"",small:""},null,8,["route-name","icon"])]),_:1},8,["icon"]),n.$page.props.flash.message?(d(),b(F,{key:0,color:"success",icon:e(N)},{default:o(()=>[q(i(n.$page.props.flash.message),1)]),_:1},8,["icon"])):m("",!0),B("div",Y,[s(k,{title:"Edit Profile",icon:e(A),form:"",onSubmit:a[2]||(a[2]=x(l=>e(t).post(n.route("admin.account.info.store")),["prevent"]))},{footer:o(()=>[s(g,null,{default:o(()=>[s(_,{color:"info",type:"submit",label:"Submit"})]),_:1})]),default:o(()=>[s(c,{label:"Name",help:"Required. Your name",class:u({"text-red-400":e(t).errors.name})},{default:o(()=>[s(f,{modelValue:e(t).name,"onUpdate:modelValue":a[0]||(a[0]=l=>e(t).name=l),icon:e(y),name:"name",required:"",error:e(t).errors.name},{default:o(()=>[e(t).errors.name?(d(),p("div",z,i(e(t).errors.name),1)):m("",!0)]),_:1},8,["modelValue","icon","error"])]),_:1},8,["class"]),s(c,{label:"Email",help:"Required. Your e-mail",class:u({"text-red-400":e(t).errors.email})},{default:o(()=>[s(f,{modelValue:e(t).email,"onUpdate:modelValue":a[1]||(a[1]=l=>e(t).email=l),icon:e(S),type:"email",name:"email",required:"",error:e(t).errors.email},{default:o(()=>[e(t).errors.email?(d(),p("div",L,i(e(t).errors.email),1)):m("",!0)]),_:1},8,["modelValue","icon","error"])]),_:1},8,["class"])]),_:1},8,["icon"]),s(k,{title:"Change Password",icon:e(h),form:"",onSubmit:a[6]||(a[6]=x(l=>e(r).post(n.route("admin.account.password.store"),{preserveScroll:!0,onSuccess:()=>e(r).reset()}),["prevent"]))},{footer:o(()=>[s(g,null,{default:o(()=>[s(_,{type:"submit",color:"info",label:"Submit"})]),_:1})]),default:o(()=>[s(c,{label:"Current password",help:"Required. Your current password",class:u({"text-red-400":e(r).errors.old_password})},{default:o(()=>[s(f,{modelValue:e(r).old_password,"onUpdate:modelValue":a[3]||(a[3]=l=>e(r).old_password=l),icon:e(R),name:"old_password",type:"password",required:"",error:e(r).errors.old_password},{default:o(()=>[e(r).errors.old_password?(d(),p("div",M,i(e(r).errors.old_password),1)):m("",!0)]),_:1},8,["modelValue","icon","error"])]),_:1},8,["class"]),s(E),s(c,{label:"New password",help:"Required. New password",class:u({"text-red-400":e(r).errors.new_password})},{default:o(()=>[s(f,{modelValue:e(r).new_password,"onUpdate:modelValue":a[4]||(a[4]=l=>e(r).new_password=l),icon:e($),name:"new_password",type:"password",required:"",error:e(r).errors.new_password},{default:o(()=>[e(r).errors.new_password?(d(),p("div",T,i(e(r).errors.new_password),1)):m("",!0)]),_:1},8,["modelValue","icon","error"])]),_:1},8,["class"]),s(c,{label:"Confirm password",help:"Required. New password one more time",class:u({"text-red-400":e(r).errors.confirm_password})},{default:o(()=>[s(f,{modelValue:e(r).confirm_password,"onUpdate:modelValue":a[5]||(a[5]=l=>e(r).confirm_password=l),icon:e($),name:"confirm_password",type:"password",required:"",error:e(r).errors.confirm_password},{default:o(()=>[e(r).errors.confirm_password?(d(),p("div",j,i(e(r).errors.confirm_password),1)):m("",!0)]),_:1},8,["modelValue","icon","error"])]),_:1},8,["class"])]),_:1},8,["icon"])])]),_:1})]),_:1}))}};export{te as default};
