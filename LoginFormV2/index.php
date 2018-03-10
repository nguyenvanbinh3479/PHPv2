<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Register Form</title>
  </head>
  <body>
    <?php
    require_once 'function.php';

      if(!empty($_POST)){
        $error = array();

        //email
        $email = $_POST['email'];
        if(checkInput($email, 'email')==false){
          $error['email'] = '<p>Incorrect email</p>';
          $email = '';
        }else{
          $error['email'] = '';
        }

        //Username
        $username = $_POST['name'];
        if(checkInput($username, 'username')==false){
          $error['name'] = '<p>Incorrect user name</p>';
          $username = '';
        }else{
          $error['name'] = '';
        }

        //password
        $password = $_POST['password'];
        if(checkInput($password, 'password')==false){
          $error['password'] = 'Forgot password?';
          $password = '';
        }else{
          $error['password'] = '';
        }

        //website
        $website = $_POST['website'];
        if(checkInput($website, 'website')==false){
          $error['website'] = '<p>Incorrect website</p>';
          $website = '';
        }else{
          $error['website'] = '';
        }

      }else{
        $error = '';
        $email = '';
        $password = '';
        $username = '';
        $website = '';
        $error['email'] = '';
        $error['name'] = '';
        $error['password'] = '';
        $error['website'] = '';
      }
    ?>
    <div class="wrapper">
      <form action="#" method="post">

        <div class="formtitle">Login to your account</div>

        <div class="input">
          <div class="inputtext">Email</div>
          <div class="inputcontent">
            <input type="text" name='email' value='<?php echo $email;?>'/> 
            <?php echo $error['email'];?>
          </div>
        </div>

        <div class="input">
          <div class="inputtext">Username</div>
          <div class="inputcontent">
            <input type="text" name='name' value='<?php echo $username;?>'/> 
            <?php echo $error['name'];?>
          </div>
        </div>

        <div class="input">
          <div class="inputtext">Password</div>
          <div class="inputcontent">
            <input type="password" name='password' value='<?php echo $password;?>'/> 
            <p class='forgot'><?php echo $error['password'];?></p>
          </div>
        </div>

        <div class="input nobottomborder">
          <div class="inputtext">Website</div>
          <div class="inputcontent">
            <input type="text" name='website' value='<?php echo $website;?>'/> 
            <?php echo $error['website'];?>            
          </div>
        </div>

        <div class="button">
          <div class="inputcontent">
            <input type="submit" name='submit' value='Login'/> 
          </div>
        </div>
        
      </form>
    </div>
  </body>
</html>