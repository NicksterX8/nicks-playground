<?php
session_start();
$hashedkey = '$2y$10$G9V8gdm0XregzKXZ1nTUcuu/aZ5g0vb92/tIcWGUIn9VIx3i.GneC';
# Create a hash for a password with hashgenerator.php; in this case, I used "test1234"
if (isset($_SESSION["verified"]) && $_SESSION["verified"]) {
  header("Location: /index.php");
  # Check if a user has been previously verified first, in order to redirect them as quickly as possible.
}

if (isset($_POST["key"])) {
  $key = trim($_POST["key"]);
  $verifiedpassword = password_verify(
    base64_encode(
      hash("sha256", $key, true)
    ),
    $hashedkey
  );
  # Sanitized input to make it easier the enter in the password; it is very easy to strengthen these restrictions, or lessen them.
  if ($verifiedpassword) {
    $_SESSION["verified"] = true;
    $whitelistrelative = ["testIndex.php", "/dev/new.php"];
    $whitelist = [];
    foreach ($whitelistrelative as $link) {
	array_push($whitelist, "/student/nick913/NicksPlayground/{$link}");
    }
    # Add any other pages you wish to be accessible through the continue param.
    echo $_GET["continue"];
    $nextpage = $_GET["continue"];
    $info = $nextpage;  
    if (strpos($nextpage, "/dev/") !== false) {
	header("Location: $nextpage");
    }
    elseif (isset($nextpage) && in_array($nextpage, $whitelist)) {
      header("Location: $nextpage");
    } else {
	    header("Location: https://mytekserver.com/student/nick913/NicksPlayground/index.php?continue={$info}");
    }
  } else {
    $error = "That key is invalid!";
  }
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Nick's Playground - Verify</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<?php
include("dependencies.php");
?>
    <link rel="stylesheet" href="verification.css">
  </head>
  <body>
	<?php
include("pieces/header.php");
?>
    <div class="title">Verify to Continue</div>
    <div class="verify">
    This is a developer only part of the website<br>
    <button type="button" class="btn btn-success" onclick="javascript:history.back()">Go Back</button>
    <form action="verification.php<?php if (isset($_GET["continue"])) echo "?continue=" . htmlentities($_GET["continue"]); ?>" method="post" autocomplete="off">
      <input type="password" name="key" id="key" placeholder="Key">
      <input class ="btn btn-secondary" type="submit" value="Verify" id="formSubmitButton">
    </form>
<?php if (isset($error)) echo "    <p>$error</p>\n"; ?>
    </div>
  </body>
  <style>
    .verify .btn {
	margin: 5px;
    }
    #formSubmitButton {
	padding: 3px;
    }
  </style>
</html>
