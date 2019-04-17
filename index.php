<?php 
session_start();

require "Database.php";
$table="categories";
$database=new Database("", "root", "");
$connection=mysqli_connect("localhost", "root", "", "registration");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>home</title>
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

                </div>
              
                <div class="col-12 bg-danger pull-left" style="background:white;">
                    Welcome <br>
                    <a href="logout.php"> logout</a>
        </div>
                </div>
            </div>
        </div>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>