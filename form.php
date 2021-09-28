<?php

if(isset($_POST['submit'])){
  
$firstName= $_POST["name"] ;
$age =  $_POST["age"];
$email =  $_POST["email"];

    if(is_string($firstName) && is_numeric($age) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Thanks for your input';
    }else{
        echo 'something went wrong';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form Data</title>
</head>
<body>
    <form action= "<?php $_PHP_SELF ?>" method='POST'> 
    <input type='text' name='name'>
    <input type="text" name='age'>
    <input type="email" name='email'>
    <button type='submit' name='submit'>click me </button>
</form>
</body>
</html>
