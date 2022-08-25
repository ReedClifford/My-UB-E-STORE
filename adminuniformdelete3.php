<?php
include "include/connect.php";
if (isset($_GET['deleteuniid3'])) {
    $id = $_GET['deleteuniid3'];

    $sql = "DELETE from uniforminvent where  id=$id";
    $sql2 = "DELETE from shsuniform where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-uniform3.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
