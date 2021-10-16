

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
	<div id="post-title" class="title">file ordering</div>
	<br>
	<div id="post-body"><p></p><p>$files = array();</p><p>if ($handle = opendir('.')) {</p><p>    while (false !== ($file = readdir($handle))) {</p><p>        if ($file != "." && $file != "..") {</p><p>           $files[filemtime($file)] = $file;</p><p>        }</p><p>    }</p><p>    closedir($handle);</p><p></p><p>    // sort</p><p>    ksort($files);</p><p>    // find the last modification</p><p>    $reallyLastModified = end($files);</p><p></p><p>    foreach($files as $file) {</p><p>        $lastModified = date('F d Y, H:i:s',filemtime($file));</p><p>        if(strlen($file)-strpos($file,".swf")== 4){</p><p>           if ($file == $reallyLastModified) {</p><p>             // do stuff for the real last modified file</p><p>           }</p><p>           echo "<tr><td><input type=\"checkbox\" name=\"box[]\"></td><td><a href=\"$file\" target=\"_blank\">$file</a></td><td>$lastModified</td></tr>";</p><p>        }</p><p>    }</p><p>}</p><p>?></p></div>
	<br>
	<div id="post-footnote"></div>
	tags for this post: <i>
	<div id="post-tags"></div></i>
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
