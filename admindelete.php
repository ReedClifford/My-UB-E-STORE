<?php
include "include/connect.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from booksinvent2 where  id=$id";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        header("location:admin-dashboard.php#section2");
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
