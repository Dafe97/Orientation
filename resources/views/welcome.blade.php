<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{asset("css/app.css")}}" rel="stylesheet">
    </head>
    <body class="">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a href="#" class="nav-link active">Accueil</a>
                      <a href="#" class="nav-link " >task</a>
                      <a class="nav-link" href="#">Pricing</a>
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                  </div>
                </div>
              </nav>
        </div>
          {{-- component --}}
        <div id="app">
            <div class="container pt-3">
              <router-view></router-view>
              <example-component></example-component>
            </div>
        </div>
        <script src="{{asset("js/app.js")}}"></script>
        <script>
          export default {
  computed: {
    username() {
      // Nous verrons ce que représente `params` dans un instant.
      return this.$route.params.username
    }
  },
  methods: {
    goBack() {
      window.history.length > 1 ? this.$router.go(-1) : this.$router.push('/')
    }
  }
}
        </script>
    </body>
</html>
