<?php

$conn = mysqli_connect("localhost", "root", "", "appointmen-system_db");

$sql = "SELECT * FROM appointment";

$result = mysqli_query($conn, $sql);

$account = mysqli_fetch_all($result, MYSQLI_ASSOC);
