<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $address = $_POST["address"];
  $linkedin = $_POST["linkedin"];
}

$errors = [];

# Validate Name ... 
 if(empty($name)){
    $errors['Name'] = "Field Required";
}

# Validate Email 
if(empty($email)){
    $errors['Email'] = "Field Required";
}

# Validate Password 
if(empty($password)){
    $errors['Password'] = "Field Required";
}elseif(strlen($password) < 6 ){
  $errors['Password'] = "Length must be = 6 chars";
}


//validate address
if(empty($address)){
    $errors['address'] = "Field Required";

    
}elseif(strlen($address) < 10 ){
  $errors['address'] = "Length must beequal to or  more than 10 chars";
}
//validate linkedin
if(empty($linkedin)){
    $errors['linkedin'] = "Field Required";
}elseif(strlen($address) < 10 ){
  $errors['Password'] = "Length must beequal to or  more than 10 chars";
}


 if(count($errors) > 0){
     foreach ($errors as $key => $value) {
      
         echo '* '.$key.' : '.$value.'<br>';
     }
 }else{
     echo 'name :'.$_POST['name']." ".'e_mail :'.$_POST['email']." ".'password :'.$_POST['password']." ". 'address :'.$_POST['address']." ".'linkedin :'.$_POST['linkedin'];
 }

?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>form_validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
 
 
  <form   action="<?php  echo  $_SERVER['PHP_SELF'];?>"  method="post">

  <input type="hidden"   value="1" name="data">
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="Name"  name="name" aria-describedby="" placeholder="Enter Name" required>
  </div>

  <div class="form-group">
    <label for="email">E_mail</label>
    <input type="email" class="form-control" id="email"  name="email" aria-describedby="" placeholder="Enter email" required>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"  name="password" aria-describedby="" placeholder="Enter password" required>
  </div>

  <div class="form-group">
    <label for="address">address</label>
    <input type="text" class="form-control" id="address"  name="address" aria-describedby="" placeholder="Enter address" required>
  </div>

  <div class="form-group">
    <label for="exampleInputName">LinkedIn URL</label>
    <input type="URL" class="form-control" id="exampleInputName"  name="linkedin" aria-describedby="" placeholder="Enter linked_in url" required>
  </div>
     
     

 
  
     <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>

