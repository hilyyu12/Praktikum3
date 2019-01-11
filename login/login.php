<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "abiyyu" && $pass == "hilyyu") {
        echo "Login Berhasil";
      }
    else {
       echo "Login Gagal";
     }

     
    ?>

  </body>
</html>
