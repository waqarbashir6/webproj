<?php
setcookie("user_name", "thakur", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds';
     print_r($_COOKIE);    //output the contents of the cookie array variable 
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

