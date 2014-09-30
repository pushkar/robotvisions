<?php
$page = "resources";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">

<h4>Software</h4>
<?php list_other($software_list); ?>

<h4>Other</h4>
<?php list_other($other_list); ?>
</div>

<?
include "footer.php";
?>
