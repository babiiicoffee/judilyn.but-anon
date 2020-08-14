<link icon="assets/images/logo2.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo $this->config->base_url(); ?>" />
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img draggable="false" src="assets/images/me.jpg" class="card-img-top" alt="judilyn but-anon">
                    </div>
                    <div class="col">
                        <div class="title">KEEP IN TOUCH</div>

                        <?php $this->load->view('forms/sendme') ?>

                    </div>
                </div>
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

    .title {
        font-weight: bold;
        padding: .7rem;
        letter-spacing: 5px;
    }

    .container {
        width: 50rem;
        background-color: #ffbd4a;
        padding: 10px;
    }

    .card {
        background-color: #fff5e7;
    }

    input {
        margin: 5;
        border-radius: 25px;
        padding: .7rem;
        width: 20rem;
    }

    input:focus {
        /* background-color: yellow; */
        border-radius: 1rem;
    }

    .message {
        height: 10rem;
    }

    button {
        width: 7rem;
        padding: .7rem;
        border-radius: 25px;
    }

    ::selection {
        color: #F73AC8;
        background: black;
        border-radius: 100px;
    }
</style>