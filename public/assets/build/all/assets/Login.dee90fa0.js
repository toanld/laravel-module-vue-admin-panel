import{v as g,o as i,b as n,w as s,e,u as o,X as V,n as u,f as $,H as d,t as y,i as f,k}from"./md5.aa6931b5.js";import{k as P,B as R}from"./mdi.1fe06ea7.js";import{_ as B,a as S,c as h,b as q}from"./FormValidationErrors.d9e75e98.js";import{a as C,_ as p}from"./CardBox.165fa27d.js";import{_ as L}from"./FormCheckRadioGroup.aaf650e4.js";import{_ as c}from"./FormField.a3a1d628.js";import{_}from"./FormControl.d3465687.js";import{a as N}from"./colors.ab6f195c.js";import{_ as U}from"./BaseButtons.be0b0423.js";import{_ as v}from"./BaseLevel.384a7273.js";import"./style.cab1fa8d.js";import"./index.92938b48.js";const I={__name:"Login",props:{canResetPassword:Boolean,status:{type:String,default:null}},setup(m){const a=g({email:"",password:"",remember:["on"]}),b=()=>{a.transform(t=>({...t,remember:a.remember&&a.remember.length?"on":""})).post(route("login"),{onFinish:()=>a.reset("password")})};return(t,r)=>(i(),n(B,null,{default:s(()=>[e(o(V),{title:"Login"}),e(q,{bg:"purplePink"},{default:s(({cardClass:w})=>[e(C,{class:u(w),form:"",onSubmit:$(b,["prevent"])},{default:s(()=>[e(S),m.status?(i(),n(h,{key:0,color:"info"},{default:s(()=>[d(y(m.status),1)]),_:1})):f("",!0),e(c,{label:"Email","label-for":"email",help:"Please enter your email"},{default:s(()=>[e(_,{modelValue:o(a).email,"onUpdate:modelValue":r[0]||(r[0]=l=>o(a).email=l),icon:o(P),id:"email",autocomplete:"email",type:"email",required:""},null,8,["modelValue","icon"])]),_:1}),e(c,{label:"Password","label-for":"password",help:"Please enter your password"},{default:s(()=>[e(_,{modelValue:o(a).password,"onUpdate:modelValue":r[1]||(r[1]=l=>o(a).password=l),icon:o(R),type:"password",id:"password",autocomplete:"current-password",required:""},null,8,["modelValue","icon"])]),_:1}),e(L,{modelValue:o(a).remember,"onUpdate:modelValue":r[2]||(r[2]=l=>o(a).remember=l),name:"remember",options:{on:"Remember"}},null,8,["modelValue"]),e(N),e(v,null,{default:s(()=>[e(U,null,{default:s(()=>[e(p,{type:"submit",color:"info",label:"Login",class:u({"opacity-25":o(a).processing}),disabled:o(a).processing},null,8,["class","disabled"]),m.canResetPassword?(i(),n(p,{key:0,"route-name":t.route("password.request"),color:"info",outline:"",label:"Remind"},null,8,["route-name"])):f("",!0)]),_:1}),e(o(k),{href:t.route("register")},{default:s(()=>[d(" Register ")]),_:1},8,["href"])]),_:1})]),_:2},1032,["class","onSubmit"])]),_:1})]),_:1}))}};export{I as default};