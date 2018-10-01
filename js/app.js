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
    }
  },
  created () {
    console.log('Header is loaded')
  }
});