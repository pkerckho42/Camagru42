<?php
$db_conx = mysqli_connect("localhost", "root", "root", "camagru_pkerckho");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
	/*echo "Successful database connection";*/
}
?>
