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
<input type="text" id="year" name="year" value="<?php echo $year;?>">
<?php echo $yearErrMsg;?>
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration" value="<?php echo $duration;?>">
<?php echo $durationErrMsg;?>
</div>
<div>
<fieldset>
  <!-- Really this list of certificates should have been dynamically generated from the certificates tables see https://github.com/CIT2202/pdo-related-data-crud/blob/master/cities/create.php for a similar example -->
  <legend>Select a certificate</legend>

  <!-- We need to automatically select the radio button is they selected previously. This is what this little bit of PHP code does -->
  <label for="U"><input type="radio" name="certificate" id="U" value="1" <?php if($certId === "1") { echo "checked";} ?>>U</label>
  <label for="PG"><input type="radio" name="certificate" id="PG" value="2" <?php if($certId === "2") { echo "checked";} ?>>PG</label>
  <label for="12A"><input type="radio" name="certificate" id="12A" value="3" <?php if($certId === "3") { echo "checked";} ?>>12A</label>
  <label for="15"><input type="radio" name="certificate" id="15" value="4" <?php if($certId === "4") { echo "checked";} ?>>15</label>
  <label for="18"><input type="radio" name="certificate" id="18" value="5" <?php if($certId === "5") { echo "checked";} ?>>18</label>
</fieldset>
<?php echo $certErrMsg;?>
</div>
<input type="submit" name="submitBtn" value="Add Film">
</form>

</body>
</html>
