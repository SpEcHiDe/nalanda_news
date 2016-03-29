<?php
ini_set('display_errors', 1);
error_reporting(-1);
echo "<!--";
if(isset($_REQUEST['q'])){
/* OBJECTIVE: removes the entry from the db
   INPUT: 1) text to be removed
          2) url to be deleted
          3) type of operation
   OUTPUT: success OR failure
*/
  $filename = "contents.txt";
  $dirname = "img/";
  $text = $_REQUEST['text'];
  $txet = strrev($_REQUEST['txet']);
  $q = $_REQUEST['q'];
  if($q == '01'){
    echo "text";
    if($text == $txet){
      echo "do";
      $contents = file_get_contents($filename);
      $contents = str_replace($text, '', $contents);
      file_put_contents($filename, $contents);
      echo "failure";
    }
    else{
      die("not humanly possible!");
    }
  }
  else if($q == '10'){
    echo "img";
    if($text == $txet){
      echo "do";
      $name = basename($text);
if(chdir($dirname)){
      if(unlink($name)){
        chdir('..');
        $contents = file_get_contents($filename);
        $contents = str_replace("<img src='api/img/" . $name . "'>", '', $contents);
        file_put_contents($filename, $contents);
      }
}
      echo "success";
    }
    else{
      die("not humanly possible!");
    }
  }
  else{
    die("not humanly possible!");
  }
}
echo "-->";
echo "<meta http-equiv='refresh' content='0' />";
?>
