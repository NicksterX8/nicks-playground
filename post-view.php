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
      
      <div id="post">
	<div id="post-title"></div>
	<div id="post-body"></div>
	<div id="post-footnote"></div>
<?php echo $body; ?>
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

