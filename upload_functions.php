<?php

$name=$_FILES["file"]["name"];
$size=$_FILES["file"]["size"];
function validfiletype($name)
{
$allowedexts = array("pdf","jpg","doc","txt","jpeg","gif");
$temp=explode(".",$_FILES["file"]["name"]);
$ext=end($temp);
if (!in_array($ext,$allowedexts))
{
echo "invalid file type";
die();
}
}
function validfilesize($size)
{
if ($_FILES["file"]["size"]>4000000)
{
echo "large file";
die();
}
}
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	validfiletype($name);
	validfilesize($size);
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("C:/xampp/tmp/uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "C:/xampp/tmp/uploads/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "C:/xampp/tmp/uploads/" . $_FILES["file"]["name"];
      }
    }
   
?>