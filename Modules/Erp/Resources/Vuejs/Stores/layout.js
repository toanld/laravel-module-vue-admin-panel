import { defineStore } from 'pinia'

export const useLayoutStore = defineStore('layout', {
  state: () => ({
    isAsideMobileExpanded: false,
    isAsideLgActive: false,
    isAsideExpanded: false
  }),

  actions: {
    asideMobileToggle () {
      this.isAsideMobileExpanded = !this.isAsideMobileExpanded
    },
    asideToggle () {
      this.isAsideExpanded = !this.isAsideExpanded
    }
  }
})
