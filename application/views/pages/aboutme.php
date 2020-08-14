<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

<?php
$this->load->view('pages/home');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?php echo $this->config->base_url(); ?>" />
</head>

<body>
  <div class="container">
    <div class="card shadow-lg p-3 mb-5 rounded" style="width: 20rem; margin-left: 10%;">
      <img draggable="false" src="assets/images/me.jpg" class="card-img-top" alt="judilyn but-anon">
      <div class="card-body">
        <h5 class="card-title h4">Judilyn S. But-anon</h5>
        <p class="card-text">
          Software/Web developer
        </p>
      </div>
    </div>
  </div>

</body>

</html>


<style>
  body {
    font-family: Poppins;
    color: #F73AC8;
    /* background-image: linear-gradient(to bottom, #9b0b76, #a60752, #a32434, #963b1b, #834d08); */
    background-image: linear-gradient(to top, #580360, #55002f, #3d070f, #240c00, #040302);
    font-family: 'Poppins', sans-serif;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  .active {
    background-color: #921271;
  }

  .container {
    background-color: #921271;
  }

  .card {
    background-color: transparent;
    padding: 10px;
    text-align: center;
    background-color: #fff5e7;
    margin-top: 5rem;
  }

  ::selection {
    color: #F73AC8;
    background: black;
    border-radius: 100px;
  }

  /* h1 {
    font-family: 'Cookie', cursive;
  } */
</style>
</style>