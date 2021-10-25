<?php
session_start();
if ($_SESSION["verified"]) {
  $verified = true;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nick's Playgrounmbowyg-dark</title>
    <?php include "../dependencies.php";?>
    <!--CSS-->
    <link href="https://mytekserver.com/student/nick913/NicksPlayground/dev/new.css" rel="stylesheet">
    <!--Other-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css">
  </head>
  <body>
    <?php include "../pieces/header.php"; ?>

    <div class="title">
        <h2>
          <p>Article Creator</p>
        </h2>
      </div> 
      <form action="post-new.php" method="post"> 
        <div class="articleEditor mode-box-shadow" id="articleEditor"> 
          <div class="text-box titleTextBox"> 
            <input type="text" name="title" placeholder="Title"> 
          </div> 
          <div class="separator"></div>
          <div class="text-box descriptionTextBox"> 
            <textarea type="text" name="description" placeholder="Description"></textarea> 
          </div> 
          <div class="separator"></div>
          <div class="text-box bodyTextBox"> 
            <textarea type="text" name="body" placeholder="What do you want to write today?" class="mode-box-shadow"></textarea>
            <div class="trumbowyg">
                <textarea id="editor"></textarea>
            </div>
          </div>         
          <div class="separator"></div>
          <div class="footing"> 
            <div class="text-box footingTextBox tagsTextBox"> 
              <textarea type="text" name="tags" placeholder="Tags"></textarea> 
            </div> 
            <div class="text-box footingTextBox footnoteTextBox"> 
              <textarea type="text" name="footnote" placeholder="Footnote"></textarea> 
            </div> 
          </div> 
	</div>
     
        <div style="border-top: 1px solid grey;"> 
          <input type="submit" class="btn btn-primary stdButton"> 
        </div>  
      </form> 

      <div class="main-content"> 
       
       
      </div> 

    <?php include("../pieces/footer.php");?> 

    <!-- Import jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
    
    <script src="trumbowyg/dist/trumbowyg.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

<!-- Import Trumbowyg -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js"></script>
</body>
<style>

</style>
<script>
 //scripts
    $('#editor').trumbowyg(); 
</script>
</html>

<?php
} else {
  header("Location: ../verification.php?continue=" . $_SERVER["SCRIPT_NAME"]);
}
?>
