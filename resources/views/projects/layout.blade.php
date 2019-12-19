<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css">
</head>
<body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>


  <div class="navbar-menu">
    <div class="navbar-start">  
    <a class="navbar-item" href="/contact">Contact</a> 

    <a class="navbar-item" href="/about">about</a>
    <a class="navbar-item"href="/projects">Projects</a>
</nav>


    <div class="container">
        @yield('content')
    </div>

    <div>
        @yield('text')
    </div>
    
<footer class="footer">
  <div class="content has-text-centered">
 &copy; copyright 2019 - Sam Arbid
  </div>
</footer>
</body>
</html>