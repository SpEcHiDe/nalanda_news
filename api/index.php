<?php
echo "<!--";
$myfile = fopen("contents.txt", "r") or die("Unable to open file!");
echo "opened file for reading\n";
$contents = fread($myfile,filesize("contents.txt"));
$feeds = explode("\r\n\r\n\r\n",$contents);
echo "obtained contents inside file\n";
fclose($myfile);
echo "-->";
?>

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

  <script src="../js/jquery-2.2.2.min.js"></script>

  <script src="../js/tinymce/tinymce.min.js"></script>

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
      var requiredHTML = "<div class='form-group'><textarea tabindex='1' class='form-control' onkeyup='countChar(this)' id='feed" + requiredVal + "' name='feed" + requiredVal + "' autofocus cols='40' rows='3'></textarea><div id='cc_" + requiredVal + "'></div></div>";
      $(requiredHTML).insertAfter($('.form-group').last());
      initMCE();
    }

    function countChar(val){
	  var len = val.value.length;
	  var display = val.name.split('d')[1];
	  var the_real_display = '#cc_' + display;
	  if(len >= 160){
	    $(the_real_display).text('invalid');
	  }
	  else{
	    $(the_real_display).text(160 - len);
	  }
	}

	function initMCE(){
		tinymce.init(
			{ 
				mode : "textareas",
				plugins: "image",
				toolbar: "image"
			}
		);
	}
	
	$().ready(
		initMCE()
	);

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

<?php
                    $i = 0;

                    foreach(array_filter($feeds) as $feed){
                      echo "<div class='form-group'>";
                      echo "<textarea readonly class='form-control' id='feed" . $i . "' name='feed" . $i . "' cols='40' rows='3'>" . $feed . "</textarea>";
                      echo "</div>";
                      $i++;
                    }
?>

					<div class='form-group'>
                        <textarea tabindex='1' class='form-control' id='feed<?php echo $i; ?>' name='feed<?php echo $i; ?>' autofocus cols='40' rows='3' onkeyup='countChar(this)'></textarea>
                        <div id='cc_1'></div>
                    </div>



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
  $contents = implode("\r\n\r\n\r\n",$feeds);
  $myfile = fopen("contents.txt", "w") or die("Unable to create file!");
  fwrite($myfile, $contents);
  fclose($myfile);
  echo "<div class='alert alert-success'>successfully inserted values</div>";
}
?>

</body>
</html>
