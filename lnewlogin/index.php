<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widht,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="asset/css/Style.css">
        
    </head>
    <body>

        <div class="container">
            <img src="asset/img/banner_login.png">
            
            <form>
               
                <div class="form-input">
                    <!--pada fungsi input harus diberi id agar terbaca di javascript-->
                    <input type="text" name="username" id="username" placeholder="Username" >
                </div>   
                <div class="form-input">
                    <input type="password" name="password" id="password" placeholder="Password" >
                </div>
                
                <input onClick="clicked();" type="submit" name="submit" value="LOG ON" class="btn-login" >
   
            </form><br>
             <a href="$"> Forget password?</a>
        </div>
        
        <footer>
            <p>login form<a class="footer-text" href="$">Syaifudin </a>
        </footer>
      <script type="text/javascript" src="asset/js/login.js"></script>
                      
    </body>
</html>
