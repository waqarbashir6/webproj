<?php 
session_start();

require "Database.php";
$table="categories";
$database=new Database("", "root", "");
$connection=mysqli_connect("localhost", "root", "", "registration");
if(!empty($_SESSION)){
    header("location:index.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            a{
                color:white;
            }
            a:hover{
                color:white;
            }
            
        </style>
    </head>
    <body style="background-image:url('LA25-hero_1-740x285.jpg'); background-position: center; background-size:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-12">
        <h1 class="text-white text-center bg-primary col-12">Store Management System</h1>
                </div>
                <div class="col-12">
<?php
if(!empty($_POST['name']) && !empty($_POST['password'])):
    $query="SELECT * FROM users WHERE name='".$_POST['name']. "' AND password ='".$_POST['password']."'";
    $arg= mysqli_query($connection, $query)or die(mysqli_error($connection));
   $obj=$arg->fetch_object();
   $result=count($obj)==1 ?1:0;
if($result>0){
    $_SESSION['auth']=true;
    header("location:index.php");
}else{
$message="Name or password is wrong!";
}
endif;
?>
                </div>
              
                <div class="col-12 bg-danger pull-left" style="background:white;">
        <form class="form-horizontal text-white" method='post' action='' >
<fieldset>
<!-- Form Name -->
<legend>Login</legend>
<?php echo !empty($message)?"<div class='alert alert-success'>$message</div>":""; ?>
<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 control-label" for="textinput">Name</label>  
  <div class="col-md-8">
  <input id="name" name="name" type="text"   placeholder="Enter name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 control-label" for="amount">Password</label>  
  <div class="col-md-8">
  <input id="password" name="password" type="password"   placeholder="Enter Password" class="form-control input-md" required="">
    
  </div>
</div>

  <div class="col-md-8">
<div class="form-group">
  <input type="submit" class="btn btn-primary" >
</div>
  </div>


</fieldset>
</form>
                    
                    <a href="signup.php"> Not have an account ? Signup</a>
        </div>
                </div>
            </div>
        </div>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>