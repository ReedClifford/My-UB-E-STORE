<?php
include "include/connect.php";
if (isset($_GET['deleteid18'])) {
    $id = $_GET['deleteid18'];

    $sql = "DELETE from g7 where  id=$id";
    $sql2 = "DELETE from booksinvent2 where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-dashboard18.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
