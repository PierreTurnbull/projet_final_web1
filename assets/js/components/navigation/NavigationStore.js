import Vuex from 'vuex';

export default new Vuex.Store({
  state: {
    isChecked: false,
  },
  mutations: {
    TOGGLE(state) {
      state.isChecked = !state.isChecked;
      this.$emit('myevent');
    },
  },
  getters: {
    isChecked: (state) => state.isChecked,
  },
});
