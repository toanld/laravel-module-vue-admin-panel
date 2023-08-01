import{c as q,u as j,a as I}from"./layout.3ebfc9c1.js";import{_ as H}from"./NavBar.24a1504e.js";import{_ as z,a as D,b as S}from"./BaseLevel.5a91c855.js";import{j as u,o as n,g as o,e as w,w as M,q as y,H as A,t as x,u as a,n as r,l as k,k as U,b as h,i as p,p as R,G as N,d as _,s as F,x as L,y as K,B as C,I as O,K as E,F as W,z as G,L as Y,M as J}from"./md5.aa6931b5.js";import{s as T}from"./mdi.1fe06ea7.js";import{g as P,c as Q,a as X}from"./BaseButtons.b83baa83.js";import{a as Z}from"./index.92938b48.js";const ee={class:"py-2 px-6"},te={class:"text-center md:text-left"},le=y("a",{href:"https://sosanhnha.com",target:"_blank"},"Sosanhnha.com",-1),ae={__name:"FooterBar",setup(e){const t=u(()=>new Date().getFullYear());return(l,s)=>(n(),o("footer",ee,[w(z,{class:r(a(q))},{default:M(()=>[y("div",te,[y("b",null,[A("\xA9"+x(a(t))+", ",1),le])])]),_:1},8,["class"])]))}},Ne={__name:"LayoutAuthenticated",setup(e){const t=j(),l=I();return(s,c)=>(n(),o("div",{class:r({dark:a(t).darkMode,"overflow-hidden lg:overflow-visible":a(l).isAsideMobileExpanded})},[y("div",{class:r([[{"ml-60 lg:ml-0":a(l).isAsideMobileExpanded},a(l).isAsideExpanded?"xl:pl-20":"xl:pl-60"],"pt-14 w-screen transition-position lg:w-auto bg-gray-50 dark:bg-slate-800 dark:text-slate-100"])},[w(H,{class:r([{"ml-60 lg:ml-0":a(l).isAsideMobileExpanded},a(l).isAsideExpanded?"xl:pl-20":"xl:pl-60"])},null,8,["class"]),w(D),k(s.$slots,"default"),w(ae)],2)],2))}},Ve={__name:"SectionMain",setup(e){return(t,l)=>(n(),o("section",{class:r(["p-6",a(q)])},[k(t.$slots,"default")],2))}},ne={__name:"BaseButton",props:{label:{type:[String,Number],default:null},icon:{type:String,default:null},href:{type:String,default:null},target:{type:String,default:null},routeName:{type:String,default:null},type:{type:String,default:null},color:{type:String,default:"white"},as:{type:String,default:null},small:Boolean,outline:Boolean,active:Boolean,disabled:Boolean,roundedFull:Boolean},setup(e){const t=e,l=u(()=>t.as?t.as:t.routeName?U:t.href?"a":"button"),s=u(()=>{var d;return l.value==="button"?(d=t.type)!=null?d:"button":null}),c=u(()=>t.small&&t.icon?"px-1":"px-2"),g=u(()=>{const d=["inline-flex","cursor-pointer","justify-center","items-center","whitespace-nowrap","focus:outline-none","transition-colors","focus:ring","duration-150","border",t.roundedFull?"rounded-full":"rounded",t.active?"ring ring-black dark:ring-white":"ring-blue-700",P(t.color,t.outline,!t.disabled)];return t.small?d.push("text-sm",t.roundedFull?"px-3 py-1":"p-1"):d.push("py-2",t.roundedFull?"px-6":"px-3"),t.disabled&&d.push("cursor-not-allowed",t.outline?"opacity-50":"opacity-70"),d});return(d,v)=>(n(),h(R(a(l)),{class:r(a(g)),href:e.routeName?e.routeName:e.href,type:a(s),target:e.target,disabled:e.disabled},{default:M(()=>[e.icon?(n(),h(S,{key:0,path:e.icon},null,8,["path"])):p("",!0),e.label?(n(),o("span",{key:1,class:r(a(c))},x(e.label),3)):p("",!0)]),_:1},8,["class","href","type","target","disabled"]))}},se={__name:"IconRounded",props:{icon:{type:String,required:!0},type:{type:String,default:null},w:{type:String,default:"w-12"},h:{type:String,default:"h-12"},bg:Boolean},setup(e){return(t,l)=>(n(),h(S,{path:e.icon,w:e.w,h:e.h,size:"24",class:r(["rounded-full",e.bg?a(Q)[e.type]:[a(X)[e.type],"bg-gray-50 dark:bg-slate-800"]])},null,8,["path","w","h","class"]))}},oe={class:"flex items-center justify-start"},Le={__name:"SectionTitleLineWithButton",props:{icon:{type:String,default:null},title:{type:String,required:!0},main:Boolean},setup(e){const t=u(()=>N().default);return(l,s)=>(n(),o("section",{class:r([{"pt-6":!e.main},"mb-6 flex items-center justify-between"])},[y("div",oe,[e.icon&&e.main?(n(),h(se,{key:0,icon:e.icon,type:"light",class:"mr-3",bg:""},null,8,["icon"])):e.icon?(n(),h(S,{key:1,path:e.icon,class:"mr-2",size:"20"},null,8,["path"])):p("",!0),y("h1",{class:r([e.main?"text-3xl":"text-2xl","leading-tight"])},x(e.title),3)]),a(t)?k(l.$slots,"default",{key:0}):(n(),h(ne,{key:1,icon:a(T),small:""},null,8,["icon"]))],2))}},re={key:0,class:"flex items-stretch border-b border-gray-100 dark:border-slate-800"},ie={key:1,class:"text-center py-24 text-gray-500 dark:text-slate-400"},ue=y("p",null,"Nothing's here\u2026",-1),ce=[ue],de={key:3,class:"p-6 border-t border-gray-100 dark:border-slate-800"},qe={__name:"CardBox",props:{title:{type:String,default:null},icon:{type:String,default:null},headerIcon:{type:String,default:null},rounded:{type:String,default:"rounded-xl"},hasTable:Boolean,empty:Boolean,form:Boolean,hoverable:Boolean,modal:Boolean},emits:["header-icon-click","submit"],setup(e,{emit:t}){const l=e,s=u(()=>l.form?"form":"div"),c=N(),g=u(()=>c.footer&&!!c.footer()),d=u(()=>{const i=[l.rounded,l.modal?"dark:bg-slate-900":"dark:bg-slate-900/70"];return l.hoverable&&i.push("hover:shadow-lg transition-shadow duration-500"),i}),v=u(()=>{var i;return(i=l.headerIcon)!=null?i:T}),$=()=>{t("header-icon-click")},B=i=>{t("submit",i)};return(i,m)=>(n(),h(R(a(s)),{class:r([a(d),"bg-white flex flex-col"]),onSubmit:B},{default:M(()=>[e.title?(n(),o("header",re,[y("div",{class:r(["flex items-center py-3 grow font-bold",[e.icon?"px-4":"px-6"]])},[e.icon?(n(),h(S,{key:0,path:e.icon,class:"mr-3"},null,8,["path"])):p("",!0),A(" "+x(e.title),1)],2),y("button",{class:"flex items-center py-3 px-4 justify-center ring-blue-700 focus:ring",onClick:$},[w(S,{path:a(v)},null,8,["path"])])])):p("",!0),e.empty?(n(),o("div",ie,ce)):(n(),o("div",{key:2,class:r(["flex-1",{"p-6":!e.hasTable}])},[k(i.$slots,"default")],2)),a(g)?(n(),o("div",de,[k(i.$slots,"footer")])):p("",!0)]),_:3},40,["class"]))}},fe={class:"mb-6 last:mb-0"},me=["for"],he={key:1,class:"text-xs text-gray-500 dark:text-slate-400 mt-1"},Ae={__name:"FormField",props:{label:{type:String,default:null},labelFor:{type:String,default:null},help:{type:String,default:null}},setup(e){const t=N(),l=u(()=>{const s=[],c=t.default().length;return c>1&&s.push("grid grid-cols-1 gap-3"),c===2&&s.push("md:grid-cols-2"),s});return(s,c)=>(n(),o("div",fe,[e.label?(n(),o("label",{key:0,for:e.labelFor,class:"block font-bold mb-2"},x(e.label),9,me)):p("",!0),y("div",{class:r(a(l))},[k(s.$slots,"default")],2),e.help?(n(),o("div",he,x(e.help),1)):p("",!0)]))}},pe=_("main",{state:()=>({userName:null,userEmail:null,userAvatar:null,isFieldFocusRegistered:!1,clients:[],history:[]}),actions:{setUser(e){e.name&&(this.userName=e.name),e.email&&(this.userEmail=e.email),e.avatar&&(this.userAvatar=e.avatar)},fetch(e){Z.get(`data-sources/${e}.json`).then(t=>{t.data&&t.data.data&&(this[e]=t.data.data)}).catch(t=>{alert(t.message)})}}}),ye={__name:"FormControlIcon",props:{icon:{type:String,default:null},h:{type:String,default:null}},setup(e){return(t,l)=>(n(),h(S,{path:e.icon,w:"w-10",h:e.h,class:"absolute top-0 left-0 z-10 pointer-events-none text-gray-500 dark:text-slate-400"},null,8,["path","h"]))}},ge={class:"relative"},be=["id","name"],xe={key:0,value:""},ke=["value","innerHTML"],ve=["id","name","placeholder","required"],Se=["id","name","inputmode","autocomplete","required","placeholder","type"],Re={__name:"FormControl",props:{name:{type:String,default:null},id:{type:String,default:null},autocomplete:{type:String,default:null},placeholder:{type:String,default:null},inputmode:{type:String,default:null},icon:{type:String,default:null},options:{type:[Array,Object],default:null},type:{type:String,default:"text"},modelValue:{type:[String,Number,Boolean,Array,Object],default:""},required:Boolean,borderless:Boolean,transparent:Boolean,ctrlKFocus:Boolean,error:{type:String,default:null}},emits:["update:modelValue","setRef"],setup(e,{emit:t}){const l=e,s=u({get:()=>l.modelValue,set:m=>{t("update:modelValue",m)}}),c=u(()=>{const m=["px-3 py-2 max-w-full focus:ring focus:outline-none rounded w-full","dark:placeholder-gray-400",g.value==="textarea"?"h-24":"h-12",l.borderless?"border-0":"border",l.transparent?"bg-transparent":"bg-white dark:bg-slate-800",l.error?"border-red-400":"border-gray-700"];return l.icon&&m.push("pl-10"),m}),g=u(()=>l.options?"select":l.type),d=u(()=>l.type==="textarea"?"h-full":"h-12"),v=pe(),$=F(null),B=F(null),i=F(null);if(L(()=>{$.value?t("setRef",$.value):B.value?t("setRef",B.value):t("setRef",i.value)}),l.ctrlKFocus){const m=f=>{f.ctrlKey&&f.key==="k"?(f.preventDefault(),i.value.focus()):f.key==="Escape"&&i.value.blur()};L(()=>{v.isFieldFocusRegistered||(window.addEventListener("keydown",m),v.isFieldFocusRegistered=!0)}),K(()=>{window.removeEventListener("keydown",m),v.isFieldFocusRegistered=!1})}return(m,f)=>(n(),o("div",ge,[a(g)==="select"?C((n(),o("select",{key:0,id:e.id,"onUpdate:modelValue":f[0]||(f[0]=b=>E(s)?s.value=b:null),name:e.name,class:r(a(c))},[e.placeholder?(n(),o("option",xe,x(e.placeholder),1)):p("",!0),(n(!0),o(W,null,G(e.options,(b,V)=>(n(),o("option",{key:V,value:V,innerHTML:b},null,8,ke))),128))],10,be)),[[O,a(s)]]):a(g)==="textarea"?C((n(),o("textarea",{key:1,id:e.id,"onUpdate:modelValue":f[1]||(f[1]=b=>E(s)?s.value=b:null),class:r(a(c)),name:e.name,placeholder:e.placeholder,required:e.required},null,10,ve)),[[Y,a(s)]]):C((n(),o("input",{key:2,id:e.id,ref_key:"inputEl",ref:i,"onUpdate:modelValue":f[2]||(f[2]=b=>E(s)?s.value=b:null),name:e.name,inputmode:e.inputmode,autocomplete:e.autocomplete,required:e.required,placeholder:e.placeholder,type:a(g),class:r(a(c))},null,10,Se)),[[J,a(s)]]),e.icon?(n(),h(ye,{key:3,icon:e.icon,h:a(d)},null,8,["icon","h"])):p("",!0),k(m.$slots,"default")]))}};export{Ne as _,Le as a,ne as b,qe as c,Ae as d,Re as e,Ve as f};