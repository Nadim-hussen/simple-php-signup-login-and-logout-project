<?php
session_start();
if(!isset($_SESSION['firstname'])){
    header('location: home.php');
}
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <title>home page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        /* adding preloader in website  */
     
        

        #loader {
            margin: 0 auto;

            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 500px;
            height: 500px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .header-section {

            background-color: #edf0ed;


        }

        a {
            text-decoration: none;
            color: #34eb49;
            font-size: 1.4rem;

            font-family: 'Bebas Neue', cursive;
            transition: 0.3s;
        }

        a:hover {
            color: #34eba4;
            font-size: 1.35rem;
            text-decoration: underline;
        }

        .links {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            /* margin: auto 40px; */
        }

        li {
            list-style: none;
            padding: 20px;
        }

        nav {
            background-color: #edf0ed;
            position: sticky;
            top: 0;
            left: 0;
        }

        .nav-toggle {
            display: none;
        }

        /* navbar section ends */
        /* header section :start */
        .parents-section {
            margin-top: 100px;

            color: #6f42c1;
            font-family: 'Rampart One', cursive;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .left-section {
            width: 80%;

        }


        .left-section h1 {

            text-align: center;
        }

        .left-section h3 {
            margin-top: 20px;
            text-align: center;
        }

        .left-section-btn {
            padding: 10px;
            font-size: 1.3rem;
            background-color: #185696;
            text-align: center;
            /* margin-top: 30px;
            margin-left: 649px; */
            border-radius: 21px;
            align-self: center;
        }

        .learn-more {
            color: #d2d6d3;
            text-decoration: none;
        }

        .fa-arrow-right {
            color: aqua;
            font-size: 1.3rem;
            padding: 5px;

        }

        .right-section {
            width: 80%;
            text-align: center;

        }


        .right-section img {
            width: 40%;
            height: 200px;
        }

        .right-section h1 {

            text-align: center;
        }

        /* header section ends  */

        /* service section start  */
        .service-header {
            font-family: 'Rampart One', cursive;
            color: #3bbf5c;
            text-align: center;
            margin-top: 50px;
            text-transform: uppercase;
        }

        .services {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            /* padding: 10px; */
            margin-right: 0;

            box-sizing: border-box;
            /* width: 100vw; */
        }

        .services-item {
            margin-top: 40px;
            background-color: #d2d6d3;

            padding: 10px 0;
            margin-left: 30px;
            margin-right: 30px;
            /*  font-family: 'Bebas Neue', cursive; */
        }

        .services-item h1 {
            font-family: 'Bebas Neue', cursive;
            text-align: center;
            margin-bottom: 12px;
            margin-top: 10px;
        }

        .services-item p {
            font-family: 'Times New Roman', Times, serif;
            font-size: 17px;
            /* margin: 0 8px; */
            margin-left: 8px;
            margin-right: 8px;
            margin-bottom: 10px;
            text-align: justify;
        }

        .services-footer {
            width: 40px;
            border: 1px solid #185696;
            font-size: 25px;
            border-radius: 18px;
            text-align: center;
            background-color: #edf0ed;
            margin: 8px auto;
        }

        /* services section ends here  */
        /* contact section :start */
        .contact-header {
            font-family: 'Rampart One', cursive;
            color: #3bbf5c;
            text-align: center;
            margin-top: 50px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .contact {
            margin-top: 10px;
            text-align: center;
        }

        .innerContact {
            width: 75vw;
            margin: 25px auto;
            background-color: #e83c6d;
            padding: 15px;
            border-radius: 12px;
        }

        .innerContact input {
            width: 50%;
            line-height: 35px;
            margin-left: 10px;
            border-radius: 12px;
            box-sizing: border-box;
            font-size: 18px;
        }

        .innerContact label {
            width: 10%;
            font-size: 20px;
            font-family: 'Bebas Neue', cursive;
            line-height: 30px;
            color: #164d91;

        }

        .innerContact input:focus {
            border-radius: 0px;
        }

        .btn-form {
            font-size: 1.4rem;
            padding: 5px;
            margin: 0 auto;
            background: #185696;
            border-radius: 12px;
            color: #0a0909;
        }

        .success {
            text-align: center;
            font-size: 20px;
            background-color: #33ce55;
            color: #fff;
            padding: 10px;
            width: 80vw;
            margin: 15px auto;
        }

        .danger {
            text-align: center;
            font-size: 20px;
            background-color: #ff0000;
            color: #fff;
            padding: 10px;
            width: 80vw;
            margin: 15px auto;
        }

        /* contact section ends here  */
        /* about us is started  */
        .about {
            margin-bottom: 20px;
        }

        .about-us {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 500px;
        }

        .about-us .about-first {
            width: 40%;

        }

        .about-first img {
            background-color: #f0eded;
            background-blend-mode: darken;
            width: 100%;
            height: 480px;

        }

        .about-us .about-second {
            width: 40%;
            height: 480px;
            display: flex;
            justify-content: center;
            align-items: space-between;
            flex-direction: column;
            padding: 20px;

        }

        .inner-second {
            width: 100%;
            height: 100%;
            margin: 25px 0;

        }

        .inner-second h1 {
            text-align: left;
            font-weight: 400;
            margin: 10px;
        }

        .inner-second p {
            text-align: left;
            font: 20px;
            font-family: 'Slabo 27px', serif;
            margin-left: 10px;
        }

        @media screen and (max-width:1800px) {

            .left-section-btn {
                padding: 10px;
                font-size: 1.3rem;
                background-color: #185696;
                text-align: center;
                margin-top: 30px;
                margin-left: 544px;
                border-radius: 21px;
                align-self: center;
            }
        }

        @media screen and (max-width:1424px) {
            .services {
                margin: auto;
            }

            .left-section-btn {
                padding: 10px;
                font-size: 1.3rem;
                background-color: #185696;
                text-align: center;
                margin-top: 30px;
                margin-left: 471px;
                margin-bottom: 20px;
                border-radius: 21px;
                align-self: center;
            }
        }

        @media screen and (max-width:1263px) {
            .innerContact {
                width: 90vw;
                margin: 25px auto;
                background-color: #e83c6d;
                padding: 15px;
                border-radius: 12px;
            }

            .innerContact input {
                width: 80%;
                line-height: 35px;
                margin-left: 10px;
                border-radius: 12px;
                box-sizing: border-box;
            }

            .services {
                margin: auto;
            }

            .left-section-btn {
                padding: 10px;
                font-size: 1.3rem;
                background-color: #185696;
                text-align: center;
                margin-top: 30px;
                margin-left: 411px;
                margin-bottom: 20px;
                border-radius: 21px;
                align-self: center;
            }
        }

        @media screen and (max-width:1150px) {

            .left-section h1 {
                margin-left: -5px;
                text-align: center;
            }

            .left-section-btn {
                padding: 10px;
                font-size: 1.3rem;
                background-color: #185696;
                text-align: center;
                margin-top: 30px;
                margin-left: 222px;
                border-radius: 21px;
            }
        }

        @media screen and (max-width:880px) {
            .services {
                flex-direction: column;
                margin: auto;
            }
        }

        @media screen and (max-width: 850px) {
            .links {
                display: none;
            }

            .nav-toggle {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px;
                transition: all 0.8s;
                margin-left: auto;
                margin-right: 20px;
            }

            nav {
                padding: 15px;
            }

            .navlinks {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .header-section {
                width: 100vw;
                height: auto;
                margin-right: 0;
                margin-left: 0;
            }

            .parents-section {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .left-section {
                width: 100vw;
                text-align: center;
            }

            .left-section h1 {
                margin-top: -10px;
                margin-bottom: 20px;
                text-align: center;
                margin-left: 0px;
                width: 100%;
            }

            .left-section h3 {
                width: 100%;
                text-align: center;

            }

            .left-section-btn {
                margin: 20px auto;
                padding: 10px;
                font-size: 1.3rem;
                background-color: #185696;
                text-align: center;
                border-radius: 21px;

            }

            .right-section {
                width: 80vw;
                text-align: center;

            }

            .right-section img {
                width: 40%;
                height: 200px;
            }

            .right-section h1 {

                text-align: center;
            }
        }

        @media screen and (max-width:780px) {
            .about-us {
                margin-top: 40px;
            }
        }

        @media screen and (max-width:750px) {
            .about-us {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                height: auto;
                width: 80vw;
                margin: 0 auto;
            }

            .about-us .about-first {
                width: 100%;
                height: auto;
            }

            .about-first img {
                background-color: #f0eded;
                background-blend-mode: darken;
                width: 100%;
                height: 480px;

            }

            .about-us .about-second {
                width: 100%;
                height: auto;

                flex-direction: column;
                padding: 20px;

            }

            .inner-second {
                width: 100%;
                margin-top: 0px;
                text-align: center;
            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }

            .inner-second p {
                text-align: left;
                font: 20px;
                font-family: 'Slabo 27px', serif;
                margin-left: 10px;
            }


        }

        @media screen and (max-width: 730px) {
            .about-us {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                height: auto;
                width: 80vw;
                margin: 0 auto;
            }

            .about-us .about-first {
                width: 100%;
                height: auto;
            }

            .about-first img {
                background-color: #f0eded;
                background-blend-mode: darken;
                width: 100%;
                height: 480px;

            }

            .about-us .about-second {
                width: 100%;
                height: auto;

                flex-direction: column;
                padding: 20px;

            }

            .inner-second {
                width: 100%;
                margin-top: 0px;
                text-align: center;
            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }

            .inner-second p {
                text-align: left;
                font: 20px;
                font-family: 'Slabo 27px', serif;
                margin-left: 10px;
            }


        }

        @media screen and (max-width:720px) {
            .about-us {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                height: auto;
                width: 80vw;
                margin: 0 auto;
            }

            .about-us .about-first {
                width: 100%;
                height: auto;
            }

            .about-first img {
                background-color: #f0eded;
                background-blend-mode: darken;
                width: 100%;
                height: 480px;

            }

            .about-us .about-second {
                width: 100%;
                height: auto;

                flex-direction: column;
                padding: 20px;

            }

            .inner-second {
                width: 100%;
                margin-top: 0px;
                text-align: center;
            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }

            .inner-second p {
                text-align: left;
                font: 20px;
                font-family: 'Slabo 27px', serif;
                margin-left: 10px;
            }


        }

        @media screen and (max-width:550px) {
            .innerContact {
                width: 95vw;
                margin: 25px auto;
                background-color: #e83c6d;
                padding: 15px;
                border-radius: 12px;
            }

            .innerContact input {
                width: 100%;
                line-height: 35px;
                margin-left: 0px;
                border-radius: 12px;
                box-sizing: border-box;
            }



            .innerContact label {
                width: 100%;
                font-size: 20px;
                font-family: 'Bebas Neue', cursive;
                line-height: 30px;
                color: #164d91;

            }

            .btn-form {
                font-size: 1.1rem;
                padding: 5px;
                margin: 0 auto;
                background: #185696;
                border-radius: 12px;
                color: #0a0909;
            }
        }

        @media screen and (max-width:500px) {
            .about-us {
                display: flex;
                align-items: center;
                justify-content: center;
                height: auto;
                width: 80vw;
                margin: 0 auto;
            }

            .about-us .about-first {
                width: 100%;
                height: auto;
            }

            .about-first img {
                background-color: #f0eded;
                background-blend-mode: darken;
                width: 100%;
                height: 480px;

            }

            .about-us .about-second {
                width: 100%;
                height: auto;

                flex-direction: column;
                padding: 20px;

            }

            .inner-second {
                width: 100%;
                margin-top: 0px;
                text-align: center;
            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }

            .inner-second p {
                text-align: left;
                font: 20px;
                font-family: 'Slabo 27px', serif;
                margin-left: 10px;
            }



            .about-us .about-second {
                width: 100%;
                height: auto;

                flex-direction: column;
                padding: 20px;

            }

            .inner-second {
                width: 100%;
                margin-top: 0px;
            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }



        }

        @media screen and (max-width:440px) {
            .about-us {
                display: flex;
                align-items: center;
                justify-content: center;
                height: auto;
                width: 80vw;
                margin: 0 auto;
            }

            .about-us .about-first {
                width: 90%;
                height: auto;
                margin: auto auto;
                text-align: center;
                display: grid;
                place-items: center;
            }

            .about-first img {
                background-color: #f0eded;
                background-blend-mode: darken;
                width: 100%;

                height: 480px;


            }

            .about-us .about-second {

                height: auto;

                flex-direction: column;


            }

            .inner-second {
                width: 80vw;

                text-align: center;

            }

            .inner-second h1 {
                text-align: left;
                font-weight: 400;
                margin: 10px;
            }

            .inner-second p {
                text-align: left;
                font: 20px;
                font-family: 'Slabo 27px', serif;
                margin-left: 10px;
            }


        }
    </style>

</head>

<body onload="myloader()">
    <div id="loader"></div>
    <div class="header-section">
        <!-- navbar start -->
        <nav>
            <button class="nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="links">
                <li><a href="">Home</a></li>
                <li><a href="about.html">About me</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="contact.html">Contect us</a></li>
                <li><a href="regis.php">logout</a></li>
            </ul>
        </nav>
        <!-- navbar ends -->

        <!-- article section start -->
        <div class="parents-section">
            <div class="left-section">
                <h1>Creating content that captures attention</h1>
                <h3>We help brands grow by unleashing the potential of social media</h3>
                <button class="left-section-btn"><a class='learn-more' href="service.html">Learn more<i
                            class="fas fa-arrow-right fa-9x"></a></i></button>
            </div>
            <div class="right-section">
                <div class="info">
                    <img src='https://www.w3schools.com/bootstrap4/img_avatar3.png' alt='images'>
                    <h1>Hello <?php echo $_SESSION['firstname']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- header section ends -->
    
        
    </div>
    <h1 class="service-header">service section</h1>
    <div class="services">

        <div class="services-item">
            <h1>web design</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
        <div class="services-item">
            <h1>web development</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
        <div class="services-item">
            <h1>fullstack</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
    </div>
    <div class="services">

        <div class="services-item">
            <h1>graphic design</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
        <div class="services-item">
            <h1>video editing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
        <div class="services-item">
            <h1>digital marketing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <footer class="services-footer"><i class="fas fa-concierge-bell"></i></footer>

        </div>
    </div>
    <!-- service section ends  -->
    <!-- contact section start here  -->
    <h1 class="contact-header">contact us</h1>
    <div class="contact">
        <div class="innerContact">
            <label for="Fname">FirstName</label>
            <input type="text" name="Fname" id="fname" class="inputField">
        </div>
        <div class="innerContact">
            <label for="Lname">LastName &nbsp;</label>
            <input type="text" name="Lname" id="lname" class="inputField">
        </div>
        <div class="innerContact">
            <label for="Email">Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
            <input type="email" name="Email" id="email" class="inputField">
        </div>
        <div class="innerContact">
            <label for="mobile">mobile&nbsp; &nbsp; &nbsp; </label>
            <input type="text" name="mobile" id="mobile" class="inputField">
        </div>
        <button type="submit" id="form-btn" class="btn-form">submit form</button>
    </div>
    <div id="result"></div>
    <!-- about section start here  -->
    <h1 class="service-header about">about me</h1>
    <div class="about-us">
        <div class="about-first">
            <img src="https://images.all-free-download.com/images/graphicthumb/media_web_icons_6814202.jpg"
                alt="imageformgoogle">
        </div>
        <div class="about-second">
            <div class="inner-second">
                <h1>Video Productions</h1>
                <p>We'll record high quality videos that blends well with your brand persona</p>
            </div>
            <div class="inner-second">
                <h1> Content Research</h1>
                <p>We'll record high quality videos that blends well with your brand persona</p>
            </div>
            <div class="inner-second">
                <h1>Content Research</h1>
                <p>We'll record high quality videos that blends well with your brand persona</p>
            </div>
            <div class="inner-second">
                <h1>Graphic Designing</h1>
                <p>We'll record high quality videos that blends well with your brand persona</p>
            </div>

        </div>
    </div>


    <br><br> <br><br> <br><br>
    <script>

        const navtoggle = document.querySelector('.nav-toggle');
        const links = document.querySelector('.links');
        navtoggle.addEventListener('click', function () {
            if (links.classList.contains('navlinks')) {
                links.classList.remove('navlinks')
            } else {
                links.classList.add('navlinks')
            }
        })
        // navbar ends here 

        // /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
        let emailvalue = /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/g;
        let mobilevalue = /(\+88)?-?01[7836]\d{8}$/g;

        let fname = document.getElementById('fname')
        let lname = document.getElementById('lname')
        let email = document.getElementById('email')
        let mobile = document.getElementById('mobile')
        let result = document.getElementById('result')

        let formbtn = document.getElementById('form-btn').addEventListener('click', function (e) {
            e.preventDefault();
            let fvalue = fname.value;
            let lvalue = lname.value;
            let evalue = email.value;
            let mvalue = mobile.value;
            // console.log(`${fvalue} ${lvalue} ${evalue} ${mvalue}`)
            if (fvalue === '') {
                result.innerText = 'plz inset firstname properly'
                result.classList.add('danger');
                setTimeout(() => {
                    result.innerText = '';
                    result.classList.remove('danger');
                }, 5000)
            } else if (lvalue === '') {
                result.innerText = 'plz inset lastname properly'
                result.classList.add('danger');
                setTimeout(() => {
                    result.innerText = '';
                    result.classList.remove('danger');
                }, 3000)
            }
            else if (!emailvalue.test(evalue)) {
                result.innerText = 'check you inserted email properly'
                result.classList.add('danger');
                setTimeout(() => {
                    result.innerText = '';
                    result.classList.remove('danger');
                }, 5000)

            }
            else if (!mobilevalue.test(mvalue) || !mvalue.length == 11) {
                result.innerText = 'check you have inserted mobile number properly.It\'s only valid for bangladesh.plz enter 11 digit'
                result.classList.add('danger');
                setTimeout(() => {
                    result.innerText = '';
                    result.classList.remove('danger');
                }, 5000)
            } else {

                result.innerText = 'thank for your identity'
                result.classList.add('success');
                result.classList.remove('danger')
                fname.value = null
                lname.value = null
                email.value = null
                mobile.value = null
                setTimeout(() => {
                    result.innerText = '';
                    result.classList.remove('success');
                }, 5000)

            }



        })
     let loader = document.getElementById('loader');
      
    
      
        function myloader(){
           loader.style.display = 'none';
     }

    </script>   
</body>

</html>