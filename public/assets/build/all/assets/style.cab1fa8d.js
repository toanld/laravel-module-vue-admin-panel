import{d as o}from"./md5.aa6931b5.js";const l={aside:"bg-gray-800",asideScrollbars:"aside-scrollbars-gray",asideBrand:"bg-gray-900 text-white",asideMenuItem:" hover:font-bold",asideMenuItemActive:"font-bold",asideMenuDropdown:"",navBarItemLabel:"text-black",navBarItemLabelHover:"hover:text-blue-500",navBarItemLabelActiveColor:"text-blue-600",navBarMenuListUpperLabel:"bg-gray-100",overlay:"from-gray-700 via-gray-900 to-gray-700"},s={aside:"bg-white",asideScrollbars:"aside-scrollbars-light",asideBrand:"",asideMenuItem:"text-blue-600 hover:text-black dark:text-white",asideMenuItemActive:"font-bold text-black dark:text-white",asideMenuDropdown:"bg-gray-100/75",navBarItemLabel:"text-blue-600",navBarItemLabelHover:"hover:text-black",navBarItemLabelActiveColor:"text-black",navBarMenuListUpperLabel:"bg-gray-50",overlay:"from-white via-gray-100 to-white"},r=Object.freeze(Object.defineProperty({__proto__:null,basic:l,white:s},Symbol.toStringTag,{value:"Module"})),n="darkMode",d="style",b="xl:max-w-full xl:mx-auto",c=o("style",{state:()=>({asideStyle:"",asideBrandStyle:"",asideMenuItemStyle:"",asideMenuItemActiveStyle:"",asideMenuDropdownStyle:"",navBarItemLabelStyle:"",navBarItemLabelHoverStyle:"",navBarItemLabelActiveColorStyle:"",navBarMenuListUpperLabelStyle:"",overlayStyle:"",darkMode:!1}),actions:{setStyle(e){if(!r[e])return;typeof localStorage<"u"&&localStorage.setItem(d,e);const t=r[e];for(const a in t)this[`${a}Style`]=t[a]},setDarkMode(e=null){this.darkMode=e!==null?e:!this.darkMode,typeof localStorage<"u"&&localStorage.setItem(n,this.darkMode?"1":"0"),typeof document<"u"&&document.documentElement.classList[this.darkMode?"add":"remove"]("dark-scrollbars")}}});export{b as c,n as d,d as s,c as u};
