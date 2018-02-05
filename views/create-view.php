<!DOCTYPE HTML>
<html>
<head>
<title>Add new film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<h1>Add a new film</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<div>
<label for="title">Title:</label>
<input type="text" id="title" name="title" value="<?php echo $title;?>">
<?php echo $titleErrMsg;?>
</div>
<div>
<label for="year">Year:</label>
<input type="text" id="year" name="year">
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration">
</div>
<input type="submit" name="submitBtn" value="Add Film">
</form>

</body>
</html>
