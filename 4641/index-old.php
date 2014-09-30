<?
$original_path = "downloads/";
$path = $original_path;
if($_GET['f'] != "") 
	$path = $_GET['f'];
?>
<html>
<head>
<meta charset="UTF-8" />
<meta name="google" value="notranslate" />
<meta http-equiv="Content-Language" content="en_US" />
<title>DART/GRIP Simulator</title> 
<link href="http://www.pushkar.name/css/css1.css" type="text/css" rel="stylesheet" />
</head>
<body>
<ul id="logmenu">
<li><a href="https://t-square.gatech.edu/portal/site/21464.201302">t-square</a></li>
</ul>
<div style="margin-left: 10px;">
<h2>Software</h2>
<ul class="navlist1">
<li><a href="http://www.cs.waikato.ac.nz/ml/index.html">WEKA (JAVA/GUI)</a></li>
<li><a href="http://scikit-learn.org/stable/">scikit-learn (Python)</a></li>
</ul>
<h2>Running WEKA in Linux</h2>
<p>You can use these instructions to use WEKA on CoC servers. First login to a server, then...</p>
<code>wget http://prdownloads.sourceforge.net/weka/weka-3-7-7.zip</code><br /><br />
<code>unzip weka-3-7-7.zip</code><br />
</p>
<p>You can run WEKA from the command line. For example to run a Decision Tree over the iris dataset use</p>
<code>java -cp ./weka.jar weka.classifiers.trees.J48 -t data/iris.arff </code></p>
<p>Additional help to run weka from the command line can also be found in their manual (below) or <a href="https://t-square.gatech.edu/portal/site/21464.201302">their wiki here</a>.</p>
<h2>Downloads</h2>
<p>If apt-get does not work you can download debian installers directly and install them.</p>
<ul class="navlist1">
<?
$dir_handle = @opendir($path) or die("Unable to open $path");
$i=1;
if($path != $original_path) {
	$npath = substr($path, 0, -1);
       $lastsl = strrpos($npath, "/");
       $npath = substr($npath, 0, $lastsl);
	echo ("<li><a href=\"videos.php?f=$npath/\">..</a></li>");
}
while ($file = readdir($dir_handle)) {
if($file == "." || $file == ".." || $file == "index.php" || $file == "query.php" || $file == "upload.php" || $file == "menu.php" || $file == "mail.php" || $file == "mailall.php" || $file == "class.phpmailer.php" || $file == "links.php" || $file == ".htaccess")
continue;
if(is_dir($path.$file)) {
	echo "<li><a href=\"videos.php?f=$path$file/\">[Folder] $file</a></li>";
}
else {
	$ext = substr(strrchr($file, "."), 1);
       $nfile = substr($file, 0, strrpos($file, "."));
       $nfile = $file; // Uncomment this to display only filename
       if(strtoupper($ext) == "JPG") {
		echo "<li><a href=\"$path$file\">[".strtoupper($ext)."] $nfile</a> | <a href=\"videos.php?f=$path&i=$path$file\">View</a></li>";
	}
 	else {
		echo "<li><a href=\"$path$file\">[".strtoupper($ext)."] $nfile</a></li>";
	}
}
$i++;
}
closedir($dir_handle);

?>
</ul>
<?
if($_GET['i'] != "") {
       echo("<a href=\"videos.php?f=$path\">Close View</a>");
	echo("<br />");
	echo("<img src = \"".$_GET['i']."\" width=\"800\"></a>");
}
?>
</div>
</body>

</html>
