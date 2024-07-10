<?php
//file write
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "haris\n";
fwrite($myfile, $txt);
$txt = "anus\n";
fwrite($myfile, $txt);
fclose($myfile);

//append txt
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);

//file read
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);


?>


//creat session
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "black";
$_SESSION["favanimal"] = "T rex";
echo "Session variables are set.";
?>

</body>
</html>


//print session
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>

//destroy session
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>