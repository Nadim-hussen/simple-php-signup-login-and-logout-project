<?php 
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Document</title>
        <style>
            .head-inform{
                    margin-top:80px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                
                }
                .informaing-user{
                    background-color:#6633cc;
                    /* margin: 10px; */
                    padding: 10px;
                    border-radius: 100px;
                    margin-bottom: 30px;
                }
                form{
                    width: 620px;
                }
                @media screen and (max-width:750px) {
                form{
                    width: 350px;
                    padding: 15px;
                    
                }
                .informaing-user{
                    width: 350px;
                margin-bottom: 50px;
                padding: 15px;
                text-align: center;
                }
            }
            @media screen and (max-width:450px) {
                form{
                    width: 280px;
                    padding: 15px;
                }
                .informaing-user{
                    width: 280px;
                margin-bottom: 50px;
                padding: 15px;
                text-align: center;
                }
            }
            @media screen and (max-width:300px) {
                form{
                    width: 200px;
                    padding: 15px;
                }
                .informaing-user{
                    width: 200px;
                margin-bottom: 35px;
                padding: 15px;
                width: 90vw;
                border-radius: 0px;
                }
            }
        </style>
    </head>

    <body>
        <div class="container mt-5 mx-auto head-inform">
        <h3 class="informaing-user">Please first login to access our website</h3>
        <form action="" method="POST">
        <div class="mb-3"> 
            <label for="email" class="form-label">Email address</label>
            <input type="email" autocomplete="off" class="form-control" name="email" id="email" >
        </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" autocomplete="off" name="password" class="form-control" id="password">
            </div>
            <button type="submit" id="submit" name="submit" class="mx-3">Submit</button>
            </form>
        </div>
        <?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email_search = " SELECT * FROM `stuent2` WHERE `email` = '$email' ";
        $query = mysqli_query($con, $email_search);
        $email_count = mysqli_num_rows($query);
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
            // echo $email_pass['firstname'];
            $dbcon = $email_pass['password'];
            $_SESSION['firstname'] = $email_pass['firstname'];
            // $pass_decode = password_verify($password , $dbcon);
            // echo $pass_decode;
            if($password == $email_pass['password']){
                echo 'login successful';
                header("location: home.php");
            }else{
                echo 'invalid password';
            }
        }else{
            echo 'invalid email'; 
        }
    }
    if(!isset($_POST['submit'])){
        ?>
        <script>alert('plz. First login');</script>
        <?php
    }
    ?>
        </body>
    </html>    
