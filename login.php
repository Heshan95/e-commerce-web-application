<?php
include './showErros.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>L O G I N</title>
   <link type="text/css" href="admin_login.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/unauthorized-person.png">
    </head>
    <body>        
  <div class="toggle" onclick="menuToggle()"></div>
        <section class="login-page">
            <form method="post" action="admin_login_checkLogin.php">
                <div class="box" >
                    <div class="form-head">
                        <h2>Log In</h2>
                    </div>
                    <div class="form-body">
                        <input type="text" placeholder="Enter Name" name="username">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-footer">
                        <button type="submit">Sign In</button>                        
                    </div> 
                    <div class="btn2">
                        <button type="submit">Forgot password</button> 
                    </div>
                    <div class="">
                        <h3 class="register">I need to |<span type="submit"><a href="admin_register.php" style="text-decoration: none;"> Register Now</a></span> </h3>
                    </div>
                </div>
            </form>
        </section>
  
   <script type="text/javascript">
            function menuToggle() {
                const toggleMenu = document.querySelector('.toggle');
                const section = document.querySelector('section');
                toggleMenu.classList.toggle('active');
                section.classList.toggle('active');
            }
        </script>
    </body>
</html>
