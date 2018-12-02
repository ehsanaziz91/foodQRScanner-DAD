<?php
include('conscanner.php'); 

$contents=$_POST["sdata"];
$masuk=explode(":", $contents);

$sql = mysqli_query($conn, "INSERT INTO item (nama, harga, brand, tempatbuat) VALUES ('$masuk[0]', '$masuk[1]', '$masuk[2]', '$masuk[3]')");


if ($sql){
	echo "Successful!!!";
}else {
	echo "Not insert";
}						
?>