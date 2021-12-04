<?php



include_once "config.php";


$sql = "DELETE FROM appointment WHERE appointment_id='$_POST[appointment_id]'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_error($conn);
}
