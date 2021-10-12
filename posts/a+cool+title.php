

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nick's Playground - Home</title>
    <?php include "../dependencies.php";?>
    <link href="https://mytekserver.com/student/nick913/NicksPlayground/post.css" rel="stylesheet">

<?php
$verified = false;
if (isset($_SESSION["verified"]) && ($_SESSION["verified"])) {$verified = true;}
?>

  </head>
  <body>

    <?php include "../pieces/header.php"; ?>

    <div class="main-content mode-box-shadow">

      <div id="post">
	<div id="post-title" class="title">A cool title</div>
	<br>
	<div id="post-body"><p>This is a work of art!!!!!!!!!jf adowhaio wa[doiAHW"Odlmnawbijfkba'odja'okldhwnaoidkhawoudhawjdnwa</p></div>
	<br>
	<div id="post-footnote">This was an asesome aricle and you wlcwadj it!!eDAw d</div>
	tags for this post: <i>
	<div id="post-tags">a b c, twelve, red, donald trump</div></i>
      </div>

    </div>

    <div id="comment-section">
	Leave a comment!
    </div>

    <?php include("../pieces/footer.php");?>

</body>
<style>

</style>
<script>

</script>
</html>
