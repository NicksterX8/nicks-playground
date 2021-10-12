<?php
session_start();
if (isset($_SESSION["verified"]) && ($_SESSION["verified"])) {
$verified = true;
} else {
$verified = false;
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mode-box-shadow">  
  <div class="container-fluid">
    <a class="navbar-brand" href="https://mytekserver.com/student/nick913/NicksPlayground/">Nick's Playground</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Subjects
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Programming#</a></li>
            <li><a class="dropdown-item" href="#">Gaming#</a></li>
            
            <li><a class="dropdown-item" href="#">Reading#</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All Posts</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="https://mytekserver.com/student/nick913/NicksPlayground/about.php">About</a>
	</li>

	<?php
	  if ($verified) {
	?>
        <li class="nav-item dev me-4">
          <a class="nav-link" href="https://mytekserver.com/student/nick913/NicksPlayground/dev">Dev</a>
	</li>
	<?php } ?>
      </ul>
      
        <script>
            //starts as light-mode    
document.body.classList.toggle("light-mode")
function toggleDarkModeButtonClicked() {
  let modeButton = document.getElementById("styleModeToggler")
  //toggle modes
  document.body.classList.toggle("dark-mode")
    document.body.classList.toggle("light-mode")
  //toggle button text
  if (modeButton.innerHTML == "Dark Mode") {
    modeButton.innerHTML = "Light Mode"
  } else {
    modeButton.innerHTML = "Dark Mode"
  }
}
          </script>
        <button class="btn btn-outline-light me-3" id="styleModeToggler" onclick="javascript:toggleDarkModeButtonClicked()" type="toggle">Dark Mode</button>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search entries" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
