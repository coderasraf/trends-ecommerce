<?php 
include 'config/db.php';
if (isset($_GET['del_id'])) {
	$del_id = base64_decode($_GET['del_id']);
	$delete = "DELETE FROM add_favourite WHERE product_id='$del_id'";
	$run_del = mysqli_query($con,$delete);
	if ($run_del) {
		header('Location:myfav.php?delsuccess');
	}
}

 ?>