<?php
function convertToHTML($text) {
	$paragraphs = preg_split("/\n/", $text);
	$htmlParas = "";

	$breaks = preg_split("/\n\n/", $text);

		/*
	for ($i = 0; $i < count($text); $i++) {
		
	}
		 */

	foreach ($paragraphs as $paragraph) {
		if ( $paragraph == "") {
		//two line breaks in a row, make a break
			$htmlParas = $htmlParas . "<br>";

		} else {
			$htmlParas = $htmlParas . "<p>" . $paragraph . "</p>";	
		}
	}
	return $htmlParas;
}

$titleURL = urlencode(strtolower($_POST["title"]));
$title = $_POST["title"];

$body = convertToHTML($_POST["body"]);

$footnote = $_POST["footnote"];
$tags = $_POST["tags"];

$post_file = fopen("src/posts/" . $titleURL . ".php", "w+"); 

$page = '

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nick\'s Playground - Home</title>
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
	<div id="post-title" class="title">' . "{$title}" . '</div>
	<br>
	<div id="post-body">' . "{$body}" . '</div>
	<br>
	<div id="post-footnote">' . "{$footnote}" . '</div>
	tags for this post: <i>
	<div id="post-tags">' . "{$tags}" . '</div></i>
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
';


fwrite($post_file, $page);

fclose($post_file);

/* Also write a plain text file to texts */
$text_file = fopen("src/texts/" . $title . ".txt", "w+"); 
$text = "@TITLE: " . $title . "\n" .
	"@DESCRIPTION: " . $_POST["description"] . "\n" .
	"@TAGS: \"" . $tags . "\"\n" .
	"@BODY:\n" . $_POST["body"] . "\n" .
	"@FOOTNOTE: " . $_POST["footnote"] . "\n";
fwrite($text_file, $text);
fclose($text_file);
header("Location: src/posts/" . $titleURL . ".php");
?>
