import{f as h}from"./mdi.1fe06ea7.js";import{d as _,c as g,_ as k}from"./colors.ab6f195c.js";import{_ as y}from"./BaseLevel.384a7273.js";import{_ as x}from"./CardBox.165fa27d.js";import{j as n,s as B,G as w,o,g as C,e as S,w as $,q as r,b as i,i as c,l as m,u as t,n as b}from"./md5.aa6931b5.js";const v={class:"flex flex-col md:flex-row items-center"},N={class:"text-center md:text-left"},G={__name:"NotificationBar",props:{icon:{type:String,default:null},outline:Boolean,color:{type:String,required:!0}},setup(e){const s=e,u=n(()=>s.outline?_[s.color]:g[s.color]),a=B(!1),d=()=>{a.value=!0},f=w(),p=n(()=>f.right);return(l,V)=>a.value?c("",!0):(o(),C("div",{key:0,class:b([t(u),"px-3 py-6 md:py-3 mb-6 last:mb-0 border rounded transition-colors duration-150"])},[S(y,null,{default:$(()=>[r("div",v,[e.icon?(o(),i(k,{key:0,path:e.icon,w:"w-10 md:w-5",h:"h-10 md:h-5",size:"24",class:"md:mr-2"},null,8,["path"])):c("",!0),r("span",N,[m(l.$slots,"default")])]),t(p)?m(l.$slots,"right",{key:0}):(o(),i(x,{key:1,icon:t(h),outline:e.outline,small:"",onClick:d},null,8,["icon","outline"]))]),_:3})],2))}};export{G as _};
