

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
	<div id="post-title" class="title">A b c d e</div>
	<br>
	<div id="post-body"><p>booooooooooooody</p></div>
	<br>
	<div id="post-footnote">the footnote</div>
	tags for this post: <i>
	<div id="post-tags">a tag, another tag</div></i>
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
