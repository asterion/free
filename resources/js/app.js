
import Vue from 'vue';
import VueTimeago from 'vue-timeago';
import App from './components/App.vue';

Vue.use(VueTimeago, {
  name: 'Timeago',
  locale: 'es',
  locales: {
    es: require('date-fns/locale/es')
  }
})

new Vue({
    el: '#app',
    components: { App }
});
