<?php
// Model
function getConnection(){
	try{
       $conn = new PDO('mysql:host=localhost;dbname=cit2202', 'cit2202', 'letmein');
			 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $exception)
	{
		echo "Oh no, there was a problem" . $exception->getMessage();
	}
	return $conn;
}
function closeConnection($conn)
{
	$conn=null;
}

function saveFilm($title, $year, $duration, $certId){
	$conn = getConnection();
	$query="INSERT INTO films (id, title, year, duration, certificate_id) VALUES (NULL, :title, :year, :duration, :certId)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':title', $title);
	$stmt->bindValue(':year', $year);
	$stmt->bindValue(':duration', $duration);
	$stmt->bindValue(':certId', $certId);
	$stmt->execute();
	closeConnection($conn);
}





?>
