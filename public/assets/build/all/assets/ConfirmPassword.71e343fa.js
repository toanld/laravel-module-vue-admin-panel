import{v as u,s as d,o as c,b as _,w as o,e as s,u as e,X as w,n,f as b,q as $}from"./md5.aa6931b5.js";import{_ as y,a as g,b as v}from"./FormValidationErrors.d9e75e98.js";import{a as x,_ as P}from"./CardBox.165fa27d.js";import{_ as V}from"./FormControl.d3465687.js";import{_ as m}from"./FormField.a3a1d628.js";import{a as h}from"./colors.ab6f195c.js";import"./style.cab1fa8d.js";import"./mdi.1fe06ea7.js";import"./index.92938b48.js";const C=$("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),R={__name:"ConfirmPassword",setup(S){const a=u({password:""}),l=d(null),p=()=>{a.post(route("password.confirm"),{onFinish:()=>{var t;a.reset(),(t=l.value)==null||t.focus()}})};return(t,r)=>(c(),_(y,null,{default:o(()=>[s(e(w),{title:"Secure Area"}),s(v,{bg:"purplePink"},{default:o(({cardClass:f})=>[s(x,{class:n(f),form:"",onSubmit:b(p,["prevent"])},{default:o(()=>[s(g),s(m,null,{default:o(()=>[C]),_:1}),s(m,{label:"Password","label-for":"password",help:"Please enter your password to confirm"},{default:o(()=>[s(V,{id:"password",onSetRef:r[0]||(r[0]=i=>l.value=i),modelValue:e(a).password,"onUpdate:modelValue":r[1]||(r[1]=i=>e(a).password=i),type:"password",required:"",autocomplete:"current-password"},null,8,["modelValue"])]),_:1}),s(h),s(P,{type:"submit",color:"info",label:"Confirm",class:n({"opacity-25":e(a).processing}),disabled:e(a).processing},null,8,["class","disabled"])]),_:2},1032,["class","onSubmit"])]),_:1})]),_:1}))}};export{R as default};