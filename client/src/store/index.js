import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user:{
    }
  },
  mutations: {
    setUser(state, user) {
      state.user = user;
      localStorage.setItem('user',JSON.stringify(user));
    }
  },
  getters: {
    getUser(state) {
      const user = JSON.parse(localStorage.getItem('user'));
      console.log(user); 
      state.user = user;
      return state.user;
    }
  },
  actions: {
  },
  modules: {
  }
})
