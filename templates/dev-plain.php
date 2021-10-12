<?php
session_start();
if ($_SESSION["verified"]) {
  $verified = true;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nick's Playground - Home</title>
    <?php include "../dependencies.php";?>
    <!--CSS-->

    <!--Other-->

  </head>
  <body>
    <?php include "../pieces/header.php"; ?>


    <div class="main-content mode-box-shadow">
      
      <div class="article">
        <p>
          This is the start of a new page!!!
        </p>
      </div>
      
    </div>


    <?php include("../pieces/footer.php");?> 
</body>
<style>

</style>
<script>
 //scripts
 
</script>
</html>

<?php
} else {
  header("Location: ../verification.php?continue=" . $_SERVER["SCRIPT_NAME"]);
}
?>
