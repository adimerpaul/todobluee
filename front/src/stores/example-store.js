import { defineStore } from 'pinia';

export const useCounterStore = defineStore('counter', {
  state: () => ({
    counter: 0,
    user: {},
    isLogged: !!localStorage.getItem('tokenPrestamos'),
    orders: [],
    buys: [],
    env:{
      razonsocial: 'Todo blue',
      direccion: 'Calle Tomas Frías N.º 551 entre Arica e Iquique PLAZA: RAFAEL PABON',
      telefono: '75356595',
      nit: '',
    }
  }),
  getters: {
    doubleCount: (state) => state.counter * 2,
  },
  actions: {
    increment() {
      this.counter++;
    },
  },
});
