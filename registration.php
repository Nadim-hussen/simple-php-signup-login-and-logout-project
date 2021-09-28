<?php
 include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>registration page</title>
    <style>
         * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }
            .informaing-user{
                background-color:#6633cc;
                /* margin: 10px; */
                padding: 10px;
                border-radius: 100px;
                margin-bottom: 50px;
            }
            .head-inform{
                margin-top:80px;
               display: flex;
               flex-direction: column;
               justify-content: center;
               align-items: center;
               
            }
            form{
                width: 524px;
            }
            .success {
            text-align: center;
            font-size: 20px;
            background-color: #33ce55;
            color: #fff;
            padding: 10px;
           
            margin: 15px auto;
        }

        .danger {
            text-align: center;
            font-size: 20px;
            background-color: #ff0000;
            color: #fff;
            padding: 10px;
           
            margin: 15px auto;
        }
        .login{
            margin:0 auto;
            text-align:center;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        button{
            text-decoration:none;
            color:#fff;
            text-align:center;
            
            /* border:1px solid grey; */
            padding:10px;
            background-color:#adbcdf;
        }
        a{
            text-decoration:none;
            color:#fff;
            text-align:center;
            
            border:1px solid grey;
            padding:10px;
            background-color:#adbcdf;
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
    <div class="head-inform">
    <h3 class="informaing-user">Please first register to access our services</h3>
    <form action="" method="POST" class="center">
        <div class="mb-3">
            <label for="fname" class="form-label">FirstName</label>
            <input type="text" autocomplete="off" name="fname" class="form-control" id="fname">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">LastName</label>
            <input type="text" autocomplete="off" name="lname" class="form-control" id="lname">
          </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" autocomplete="off" class="form-control" name="email" id="email" >
    </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" autocomplete="off" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" autocomplete="off" name="phone" class="form-control" id="phone">
          </div>
          <button type="submit" id="submit" name="submit" class="d-flex justify-content-center align-items-center mb-3">Submit</button>
          
      <a href="regis.php">go to login page</a>
          <div id="result"></div>
   
      </form>
      
</div>
                       <?php 


                           
      if(isset($_POST['submit'])){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['phone'];
        if($firstName =='' || $lastName == '' || $email == '' || $password == '' || $mobile == ''){
        ?>
        <script>
             let fname = document.getElementById('fname');
          let lname = document.getElementById('lname');
          let email = document.getElementById('email');
          let password = document.getElementById('password');
          let phone = document.getElementById('phone');
          let emailvalue = /^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/g;
          let mobilevalue = /(\+88)?-?01[7836]\d{8}$/g;
          let fvalue = fname.value;
          let lvalue = lname.value;
          let evalue = email.value;
          let pvalue = password.value;
          let mvalue = phone.value;
          if(fvalue===''){
              result.innerText = 'plz inset firstname properly'
              result.classList.add('danger');
              setTimeout(() => {
                  result.innerText = '';
                  result.classList.remove('danger');
              }, 5000)

          }else if(lvalue==''){
              result.innerText = 'plz inset lastname properly'
              result.classList.add('danger');
              setTimeout(() => {
                  result.innerText = '';
                  result.classList.remove('danger');
              }, 5000)
          }else if(!emailvalue.test(evalue)){
              result.innerText = 'check you inserted email properly'
              result.classList.add('danger');
              setTimeout(() => {
                  result.innerText = '';
                  result.classList.remove('danger');
              }, 5000)
          }else if(pvalue=='' || pvalue>8){
               result.innerText='plz insert password contain more than 8 character';
              result.classList.add('danger');
              setTimeout(() => {
                  result.innerText = '';
                  result.classList.remove('danger');
              }, 5000)
          }else if(!mobilevalue.test(mvalue) || !mvalue.length == 11){
               result.innerText='plz insert Bangladeshi number in 11 character';
              result.classList.add('danger');
              setTimeout(() => {
                  result.innerText = '';
                  result.classList.remove('danger');
              }, 5000)
              }
        </script>
        <?php

            }else{
                ?>
                <script>
                    fname.value='',
                    lname.value='',
                    email.value='',
                    password.value='',
                    phone.value=''
                    </script>
                <?php
                // $pass = password_hash('$password',PASSWORD_BCRYPT);
                                 
                $sql = "insert into `stuent2`(`id`, `firstname`, `lastname`, `email`, `password`, `mobile`) values('','$firstName','$lastName','$email'
                ,'$password','$mobile')";
                $result = mysqli_query($con,$sql);
                if($result){
                    echo 'thanks for the input';
                    // header("Location: http://localhost/phpproject2/login.php");
                }else{
                    die('failed to insert data. Plz try again');
                }
               
            }

      
            }
        ?>
        
  
         
       

           
                         
    
      
      
              
   
     
     
</body>
</html>