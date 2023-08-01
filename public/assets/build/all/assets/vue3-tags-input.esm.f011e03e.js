import{Z as A,P as Q,a0 as X,s as Y,x as ee,y as te,a1 as ne,a2 as ie,h as D,U as P,j as ae,o as h,b as G,u as L,K as oe,g as p,D as re,a3 as le,B as F,q as T,F as K,z as R,l as E,a4 as z,a5 as se,t as de,f as V,i as I,a6 as ue,L as ce,n as B,a7 as fe}from"./md5.aa6931b5.js";var ve=["onActivate","onAddUndo","onBeforeAddUndo","onBeforeExecCommand","onBeforeGetContent","onBeforeRenderUI","onBeforeSetContent","onBeforePaste","onBlur","onChange","onClearUndos","onClick","onContextMenu","onCopy","onCut","onDblclick","onDeactivate","onDirty","onDrag","onDragDrop","onDragEnd","onDragGesture","onDragOver","onDrop","onExecCommand","onFocus","onFocusIn","onFocusOut","onGetContent","onHide","onInit","onKeyDown","onKeyPress","onKeyUp","onLoadContent","onMouseDown","onMouseEnter","onMouseLeave","onMouseMove","onMouseOut","onMouseOver","onMouseUp","onNodeChange","onObjectResizeStart","onObjectResized","onObjectSelected","onPaste","onPostProcess","onPostRender","onPreProcess","onProgressState","onRedo","onRemove","onReset","onSaveContent","onSelectionChange","onSetAttrib","onSetContent","onShow","onSubmit","onUndo","onVisualAid"],me=function(e){return ve.map(function(n){return n.toLowerCase()}).indexOf(e.toLowerCase())!==-1},he=function(e,n,t){Object.keys(n).filter(me).forEach(function(o){var i=n[o];typeof i=="function"&&(o==="onInit"?i(e,t):t.on(o.substring(2),function(a){return i(a,t)}))})},ge=function(e,n,t,o){var i=e.modelEvents?e.modelEvents:null,a=Array.isArray(i)?i.join(" "):i;A(o,function(u,c){t&&typeof u=="string"&&u!==c&&u!==t.getContent({format:e.outputFormat})&&t.setContent(u)}),t.on(a||"change input undo redo",function(){n.emit("update:modelValue",t.getContent({format:e.outputFormat}))})},pe=function(e,n,t,o,i,a){o.setContent(a()),t.attrs["onUpdate:modelValue"]&&ge(n,t,o,i),he(e,t.attrs,o)},U=0,$=function(e){var n=Date.now(),t=Math.floor(Math.random()*1e9);return U++,e+"_"+t+U+String(n)},ye=function(e){return e!==null&&e.tagName.toLowerCase()==="textarea"},q=function(e){return typeof e>"u"||e===""?[]:Array.isArray(e)?e:e.split(" ")},xe=function(e,n){return q(e).concat(q(n))},we=function(e){return e==null},H=function(){return{listeners:[],scriptId:$("tiny-script"),scriptLoaded:!1}},be=function(){var e=H(),n=function(i,a,u,c){var r=a.createElement("script");r.referrerPolicy="origin",r.type="application/javascript",r.id=i,r.src=u;var v=function(){r.removeEventListener("load",v),c()};r.addEventListener("load",v),a.head&&a.head.appendChild(r)},t=function(i,a,u){e.scriptLoaded?u():(e.listeners.push(u),i.getElementById(e.scriptId)||n(e.scriptId,i,a,function(){e.listeners.forEach(function(c){return c()}),e.scriptLoaded=!0}))},o=function(){e=H()};return{load:t,reinitialize:o}},Ce=be(),ke=function(){return typeof window<"u"?window:global},C=function(){var e=ke();return e&&e.tinymce?e.tinymce:null},Te={apiKey:String,cloudChannel:String,id:String,init:Object,initialValue:String,inline:Boolean,modelEvents:[String,Array],plugins:[String,Array],tagName:String,toolbar:[String,Array],modelValue:String,disabled:Boolean,tinymceScriptSrc:String,outputFormat:{type:String,validator:function(e){return e==="html"||e==="text"}}},k=globalThis&&globalThis.__assign||function(){return k=Object.assign||function(e){for(var n,t=1,o=arguments.length;t<o;t++){n=arguments[t];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(e[i]=n[i])}return e},k.apply(this,arguments)},Se=function(e,n,t,o){return e(o||"div",{id:n,ref:t})},Ie=function(e,n,t){return e("textarea",{id:n,visibility:"hidden",ref:t})},_e=Q({props:Te,setup:function(e,n){var t=e.init?k({},e.init):{},o=X(e),i=o.disabled,a=o.modelValue,u=o.tagName,c=Y(null),r=null,v=e.id||$("tiny-vue"),d=e.init&&e.init.inline||e.inline,m=!!n.attrs["onUpdate:modelValue"],g=!0,S=e.initialValue?e.initialValue:"",w="",O=function(l){return m?function(){return a!=null&&a.value?a.value:""}:function(){return l?S:w}},y=function(){var l=O(g),s=k(k({},t),{readonly:e.disabled,selector:"#"+v,plugins:xe(t.plugins,e.plugins),toolbar:e.toolbar||t.toolbar,inline:d,setup:function(f){r=f,f.on("init",function(x){return pe(x,e,n,f,a,l)}),typeof t.setup=="function"&&t.setup(f)}});ye(c.value)&&(c.value.style.visibility=""),C().init(s),g=!1};A(i,function(l){var s;r!==null&&(typeof((s=r.mode)===null||s===void 0?void 0:s.set)=="function"?r.mode.set(l?"readonly":"design"):r.setMode(l?"readonly":"design"))}),A(u,function(l){var s;m||(w=r.getContent()),(s=C())===null||s===void 0||s.remove(r),P(function(){return y()})}),ee(function(){if(C()!==null)y();else if(c.value&&c.value.ownerDocument){var l=e.cloudChannel?e.cloudChannel:"5",s=e.apiKey?e.apiKey:"no-api-key",f=we(e.tinymceScriptSrc)?"https://cdn.tiny.cloud/1/"+s+"/tinymce/"+l+"/tinymce.min.js":e.tinymceScriptSrc;Ce.load(c.value.ownerDocument,f,y)}}),te(function(){C()!==null&&C().remove(r)}),d||(ne(function(){g||y()}),ie(function(){var l;m||(w=r.getContent()),(l=C())===null||l===void 0||l.remove(r)}));var N=function(l){var s;w=r.getContent(),(s=C())===null||s===void 0||s.remove(r),t=k(k({},t),l),P(function(){return y()})};return n.expose({rerender:N}),function(){return d?Se(D,v,c,e.tagName):Ie(D,v,c)}}});const nt={__name:"Tinymce",props:{modelValue:{type:[String,Number,Boolean,Array,Object],default:""},error:{type:String,default:null}},emits:["update:modelValue","setRef"],setup(e,{emit:n}){const t=e,o=ae({get:()=>t.modelValue,set:i=>{n("update:modelValue",i)}});return(i,a)=>(h(),G(L(_e),{"api-key":"b82c46fpu6v40ajjpr5r5q1foi5jvxjd1fnj76cexqc9udbg",init:{height:200,menubar:!1,plugins:["advlist autolink lists link image charmap print preview anchor","searchreplace visualblocks code fullscreen","insertdatetime media table paste code help wordcount"],toolbar:"undo redo | formatselect | bold italic underline code backcolor |             alignleft aligncenter alignright alignjustify |             bullist numlist outdent indent | removeformat | image | help",image_title:!0,file_picker_types:"image",images_upload_url:"/api/upload",convert_urls:!1},modelValue:L(o),"onUpdate:modelValue":a[0]||(a[0]=u=>oe(o)?o.value=u:null)},null,8,["modelValue"]))}};var Ee=typeof globalThis<"u"?globalThis:typeof window<"u"?window:typeof global<"u"?global:typeof self<"u"?self:{};function Be(e,n,t){return t={path:n,exports:{},require:function(o,i){return Oe(o,i==null?t.path:i)}},e(t,t.exports),t.exports}function Oe(){throw new Error("Dynamic requires are not currently supported by @rollup/plugin-commonjs")}var Ne=Be(function(e,n){(function(t,o){e.exports=o()})(Ee,function(){var t="__v-click-outside",o=typeof window<"u",i=typeof navigator<"u",a=o&&("ontouchstart"in window||i&&navigator.msMaxTouchPoints>0)?["touchstart"]:["click"],u=function(d){var m=d.event,g=d.handler;(0,d.middleware)(m)&&g(m)},c=function(d,m){var g=function(l){var s=typeof l=="function";if(!s&&typeof l!="object")throw new Error("v-click-outside: Binding value must be a function or an object");return{handler:s?l:l.handler,middleware:l.middleware||function(f){return f},events:l.events||a,isActive:l.isActive!==!1,detectIframe:l.detectIframe!==!1,capture:Boolean(l.capture)}}(m.value),S=g.handler,w=g.middleware,O=g.detectIframe,y=g.capture;if(g.isActive){if(d[t]=g.events.map(function(l){return{event:l,srcTarget:document.documentElement,handler:function(s){return function(f){var x=f.el,b=f.event,M=f.handler,_=f.middleware,j=b.path||b.composedPath&&b.composedPath();(j?j.indexOf(x)<0:!x.contains(b.target))&&u({event:b,handler:M,middleware:_})}({el:d,event:s,handler:S,middleware:w})},capture:y}}),O){var N={event:"blur",srcTarget:window,handler:function(l){return function(s){var f=s.el,x=s.event,b=s.handler,M=s.middleware;setTimeout(function(){var _=document.activeElement;_&&_.tagName==="IFRAME"&&!f.contains(_)&&u({event:x,handler:b,middleware:M})},0)}({el:d,event:l,handler:S,middleware:w})},capture:y};d[t]=[].concat(d[t],[N])}d[t].forEach(function(l){var s=l.event,f=l.srcTarget,x=l.handler;return setTimeout(function(){d[t]&&f.addEventListener(s,x,y)},0)})}},r=function(d){(d[t]||[]).forEach(function(m){return m.srcTarget.removeEventListener(m.event,m.handler,m.capture)}),delete d[t]},v=o?{beforeMount:c,updated:function(d,m){var g=m.value,S=m.oldValue;JSON.stringify(g)!==JSON.stringify(S)&&(r(d),c(d,{value:g}))},unmounted:r}:{};return{install:function(d){d.directive("click-outside",v)},directive:v}})}),Me=Ne;const Ve={class:"v3ti-loader-wrapper"},Ae=T("div",{class:"v3ti-loader"},null,-1),je=T("span",null,"Loading",-1),De=[Ae,je];function Pe(e,n){return h(),p("div",Ve,De)}function W(e,n){n===void 0&&(n={});var t=n.insertAt;if(!(!e||typeof document>"u")){var o=document.head||document.getElementsByTagName("head")[0],i=document.createElement("style");i.type="text/css",t==="top"&&o.firstChild?o.insertBefore(i,o.firstChild):o.appendChild(i),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(document.createTextNode(e))}}var Le=`.v3ti-loader-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #112B3C;
}
.v3ti-loader-wrapper .v3ti-loader {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  display: inline-block;
  border-top: 2px solid #112B3C;
  border-right: 2px solid transparent;
  box-sizing: border-box;
  animation: rotation 0.8s linear infinite;
  margin-right: 8px;
}
@keyframes rotation {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(360deg);
}
}`;W(Le);const J={};J.render=Pe;var Fe=J,Z={name:"Vue3TagsInput",emits:["update:modelValue","update:tags","on-limit","on-tags-changed","on-remove","on-error","on-focus","on-blur","on-select","on-select-duplicate-tag","on-new-tag"],props:{readOnly:{type:Boolean,default:!1},modelValue:{type:String,default:""},validate:{type:[String,Function,Object],default:""},addTagOnKeys:{type:Array,default:function(){return[13,",",32]}},placeholder:{type:String,default:""},tags:{type:Array,default:()=>[]},loading:{type:Boolean,default:!1},limit:{type:Number,default:-1},allowDuplicates:{type:Boolean,default:!1},addTagOnBlur:{type:Boolean,default:!1},selectItems:{type:Array,default:()=>[]},select:{type:Boolean,default:!1},duplicateSelectItem:{type:Boolean,default:!0},uniqueSelectField:{type:String,default:"id"},addTagOnKeysWhenSelect:{type:Boolean,default:!1},isShowNoData:{type:Boolean,default:!0}},components:{Loading:Fe},directives:{clickOutside:Me.directive},data(){return{isInputActive:!1,isError:!1,newTag:"",innerTags:[],multiple:!1}},computed:{isLimit(){const e=this.limit>0&&Number(this.limit)===this.innerTags.length;return e&&this.$emit("on-limit"),e},selectedItemsIds(){return this.duplicateSelectItem?[]:this.tags.map(e=>e[this.uniqueSelectField]||"")}},watch:{error(){this.isError=this.error},modelValue:{immediate:!0,handler(e){this.newTag=e}},tags:{deep:!0,immediate:!0,handler(e){this.innerTags=[...e]}}},methods:{isShot(e){return!!this.$slots[e]},makeItNormal(e){this.$emit("update:modelValue",e.target.value),this.$refs.inputTag.className="v3ti-new-tag",this.$refs.inputTag.style.textDecoration="none"},resetData(){this.innerTags=[]},resetInputValue(){this.newTag="",this.$emit("update:modelValue","")},setPosition(){const e=this.$refs.inputBox,n=this.$refs.contextMenu;if(e&&n){n.style.display="block";const t=e.clientHeight||32,o=3;n.style.top=t+o+"px"}},closeContextMenu(){this.$refs.contextMenu&&(this.$refs.contextMenu.style={display:"none"})},handleSelect(e){if(this.isShowCheckmark(e)){const n=this.tags.filter(t=>e.id!==t.id);this.$emit("update:tags",n),this.$emit("on-select-duplicate-tag",e),this.resetInputValue()}else this.$emit("on-select",e);this.$nextTick(()=>{this.closeContextMenu()})},isShowCheckmark(e){return this.duplicateSelectItem?!1:this.selectedItemsIds.includes(e[this.uniqueSelectField])},focusNewTag(){this.select&&!this.disabled&&this.setPosition(),!(this.readOnly||!this.$el.querySelector(".v3ti-new-tag"))&&this.$el.querySelector(".v3ti-new-tag").focus()},handleInputFocus(e){this.isInputActive=!0,this.$emit("on-focus",e)},handleInputBlur(e){this.isInputActive=!1,this.addNew(e),this.$emit("on-blur",e)},addNew(e){if(this.select&&!this.addTagOnKeysWhenSelect)return;const n=e?this.addTagOnKeys.indexOf(e.keyCode)!==-1||this.addTagOnKeys.indexOf(e.key)!==-1:!0,t=e&&e.type!=="blur";!n&&(t||!this.addTagOnBlur)||this.isLimit||(this.newTag&&(this.allowDuplicates||this.innerTags.indexOf(this.newTag)===-1)&&this.validateIfNeeded(this.newTag)?(this.innerTags.push(this.newTag),this.addTagOnKeysWhenSelect&&(this.$emit("on-new-tag",this.newTag),this.updatePositionContextMenu()),this.resetInputValue(),this.tagChange(),e&&e.preventDefault()):(this.validateIfNeeded(this.newTag)?this.makeItError(!0):this.makeItError(!1),e&&e.preventDefault()))},updatePositionContextMenu(){this.$nextTick(()=>{this.setPosition()})},makeItError(e){this.newTag!==""&&(this.$refs.inputTag.className="v3ti-new-tag v3ti-new-tag--error",this.$refs.inputTag.style.textDecoration="underline",this.$emit("on-error",e))},validateIfNeeded(e){return this.validate===""||this.validate===void 0?!0:typeof this.validate=="function"?this.validate(e):!0},removeLastTag(){this.newTag||(this.innerTags.pop(),this.tagChange(),this.updatePositionContextMenu())},remove(e){this.innerTags.splice(e,1),this.tagChange(),this.$emit("on-remove",e),this.updatePositionContextMenu()},tagChange(){this.$emit("on-tags-changed",this.innerTags)}}};const Ke={key:1,class:"v3ti-tag-content"},Re=["onClick"],ze=["placeholder","disabled"],Ue={key:0,class:"v3ti-loading"},qe={key:1,class:"v3ti-no-data"},He={key:1},Ge={key:2},$e=["onClick"],We={class:"v3ti-context-item--label"},Je={key:0,class:"v3ti-icon-selected-tag",width:"44",height:"44",viewBox:"0 0 24 24","stroke-width":"1.5",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"},Ze=T("path",{stroke:"none",d:"M0 0h24v24H0z"},null,-1),Qe=T("path",{d:"M5 12l5 5l10 -10"},null,-1),Xe=[Ze,Qe];function Ye(e,n,t,o,i,a){const u=re("Loading"),c=le("click-outside");return F((h(),p("div",{onClick:n[6]||(n[6]=r=>a.focusNewTag()),class:B([{"v3ti--focus":i.isInputActive,"v3ti--error":i.isError},"v3ti"])},[T("div",{class:B(["v3ti-content",{"v3ti-content--select":t.select}]),ref:"inputBox"},[(h(!0),p(K,null,R(i.innerTags,(r,v)=>(h(),p("span",{key:v,class:"v3ti-tag"},[a.isShot("item")?E(e.$slots,"item",z(se({key:0},{name:r,index:v,tag:r}))):(h(),p("span",Ke,de(r),1)),t.readOnly?I("",!0):(h(),p("a",{key:2,onClick:V(d=>a.remove(v),["prevent","stop"]),class:"v3ti-remove-tag"},null,8,Re))]))),128)),F(T("input",{ref:"inputTag",placeholder:t.placeholder,"onUpdate:modelValue":n[0]||(n[0]=r=>i.newTag=r),onKeydown:[n[1]||(n[1]=ue(V(function(){return a.removeLastTag&&a.removeLastTag(...arguments)},["stop"]),["delete"])),n[2]||(n[2]=function(){return a.addNew&&a.addNew(...arguments)})],onBlur:n[3]||(n[3]=function(){return a.handleInputBlur&&a.handleInputBlur(...arguments)}),onFocus:n[4]||(n[4]=function(){return a.handleInputFocus&&a.handleInputFocus(...arguments)}),onInput:n[5]||(n[5]=function(){return a.makeItNormal&&a.makeItNormal(...arguments)}),class:"v3ti-new-tag",disabled:t.readOnly},null,40,ze),[[ce,i.newTag]])],2),t.select?(h(),p("section",{key:0,class:B(["v3ti-context-menu",{"v3ti-context-menu-no-data":!t.isShowNoData&&t.selectItems.length===0}]),ref:"contextMenu"},[t.loading?(h(),p("div",Ue,[a.isShot("loading")?E(e.$slots,"default",{key:0}):(h(),G(u,{key:1}))])):I("",!0),!t.loading&&t.selectItems.length===0&&t.isShowNoData?(h(),p("div",qe,[a.isShot("no-data")?E(e.$slots,"no-data",{key:0}):(h(),p("span",He," No data "))])):I("",!0),!t.loading&&t.selectItems.length>0?(h(),p("div",Ge,[(h(!0),p(K,null,R(t.selectItems,(r,v)=>(h(),p("div",{key:v,class:B(["v3ti-context-item",{"v3ti-context-item--active":a.isShowCheckmark(r)}]),onClick:V(d=>a.handleSelect(r,v),["stop"])},[T("div",We,[E(e.$slots,"select-item",z(fe(r)))]),a.isShowCheckmark(r)?(h(),p("svg",Je,Xe)):I("",!0)],10,$e))),128))])):I("",!0)],2)):I("",!0)],2)),[[c,a.closeContextMenu]])}var et=`.v3ti {
  border-radius: 5px;
  min-height: 32px;
  line-height: 1.4;
  background-color: #fff;
  border: 1px solid #9ca3af;
  cursor: text;
  text-align: left;
  -webkit-appearance: textfield;
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
.v3ti .v3ti-icon-selected-tag {
  stroke: #19be6b;
  width: 1rem;
  height: 1rem;
  margin-left: 4px;
}
.v3ti--focus {
  outline: 0;
  border-color: #000000;
  box-shadow: 0 0 0 1px #000000;
}
.v3ti--error {
  border-color: #F56C6C;
}
.v3ti .v3ti-no-data {
  color: #d8d8d8;
  text-align: center;
  padding: 4px 7px;
}
.v3ti .v3ti-loading {
  padding: 4px 7px;
  text-align: center;
}
.v3ti .v3ti-context-menu {
  max-height: 150px;
  min-width: 150px;
  overflow: auto;
  display: none;
  outline: none;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin: 0;
  padding: 5px 0;
  background: #ffffff;
  z-index: 1050;
  color: #475569;
  box-shadow: 0 3px 8px 2px rgba(0, 0, 0, 0.1);
  border-radius: 0 0 6px 6px;
}
.v3ti .v3ti-context-menu .v3ti-context-item {
  padding: 4px 7px;
  display: flex;
  align-items: center;
}
.v3ti .v3ti-context-menu .v3ti-context-item:hover {
  background: #e8e8e8;
  cursor: pointer;
}
.v3ti .v3ti-context-menu .v3ti-context-item--label {
  flex: 1;
  min-width: 1px;
}
.v3ti .v3ti-context-menu .v3ti-context-item--active {
  color: #317CAF;
}
.v3ti .v3ti-context-menu-no-data {
  padding: 0;
}
.v3ti .v3ti-content {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.v3ti .v3ti-content--select {
  padding-right: 30px;
}
.v3ti .v3ti-tag {
  display: flex;
  font-weight: 400;
  margin: 3px;
  padding: 0 5px;
  background: #317CAF;
  color: #ffffff;
  height: 27px;
  border-radius: 5px;
  align-items: center;
  max-width: calc(100% - 16px);
}
.v3ti .v3ti-tag .v3ti-tag-content {
  flex: 1;
  min-width: 1px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.v3ti .v3ti-tag .v3ti-remove-tag {
  color: #ffffff;
  transition: opacity 0.3s ease;
  opacity: 0.5;
  cursor: pointer;
  padding: 0 5px 0 7px;
}
.v3ti .v3ti-tag .v3ti-remove-tag::before {
  content: "x";
}
.v3ti .v3ti-tag .v3ti-remove-tag:hover {
  opacity: 1;
}
.v3ti .v3ti-new-tag {
  background: transparent;
  border: 0;
  font-weight: 400;
  margin: 3px;
  outline: none;
  padding: 0 4px;
  flex: 1;
  min-width: 60px;
  height: 27px;
}
.v3ti .v3ti-new-tag--error {
  color: #F56C6C;
}`;W(et);Z.render=Ye;var it=(()=>{const e=Z;return e.install=n=>{n.component("Vue3TagsInput",e)},e})();export{nt as _,it as e};
