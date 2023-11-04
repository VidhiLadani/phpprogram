<html>
<head>
<title>input two variables</title>
</head>
<body>
<center><lable>Name</lable></center>
<center><input type="text" name=" name" ></center>
<center><lable>E-mail</lable></center>
<center><input type="text" name="email" ></center>
<center><input type="submit" value="submit"></center>
</body>
</html>

<?php
$name="";
$email="";
$name=isset($_GET[ 'Name'])?$_GET['name']:' ';
$email=isset($_GET[ 'email'])?$_GET['email']:' ';
