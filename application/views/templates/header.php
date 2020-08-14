<html>
<!-- <h1>this is hobbies page</h1> -->
<link icon="assets/images/logo2.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

<head>
  <title>JUDILYN BUT-ANON</title>
</head>
<header>

  <nav class="navbar navbar-light ">
    <h1>but-anon</h1>
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
    body {
      font-family: 'Poppins', sans-serif;
    }

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

::selection {
    color: #F73AC8;
    background: black;
    border-radius: 100px;
}
  </style>