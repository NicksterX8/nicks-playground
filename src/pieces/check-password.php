<html>
  <body>
    <?php
if ($_POST["password"] != 645342) {
	?>
	<h2>fail!, try again?<a href="javascript:history.back()">Try Again</a>
 </h2>
	<?php
	} else {
	setcookie("signed-in", "true", time() + (86400 * 30), "/");
        ?>
	  <h2>success, the pass was indeed <?php echo $_POST["password"];?></h2>
        <?php
	}
	?>
  </body>
</html>
