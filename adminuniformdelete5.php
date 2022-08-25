<?php
include "include/connect.php";
if (isset($_GET['deleteuniid5'])) {
    $id = $_GET['deleteuniid5'];

    $sql = "DELETE from uniforminvent where  id=$id";
    $sql2 = "DELETE from uniformaccesory where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-uniform5.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
