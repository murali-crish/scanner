<?php
$allowedexts = array("pdf","jpg","doc","txt","jpeg","gif");
$temp=explode(".",$_FILES["file"]["name"]);
$ext=end($temp);
if ((
($_FILES["file"]["type"]=="application/pdf")
||($_FILES["file"]["type"]=="text/plain")
||($_FILES["file"]["type"]=="image/jpg")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
&&($_FILES["file"]["size"]<4000000)
&&in_array($ext,$allowedexts))
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
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
  }
  else
  {
  echo "unsupported file";
  }

?>