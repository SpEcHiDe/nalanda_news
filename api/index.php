<?php
$valid_passwords = array ("USER_NAME" => "PASSWORD_IS_NOT_THE_PWD");
$valid_users = array_keys($valid_passwords);
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
if (!$validated) {
  header('WWW-Authenticate: Basic realm="Entry for Valid Users Only!"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}
echo "<!--";
$myfile = fopen("contents.txt", "r") or die("Unable to open file!");
echo "opened file for reading\n";
$contents = fread($myfile,filesize("contents.txt"));
$feeds = explode("\r\n\r\n\r\n",$contents);
echo "obtained contents inside file\n";
fclose($myfile);
echo "-->";
$courses = array(
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/102102033",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/102105034",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101086",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105102088",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104099",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104101",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104103",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105105",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105106",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105107",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105108",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106116",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106118",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106119",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105107121",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105107123",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106101060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106101061",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102064",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102065",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102067",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106104074",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105077",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105079",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105081",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105083",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105085",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106090",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106092",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106093",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106094",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106108102",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108101037",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108101038",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102042",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102043",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102045",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102047",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102080",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108104049",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108104052",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105054",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105055",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105056",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105058",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105059",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105064",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105065",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105067",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106068",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106069",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106073",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106075",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108108076",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108108077",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101095",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101097",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101099",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112102101",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112102106",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104114",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104115",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104121",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105123",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105124",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105126",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105128",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106130",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106131",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106134",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106135",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106138",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106140",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112107147",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/113105057",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105029",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105030",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105031",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101050",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101051",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101056",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102059",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105075",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105078",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105079",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105080",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105081",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105085",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106086",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106087",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106088",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106089",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106091",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106092",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106093",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102004",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102007",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102008",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102009",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104015",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104016",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104017",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105020",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105021",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105022",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105023",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105024",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106025",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106027",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106028",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106033",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106034",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122108038",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/123105001");

$filenames = array(
"lec01.mp4",
"lec02.mp4",
"lec03.mp4",
"lec04.mp4",
"lec05.mp4",
"lec06.mp4",
"lec07.mp4",
"lec08.mp4",
"lec09.mp4",
"lec10.mp4"
);
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
		if (inputs[cpt].type == 'hidden') count++;
      }
      var stupni = document.getElementsByTagName('textarea');
      var tnuoc = 0;
      for(var cpt = 0; cpt < stupni.length; cpt++){
        tnuoc++;
      }
      return (count + tnuoc);
    }

	function encodeImageFileAsURL(){
		var filesSelected = document.getElementById("inputFileToLoad").files;
		if (filesSelected.length > 0){
			var fileToLoad = filesSelected[0];
			var label = fileToLoad.name.replace(/\\/g, '/').replace(/.*\//, '');
			var fileReader = new FileReader();
			fileReader.onload = function(fileLoadedEvent) {
				var srcData = fileLoadedEvent.target.result; // <--- data: base64
				document.getElementById('fileSeler').value = "<img src=\"" + srcData + "\" alt=\"" + label + "\">";
			}
			fileReader.readAsDataURL(fileToLoad);
		}
	}

    function encodeVideoAsText(val,r){
		var reqtext = val.options[val.selectedIndex].innerHTML;
		var a = 'nptel' + r;
		var inEmt = document.getElementById(a);
		inEmt.value = "<video data-autoplay><source class='stretch' data-src='" + reqtext + "' type='video/mp4' /></video>";
	}

    function addOneMore(type){
      var requiredVal = getNoOfTF() + 1;
      var requiredHTML_img = "<div class='form-group'>";
      requiredHTML_img += "<div class='input-group'>";
      requiredHTML_img += "<span class='input-group-btn'>";
      requiredHTML_img += "<span class='btn btn-default btn-file'>";
      requiredHTML_img += "Browse: <input onchange='encodeImageFileAsURL();' tabindex='1' class='form-control' placeholder='enter feed' id='inputFileToLoad' type='file'>";
      requiredHTML_img += "</span>";
      requiredHTML_img += "</span>";
      requiredHTML_img += "<input type='text' id='fileSeler' name='fileSeler" + requiredVal + "' class='form-control' readonly><div id='imgTest'></div>";
      requiredHTML_img += "</div>";
      requiredHTML_img += "</div>";
      var requiredHTML_ta = "<div class='form-group'>";
      requiredHTML_ta += "<textarea tabindex='1' class='form-control' onkeyup='countChar(this)' name='feed" + requiredVal + "' autofocus cols='40' rows='3'>";
      requiredHTML_ta += "</textarea><div id='cc_" + requiredVal + "'></div></div>";
      var requiredHTML_nptel = "<div class='form-group'>";
      requiredHTML_nptel += "<select class='form-control' onchange=\"encodeVideoAsText(this,'" + requiredVal + "')\">";
      requiredHTML_nptel += "<option>NA</option>";

      <?php
        foreach($courses as $course){
			foreach($filenames as $filename){
				echo "requiredHTML_nptel += \"<option>$course/$filename</option>\";";
			}
		}
      ?>

      requiredHTML_nptel += "</select>";
      requiredHTML_nptel += "<input type='hidden' id='nptel" + requiredVal + "' name='nptel" + requiredVal + "'>";
      requiredHTML_nptel += "</div>";

      if(type == 'textarea'){
        $(requiredHTML_ta).insertAfter($('.form-group').last());
      }
      if(type == 'img'){
        $(requiredHTML_img).insertAfter($('.form-group').last());
      }
      if(type == 'nptel'){
        $(requiredHTML_nptel).insertAfter($('.form-group').last());
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
                      echo "<textarea class='form-control' name='feed" . $i . "' cols='40' rows='3'>" . $feed . "</textarea>";
                      echo "</div>";
                      $i++;
                    }
                  ?>
                    <div class='form-group'>
                        <!-- This block intentionally left blank -->
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick="addOneMore('textarea')">Add Text</button>
                        </div>
                        <div class="col-sm-4">
                            <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick="addOneMore('img')">Add Image</button>
                        </div>
                        <div class="col-sm-4">
                            <button tabindex='2' type="button" name='addtxtbtn' class='btn btn-lg btn-success btn-block' onClick="addOneMore('nptel')">Add Video</button>
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
	$contents[] = nl2br($value);
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
