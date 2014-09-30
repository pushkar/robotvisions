<?php
function is_active($p1, $p2) {
    if(strcmp ($p1, $p2) == 0) {
        echo "class=\"active\"";
    } 
}
?>
<?php
$menu = TRUE;
if(isset($_GET['nomenu'])) {
   $menu = FALSE;
}
if($menu) {
?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">CS 4641</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <? is_active($page, "home"); ?>><a href="index.php">Home</a></li>
              <li><a href="http://piazza.com/gatech/summer2013/cs4641/home">Piazza</a></li>
              <li <? is_active($page, "schedule"); ?>><a href="schedule.php">Schedule</a></li>
              <li <? is_active($page, "reading"); ?>><a href="reading.php">Reading</a></li>
              <li <? is_active($page, "resources"); ?>><a href="resources.php">Resources</a></li>
              <li <? is_active($page, "assignment1"); ?>><a href="assignment1.php">Assignment 1</a></li>
              <li <? is_active($page, "assignment2"); ?>><a href="assignment2/">Assignment 2</a></li>
              <li <? is_active($page, "projects"); ?>><a href="projects.php">Projects</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
<?php
}
?>
