<?php
include "include/connect.php";
if (isset($_GET['deleteuniid2'])) {
    $id = $_GET['deleteuniid2'];

    $sql = "DELETE from uniforminvent where  id=$id";
    $sql2 = "DELETE from jhsuniform where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-uniform2.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
