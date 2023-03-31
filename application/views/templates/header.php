<html>
    <head>
        <title>Tyson's application</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
        <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js" ></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tyson's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('posts');?>">Blog</a>
        </li>
    
      </ul>
    </div>
    <ul class=" nav navbar-nav nav-right" >
      <a class="nav-link" href="<?php echo site_url('posts/create');?>">Create posts</a> 
      </ul>
  </div>
</nav>
     
