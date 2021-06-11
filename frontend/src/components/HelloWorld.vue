<template>
  <div class="hello">
  <div id="main">
    <h5 class="card-header">GET Request with Async/Await</h5>
    <div class="card-body">Total vue packages: {{dataApi}}</div>
  </div>
  </div>
</template>

<script>
export default {
  name: "get-request-async-await",
  data() {
    return {
      dataApi: null
    };
  },
  async created() {
    // GET request using fetch with async/await
    //const response = await fetch("https://api.coinmarketcap.com/data-api/v3/cryptocurrency/historical?id=1839&convertId=2790&timeStart=1615420800&timeEnd=1623369600");
    const response = await fetch("https://127.0.0.1:8001/api/movies")
    const data = await response.json();
    console.log(data)
    this.dataApi = data.director;
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
