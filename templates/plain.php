<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nick's Playground - Home</title>
    <?php include "dependencies.php";?>

<?php 
$verified = false;
if (isset($_SESSION["verified"]) && ($_SESSION["verified"])) {$verified = true;}
?>

  </head>
  <body>
    
    <?php include "pieces/header.php"; ?>

    <div class="main-content mode-box-shadow">
      
      <div class="article">
        <p>
          This is the start of a new page!!!
        </p>
      </div>
      
    </div>

    <?php include("pieces/footer.php");?> 

</body>
<style>

</style>
<script>

</script>
</html>
