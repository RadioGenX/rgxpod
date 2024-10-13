import{V as e,a as m,b as t,c as s,d as o,e as n,f as l,g as i,h as a,i as c,j as r,k as u,l as d,m as v,n as f,o as p,p as E,q as V,r as b,s as y,t as g,u as x,v as h,w as k,x as C,y as w,z as S,A as T,B as M,C as D,D as P,E as z}from"./light-SyAvfB0_.js";import{Q as I,k as A}from"./state-CS1T-WV7.js";import"./play-episode-button-C3mZ34rL.js";const L=A`<div
  id="castopod-audio-player"
  class="fixed bottom-0 left-0 flex flex-col w-full bg-elevated border-t border-subtle sm:flex-row z-50"
  data-episode="-1"
  style="display: none;"
>
  <div class="flex items-center">
    <img src="" alt="" class="h-[52px] w-[52px]" loading="lazy" />
    <div class="flex flex-col px-2">
      <p
        class="text-sm w-48 truncate font-semibold"
        title=""
        id="castopod-player-title"
      ></p>
      <p
        class="text-xs w-48 truncate"
        title=""
        id="castopod-player-podcast"
      ></p>
    </div>
  </div>
  <vm-player
    id="castopod-vm-player"
    theme="light"
    language="en"
    class="flex-1"
    style="--vm-player-box-shadow:0; --vm-player-theme: hsl(var(--color-accent-base)); --vm-control-focus-color: hsl(var(--color-accent-contrast)); --vm-menu-item-focus-bg: hsl(var(--color-background-highlight));"
  >
    <vm-audio preload="none" id="testing-audio">
      <source src="" type="" />
    </vm-audio>
    <vm-ui>
      <vm-icon-library></vm-icon-library>
      <vm-controls full-width>
        <vm-playback-control></vm-playback-control>
        <vm-volume-control></vm-volume-control>
        <vm-current-time></vm-current-time>
        <vm-scrubber-control></vm-scrubber-control>
        <vm-end-time></vm-end-time>
        <vm-settings-control></vm-settings-control>
        <vm-default-settings></vm-default-settings>
      </vm-controls>
    </vm-ui>
  </vm-player>
</div>`;I(L,document.body);customElements.define("vm-player",e);customElements.define("vm-file",m);customElements.define("vm-audio",t);customElements.define("vm-ui",s);customElements.define("vm-default-ui",o);customElements.define("vm-click-to-play",n);customElements.define("vm-captions",l);customElements.define("vm-loading-screen",i);customElements.define("vm-default-controls",a);customElements.define("vm-default-settings",c);customElements.define("vm-controls",r);customElements.define("vm-playback-control",u);customElements.define("vm-volume-control",d);customElements.define("vm-scrubber-control",v);customElements.define("vm-current-time",f);customElements.define("vm-end-time",p);customElements.define("vm-settings-control",E);customElements.define("vm-time-progress",V);customElements.define("vm-control",b);customElements.define("vm-icon",y);customElements.define("vm-icon-library",g);customElements.define("vm-tooltip",x);customElements.define("vm-mute-control",h);customElements.define("vm-slider",k);customElements.define("vm-time",C);customElements.define("vm-menu",w);customElements.define("vm-menu-item",S);customElements.define("vm-submenu",T);customElements.define("vm-menu-radio-group",M);customElements.define("vm-menu-radio",D);customElements.define("vm-settings",P);customElements.define("vm-skeleton",z);
//# sourceMappingURL=audio-player.ts-Cr0Knctj.js.map
