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

  <script src="../js/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="></script>

  <script type="text/javascript">

    function getNoOfTF(){
      var inputs = document.getElementsByTagName('input');
      var count = 0;
      for(var cpt = 0; cpt < inputs.length; cpt++)
        if (inputs[cpt].type == 'text') count++;
      return count;
    }

    function addOneMore(){
      var requiredVal = getNoOfTF() + 1;
      var requiredHTML = "<div class='form-group'><input tabindex='1' class='form-control' placeholder='enter feed' name='feed" + requiredVal + "' type='text' value='' autofocus></div>";
      $(requiredHTML).insertAfter($('.form-group').last());
    }
  </script>

</head>
<body>

  <div class="container">
    <div style="height:50px;"></div>


        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Enter the FEEDS one by one</h3>
          </div>
          <div class="panel-body">
            <form role="form" method="POST" action="" accept-charset="UTF-8">
              <fieldset>

                <div class='form-group'><input tabindex='1' class='form-control' placeholder='enter feed' name='feed1' type='text' value='' autofocus></div>

                <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick='addOneMore()'>Add more</button>

                <button tabindex='3' type='submit' name='sbmtbtn' class='btn btn-lg btn-success btn-block'>Submit</button>

              </fieldset>
            </form>
          </div>
        </div>



      </div>

<?php
if(isset($_POST['sbmtbtn'])){
  $feeds = array_filter($_POST);
  $contents = implode("\n",$feeds);
  $myfile = fopen("contents.txt", "w") or die("Unable to create file!");
  fwrite($myfile, $contents);
  fclose($myfile);
  echo "<div class='alert alert-success'>successfully inserted values</div>";
}
?>

</body>
</html>
