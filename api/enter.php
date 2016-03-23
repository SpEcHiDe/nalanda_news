<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="description" content="an interface to store and display top news items">
  <meta name="author" content="NALANDA Admin Team">
  <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
  <title>enter feeds</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!--<link rel="stylesheet" type="text/css" href="../css/responsive.css">-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div class="container">
    <div style="height:50px;"></div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Enter the FEEDS one by one</h3>
          </div>
          <div class="panel-body">
            <form role="form" method="POST" action="" accept-charset="UTF-8">
              <fieldset>
                <div class="form-group">
                  <input tabindex="1" class="form-control" placeholder="feed one" name="feed1" type="text" value="" autofocus>
                </div>
                <div class="form-group">
                  <input tabindex="2" class="form-control" placeholder="feed one" name="feed2" type="text" value="">
                </div>
                <div class="form-group">
                  <input tabindex="3" class="form-control" placeholder="feed one" name="feed3" type="text" value="">
                </div>
                <div class="form-group">
                  <input tabindex="4" class="form-control" placeholder="feed one" name="feed4" type="text" value="">
                </div>
                <div class="form-group">
                  <input tabindex="5" class="form-control" placeholder="feed one" name="feed5" type="text" value="">
                </div>
                <button tabindex="6" type="submit" name="sbmtbtn" class="btn btn-lg btn-success btn-block">Submit</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>

      </div>
      </div>

<?php
if(isset($_POST['sbmtbtn'])){
  $feed1 = $_POST['feed1'];
  $feed2 = $_POST['feed2'];
  $feed3 = $_POST['feed3'];
  $feed4 = $_POST['feed4'];
  $feed5 = $_POST['feed5'];
  $contents = implode(";",array($feed1,$feed2,$feed3,$feed4,$feed5));
  $myfile = fopen("contents.txt", "w") or die("Unable to create file!");
  fwrite($myfile, $contents);
  fclose($myfile);
  echo "<div class='alert alert-success'>successfully inserted values</div>";
}
?>

</body>
</html>
