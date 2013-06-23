<?php 
  session_start(); 
?>
<!DOCTYPE html>
<!-- saved from url=(0074)http://wrongwaycn.github.com/bootstrap/docs/examples/starter-template.html -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PHP上傳檔案程式</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">PHP上傳檔案程式</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">首頁</a></li>
              <li><a href="upload.php">上傳檔案</a></li>
              <li><a href="table.php">檔案列表</a></li>
              <li><a href="#contact">其他</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="span4 offset3">
<?php		
if(isset($_SESSION['username'])):
?>	

<h4>這是個首頁。<br>你好<?php echo
$_SESSION['username'];
?>，你已經登入了。</h4>

        <form class="form-horizontal" action="logout.php" method="POST" name="logout-form">
          <fieldset>
            <div id="legend">
              <legend class="">登出</legend>
            </div>

            <div class="control-group">
              <div class="controls">
                <button class="btn btn-success">登出</button>
              </div>
            </div>

          </fieldset>
        </form>
      </div>
    </div>
    <?php else: ?>

    <form class="form-horizontal" id="login_signup_form" method="POST">
      <fieldset>

        <!-- Form Name -->
        <legend>Login &amp; Signup</legend>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="username">username</label>
          <div class="controls">
            <input id="username" name="username" type="text" placeholder="username" class="input-xlarge" style="box-sizing: content-box">

          </div>
        </div>

        <!-- Password input-->
        <div class="control-group">
          <label class="control-label" for="password">password</label>
          <div class="controls">
            <input id="password" name="password" type="password" placeholder="password" class="input-xlarge" style="box-sizing: content-box">

          </div>
        </div>

        <!-- Button (Double) -->
        <div class="control-group">
          <label class="control-label" for="login"></label>
          <div class="controls">
            <button id="login" name="login" class="btn btn-success">login</button>
            <button id="signup" name="signup" class="btn btn-primary">signup</button>
          </div>
        </div>

      </fieldset>
    </form>



    <?php endif; ?>
  </div>
</div>


</body>
<script src="js/setup.js"></script>
</html>
