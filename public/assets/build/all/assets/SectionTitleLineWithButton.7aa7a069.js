import{s as r}from"./mdi.1fe06ea7.js";import{c as u,b as m,_ as o}from"./colors.ab6f195c.js";import{_ as d}from"./CardBox.165fa27d.js";import{o as e,b as a,n as i,u as n,j as f,G as g,g as h,q as c,i as y,t as S,l as b}from"./md5.aa6931b5.js";const x={__name:"IconRounded",props:{icon:{type:String,required:!0},type:{type:String,default:null},w:{type:String,default:"w-12"},h:{type:String,default:"h-12"},bg:Boolean},setup(t){return(l,s)=>(e(),a(o,{path:t.icon,w:t.w,h:t.h,size:"24",class:i(["rounded-full",t.bg?n(u)[t.type]:[n(m)[t.type],"bg-gray-50 dark:bg-slate-800"]])},null,8,["path","w","h","class"]))}},k={class:"flex items-center justify-start"},q={__name:"SectionTitleLineWithButton",props:{icon:{type:String,default:null},title:{type:String,required:!0},main:Boolean},setup(t){const l=f(()=>g().default);return(s,B)=>(e(),h("section",{class:i([{"pt-6":!t.main},"mb-6 flex items-center justify-between"])},[c("div",k,[t.icon&&t.main?(e(),a(x,{key:0,icon:t.icon,type:"light",class:"mr-3",bg:""},null,8,["icon"])):t.icon?(e(),a(o,{key:1,path:t.icon,class:"mr-2",size:"20"},null,8,["path"])):y("",!0),c("h1",{class:i([t.main?"text-3xl":"text-2xl","leading-tight"])},S(t.title),3)]),n(l)?b(s.$slots,"default",{key:0}):(e(),a(d,{key:1,icon:n(r),small:""},null,8,["icon"]))],2))}};export{q as _};