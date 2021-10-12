<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dev
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://mytekserver.com/student/nick913/NicksPlayground/dev">Home</a></li>
            <li><a class="dropdown-item" href="#">IDk lol</a></li>
            
            <li><a class="dropdown-item" href="#">whatever u want</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      
        <button class="btn btn-outline-light me-3" id="themeModeToggle" onclick="javascript:toggleThemeButtonClicked()" type="toggle">Dark Mode</button>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search entries" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit">Search</button>
      </form>
    </div>
  </div>  
<script>

function setTheme(name) {
	for (let i = 0; i < themes.length; i++) {
		document.body.classList.remove(themes[i] + "-mode")
	}
	
	for (let i = 0; i < themes.length; i++) {
		if (name === themes[i]) {
			theme = themes[i]
			document.body.classList.add(theme + "-mode")
			modeButton.innerHTML = `${themes[i+1][0].toUpperCase()}${themes[i+1].slice(1)}` + " Mode"
			localStorage.setItem("theme", theme)
			break
		}
	}
}

var modeButton = document.getElementById("themeModeToggle")
var themes = ["light", "dark", "light"]
var theme = localStorage.getItem("theme")
if (theme == undefined || theme == null) {
	//default to light mode
	theme = "light"
}

setTheme(theme)

function toggleThemeButtonClicked() {
	//toggle modes
	if (theme === "light") {
		setTheme("dark")
	} else {
		setTheme("light")
	}

	console.log(theme)
}
   </script>
</nav>
