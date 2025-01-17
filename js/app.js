new Vue({
  el: '#header',
  data () {
    return {
      isVisible: false
    }
  },
  methods: {
    showMobileMenu () {
      this.isVisible = true
    },
    closeMobileMenu () {
      this.isVisible = false
    },
    changeLanguage (language) {
      document.location.href = `/?lang=${language}`
    }
  },
  created () {
    console.log('Header is loaded')
  }
})
