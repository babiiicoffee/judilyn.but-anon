<!-- <h1>this is hobbies page</h1> -->
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
        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="inside-card">
                <div class="card-body">
                    <img draggable="false" class="rounded-circle" src="assets/images/me1.png" alt="" style="float: left;">
                    <div>
                        <div class="vl"></div>
                        <div style="margin-left: 21rem;">
                            <h3 class="myname">JUDILYN S. BUT-ANON</h3>
                            <p class="pink-font">SOFTWARE DEVELOPER
                            </p>
                            <p class="personal-info">
                                <img draggable="false" src="assets/images/phone1.png" alt="phone">
                                09385981050
                                <br>
                                <img draggable="false" src="assets/images/mail1.png" alt="mail">
                                ZIEKIND07@GMAIL.COM
                                <br>
                                <img draggable="false" src="assets/images/baseline_location_on_black_18dp.png" alt="location">
                                NASIPIT RD., TALAMBN, CEBU CITY, CEBU
                            </p>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="card-body">
                    <div class="row">
                        <div class="left-side">
                            <div>
                                <img draggable="false" src="assets/images/baseline_school_black_18dp.png" alt="education" class="icons">
                                <h4>EDUCATION</h4>
                                <p class="background-info">UNIERSITY OF SAN CARLOS <br> 2018-2021</p>
                                <hr class="hr4">
                                <p class="background-info">CERTIFICATE IN COMPUTER TECHNOLOGY</p>
                            </div>

                            <hr class="hr3">

                            <div>
                                <img draggable="false" src="assets/images/baseline_verified_black_18dp.png" alt="achievement" class="icons">
                                <h4>ACHIEVEMENTS</h4>
                                <ul>
                                    <li>BEST IN CAPSTONE 2021</li>
                                    <li>GRADUATED COM LAUDE</li>
                                    <li>CONSISTEN DEAN LISTER</li>
                                </ul>
                            </div>

                            <hr class="hr3">

                            <div>
                                <img draggable="false" src="assets/images/baseline_integration_instructions_black_18dp.png" alt="software" class="icons">
                                <h4>SOFTWARE</h4>
                                <p class="background-info">
                                    <ul>
                                        <li>CODEIGNITER</li>
                                        <li>ANGULAR</li>
                                        <li>JAVA</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="vertical-divider"></div>

                        <div class="right-side">

                            <div>
                                <img draggable="false" src="assets/images/baseline_work_black_18dp.png" alt="experience" class="icons">
                                <h4>EXPERIENCE</h4>
                                <ul>
                                    <li>PRIMIUM TECH</li>
                                    <p>- FULL STACK DEVELOPER</p>
                                    <li>HOUSE OF IT</li>
                                    <p>- FULL STACK DEVELOPER</p>
                                </ul>
                            </div>
                            <hr class="hr3">

                            <div>
                                <img draggable="false" src="assets/images/baseline_analytics_black_18dp.png" alt="skills" class="icons">
                                <h4>SKILLS</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <hr>
            </div>
        </div>
    </div>


</body>

</html>

<style>
    body {
        color: #F73AC8;
        /* background-image: linear-gradient(to bottom, #9b0b76, #a60752, #a32434, #963b1b, #834d08); */
        background-image: linear-gradient(to top, #580360, #55002f, #3d070f, #240c00, #040302);
        /* background-image: linear-gradient(to bottom, #d654b5, #e65289, #e35f63, #d27249, #b9833e); */
        /* background-image: linear-gradient(to bottom, #000000, #3b3b3b, #777777, #b9b9b9, #ffffff); */
        /* background-image: linear-gradient(to top, #fff5e7, #ffe7c0, #ffd99a, #ffcb73, #ffbd4a); */
        font-family: 'Poppins', sans-serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    img {
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    .style {
        background-color: #ee495d;
    }

    .pink-font {
        color: #ee495d;
    }

    h3 {
        font-size: 32;
    }

    h4 {
        margin-left: 3rem;
    }

    p.pink-font {
        font-size: 20;
    }

    .personal-info,
    .background-info {
        font-size: 16;
    }

    .background-info {
        text-align: center;
    }

    .vl {
        border-left: 10px solid #ffbd4a;
        height: 40;
        float: left;
        margin-left: 6rem;
    }

    hr {
        border: 0.13rem solid #ffbd4a;
        width: 43rem;
    }

    .hr3 {
        border: 0.13rem solid #ffbd4a;
        margin-left: 0rem;
        width: 17.7rem;
    }

    .hr4 {
        margin-left: 6.2rem;
        border: 0.15rem solid #ffbd4a;
        width: 5rem;
    }

    .icons {
        float: left;
        size: 100rem;
    }

    .vertical-divider {
        /* border-left: .25rem solid #ffbd4a; */
        border: 0.13rem solid #ffbd4a;
        height: 30rem;
        margin-left: 1rem;
        margin-top: 0rem;
        background-color: black;
        width: 0;
    }

    .left-side {
        float: left;
        width: 18rem;
        /* background-color: #495d; */
        margin-left: 1rem;
    }

    .right-side {
        width: 20rem;
        margin-left: 1rem;
        /* background-color: #ee495d; */
        margin-top: 0rem;
    }

    .left-side,
    .right-side,
    .myname,
    .personal-info {
        color: black;
    }

    ::selection {
        color: #F73AC8;
        background: black;
        border-radius: 100px;
    }




    /* **************************************** */



    .container {
        overflow: auto;
        height: 50rem;
        width: 49rem;
    }

    .container::-webkit-scrollbar {
        width: 1em;
    }

    .container::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .container::-webkit-scrollbar-thumb {
        /* background-color: darkgrey; */
        background-image: linear-gradient(to top, #580360, #55002f, #3d070f, #240c00, #040302);
        border-radius: 10px;
        /* outline: 1px solid slategrey; */
    }

    .card {
        width: 46.6rem;
        padding: 20px;
        font-family: 'Oswald', sans-serif;
        background-color: #ffbd4a;
    }

    .inside-card {
        background-color: #fff5e7;
        text-align: left;
    }

    .rounded-circle {
        width: 10rem;
        height: 10rem;
        margin: 2rem;
        /* border-radius: 50rem; */
    }
</style>