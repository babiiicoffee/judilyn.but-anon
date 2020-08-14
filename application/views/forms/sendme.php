<?php
// $this->load->helper("form");
echo validation_errors();
// echo form_open('form');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
// echo $this->session->flashdata('email_sent');
// echo form_open('/Send_Emial_Controller/send_mail');
?>
<form action="<?=base_url('email')?>" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Name" value="Jude">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="07judilynb@gmail.com">
        <small id="emailHelp" class="form-text text-muted">I wll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="test" placeholder="Subject" value="Test">
    </div>
    <div class="form-group">
        <input type="text" class="form-control message" id="message" placeholder="Message" value="Sample email message ♥">
    </div>
    <button type="button" class="btn btn-outline-success" type="submit">Send Email</button>

</form>
<?php
echo form_close();
?>



<!-- <form method="POST" action="sendme">
    <div class="inputs">
        <input type="text" size="50" placeholder="Name">
        <input type="email" name="email" size="50" placeholder="Email">
        <input type="text" size="50" placeholder="Subject">
        <input type="text" placeholder="Message" class="message">
    </div>
    <button type="submit" value="Send">Send</button>
</form> -->


<style>
    body {
        font-family: Poppins;
        color: #F73AC8;
        /* background-image: linear-gradient(to bottom, #9b0b76, #a60752, #a32434, #963b1b, #834d08); */
        background-image: linear-gradient(to top, #580360, #55002f, #3d070f, #240c00, #040302);
        font-family: 'Poppins', sans-serif;
    }

    .title {
        font-weight: bold;
        padding: .7rem;
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
        width: 10rem;
    }

    input:focus {
        border-collapse: collapse;
    }

    .message {
        height: 20rem;
        padding-top: 0;
    }

    .submit-btn {
        width: 8rem;
        padding: .7rem;
        border-radius: 25px;
    }

    ::selection {
        color: #F73AC8;
        background: black;
        border-radius: 100px;
    }
</style>