<?php
include "include/connect.php";
if (isset($_GET['deleteuniid4'])) {
    $id = $_GET['deleteuniid4'];

    $sql = "DELETE from uniforminvent where  id=$id";
    $sql2 = "DELETE from collegeuniform where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-uniform4.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
