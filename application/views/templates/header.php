<html>

<head>
        <title>JUDILYN BUT-ANON</title>
</head>
<header>
<nav class="navbar navbar-light ">
  <h1 style="font-family: 'Cookie', cursive;">but-anon</h1>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <!-- <a class="nav-link active" href="<php echo base_url('index.php/pages/view/aboutme') ?>">About Me</a> -->
      <a class="nav-link active" href="<?php echo site_url('aboutme') ?>">About Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('resume') ?>">Resume</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('projects') ?>">Projects</a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="#hobbies">Hobbies</a> -->
      <a class="nav-link" href="<?php echo site_url('Hobbies') ?>">Hobbies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('contact') ?>">Contact</a>
    </li>
  </ul>
</nav>
</header>

<body>

<style>
  nav {
    position: fixed;
  }

  .justify-content-end {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

  }

  .nav-item {
    float: right;
  }

  .nav-item a {
    display: block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: violet;
  }

  /* li a:hover:not(.active) {
    background-color: #111;
  } */

  .active {
    background-color: #921271;
  }

  .card {
    background-color: transparent;
    padding: 10px;
    text-align: center;
    /* box-shadow: 50px 10px 5px grey; */
  }
</style>