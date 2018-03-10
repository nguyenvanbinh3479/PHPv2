<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <?php
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
    ?>
    <div class="wrapper" method="post">
      <form action="#">
        <div class="formtitle">Login to your account</div>
        <div class="input">
          <div class="inputtext">Email</div>
          <div class="inputcontent">
            <input type="text" name='email' value=''/> 
          </div>
        </div>

        <div class="input">
          <div class="inputtext">Username</div>
          <div class="inputcontent">
            <input type="text" name='name' value=''/> 
            <p>Forgot password?</p>
          </div>
        </div>

        <div class="input">
          <div class="inputtext">Password</div>
          <div class="inputcontent">
            <input type="password" name='password' value=''/> 
          </div>
        </div>

        <div class="input nobottomborder">
          <div class="inputtext">Website</div>
          <div class="inputcontent">
            <input type="text" name='Website' value=''/> 
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