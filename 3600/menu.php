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
          <a class="brand" href="#">CS 3600</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <? is_active($page, "home"); ?>><a href="index.php">Home</a></li>
              <li><a href="http://piazza.com/gatech/summer2014/cs3600a/home">Piazza</a></li>
              <li <? is_active($page, "schedule"); ?>><a href="schedule.php">Schedule</a></li>
              <li <? is_active($page, "reading"); ?>><a href="reading.php">Reading</a></li>
              <li <? is_active($page, "projects"); ?>><a href="projects.php">Projects</a></li>
              <li <? is_active($page, "history"); ?>><a href="history.php">History of AI</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<?php
}
?>
