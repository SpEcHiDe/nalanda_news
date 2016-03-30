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

  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}
  </style>

  <script src="../js/jquery-2.2.2.min.js"></script>
  <script type="text/javascript">

    function getNoOfTF(){
      var inputs = document.getElementsByTagName('input');
      var count = 0;
      for(var cpt = 0; cpt < inputs.length; cpt++){
        if (inputs[cpt].type == 'file') count++;
      }
      var stupni = document.getElementsByTagName('textarea');
      var tnuoc = 0;
      for(var cpt = 0; cpt < stupni.length; cpt++){
        tnuoc++;
      }
      return (count + tnuoc);
    }

    function addOneMore(type){
      var requiredVal = getNoOfTF() + 1;
      var requiredHTML_img = "<div class='form-group'>";
      requiredHTML_img += "<div class='input-group'>";
      requiredHTML_img += "<span class='input-group-btn'>";
      requiredHTML_img += "<span class='btn btn-default btn-file'>";
      requiredHTML_img += "Browse: <input tabindex='1' class='form-control' placeholder='enter feed' name='deef" + requiredVal + "' type='file'>";
      requiredHTML_img += "</span>";
      requiredHTML_img += "</span>";
      requiredHTML_img += "<input type='text' id='fileSeler' class='form-control' readonly>";
      requiredHTML_img += "</div>";
      requiredHTML_img += "</div>";
      requiredHTML_img += "<input type='hidden' name='def" + requiredVal + "' value='" + requiredVal + "'>";
      var requiredHTML_ta = "<div class='form-group'>";
      requiredHTML_ta += "<textarea tabindex='1' class='form-control' onkeyup='countChar(this)' name='feed" + requiredVal + "' autofocus cols='40' rows='3'>";
      requiredHTML_ta += "</textarea><div id='cc_" + requiredVal + "'></div></div>";

      if(type == 'textarea'){
        $(requiredHTML_ta).insertAfter($('.form-group').last());
      }
      if(type == 'img'){
        $(requiredHTML_img).insertAfter($('.form-group').last());
      }
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

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
       document.getElementById('fileSeler').value = label;
});

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
            <form role="form" method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <fieldset>

                  <?php
                    $i = 1;
                    foreach(array_filter($feeds) as $feed){
                      echo "<div class='form-group'>";
                      echo "<textarea readonly class='form-control' name='feed" . $i . "' cols='40' rows='3'>" . $feed . "</textarea>";
                      echo "</div>";
                      $i++;
                    }
                  ?>

                    <div class='form-group'>
                        <!-- This block intentionally left blank -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick="addOneMore('textarea')">Add Text</button>
                        </div>
                        <div class="col-sm-6">
                            <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick="addOneMore('img')">Add Image</button>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <button tabindex='4' type='submit' name='sbmtbtn' class='btn btn-lg btn-success btn-block'>Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['sbmtbtn'])){
  $feeds = array_filter($_POST);
  $myfile = fopen("contents.txt", "w") or die("Unable to create file!");
  $contents = array();
  foreach($feeds as $key=>$value){
    if(substr($key,0,3) == 'def'){
      $target_dir = "img/";
      $target_file = $target_dir . basename($_FILES["deef" . $value]["name"]);
      // echo $target_file;
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      $check = getimagesize($_FILES["deef" . $value]["tmp_name"]);
      if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "<div class='alert alert-warning'>File is not an image.</div>";
        $uploadOk = 0;
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "<div class='alert alert-warning'>Sorry, file already exists.</div>";
        $uploadOk = 0;
      }
      // Check file size greater than 5MiB
      if ($_FILES["deef" . $value]["size"] > 5000000) {
        echo "<div class='alert alert-warning'>Sorry, your file is too large.</div>";
        $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "<div class='alert alert-warning'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
        $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "<div class='alert alert-warning'>Sorry, your file was not uploaded.</div>";
        // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["deef" . $value]["tmp_name"], $target_file)) {
          // echo "<div class='alert alert-success'>The file ". basename( $_FILES["deef" . $value]["name"]). " has been uploaded.</div>";
          $a = basename( $_FILES["deef" . $value]["name"]);
          $contents[] = "<img src='api/img/" . $a . "'>";
        } else {
          echo "<div class='alert alert-warning'>Sorry, there was an error uploading your file.</div>";
        }
      }
    }
    else{
      $contents[] = nl2br($value);
    }
  }

  $cntents = implode("\r\n\r\n\r\n",$contents);

  fwrite($myfile, $cntents);
  fclose($myfile);
  echo "<div class='alert alert-success'>successfully inserted values</div>";
  echo "<meta http-equiv='refresh' content='0' />";
}
?>

</body>
</html>
