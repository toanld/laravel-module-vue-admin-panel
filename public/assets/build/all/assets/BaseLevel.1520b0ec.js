import{P as c,h as s}from"./md5.70b4c196.js";const m=c({name:"BaseLevel",props:{mobile:Boolean,type:{type:String,default:"justify-between"}},render(){const t=[this.type,"items-center"],n=["flex"],l=["block","md:flex"],e=["flex","shrink-0","grow-0","items-center","justify-center"];return s("div",{class:t.concat(this.mobile?n:l)},this.$slots.default().map((a,o)=>{const i=!this.mobile&&this.$slots.default().length>o+1?e.concat(["mb-6","md:mb-0"]):e;return s("div",{class:i},[a])}))}});export{m as _};