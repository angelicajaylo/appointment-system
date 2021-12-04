<?php

include_once "config.php";

$sql = "INSERT INTO appointment (appointment_subject, appointment_place, appointee)
            VALUES('$_POST[appointment_subject]', '$_POST[appointment_place]','$_POST[appointee]')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: index.php");
} else {
    echo mysqli_errno($conn);
}
