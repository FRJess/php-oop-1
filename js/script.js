// VUE
const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'movies.php',
      moviesList: [],
    }
  },

  methods: {
    //get all movies in json
    getMovies() {
      axios.get(this.apiUrl)
        .then(result => {
          this.moviesList = result.data;
        })
    },

  },

  mounted() {
    this.getMovies();
    console.log('APP OK')
  }
}).mount('#app');