<?php
session_start();
if ($_SESSION["verified"]) {
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Nick's Playground - Dev Home</title>
    <?php include("/dependencies.php");?>
  </head>
  <body>
    <?php include("/pieces/header.php"); ?>

    Hello world!

    <?php include("/pieces/footer.php"); ?>
  </body>
</html>

<?php
} else {
  header("Location: /verification.php?continue=" . $_SERVER["SCRIPT_NAME"]);
}
?>
