<?php 
if (isset($_POST['ok'])) {
  header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/success.css" />
  </head>
  <body>
  <div class="wrapper">
<div class="header"><span>BOOKING SUCCESSFULLY</span></div>
<div class="success-checkmark">
  <div class="check-icon">
    <span class="icon-line line-tip"></span>
    <span class="icon-line line-long"></span>
    <div class="icon-circle"></div>
    <div class="icon-fix"></div>
  </div>
</div>
  <div class="footer">
  <a href="index.php" id="close" name="ok" >Ok</a>

  </div>
</div>
  </body>
  <script>
    $("button").click(function () {
  $(".check-icon").hide();
  setTimeout(function () {
    $(".check-icon").show();
  }, 10);
});
  </script>
</html>
