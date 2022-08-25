<?php
include "include/connect.php";
if (isset($_GET['deleteid2'])) {
    $id = $_GET['deleteid2'];

    $sql = "DELETE from engii2 where  id=$id";
    $sql2 = "DELETE from booksinvent2 where  id=$id";

    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql2);
    if ($result && $result2) {
        
       
        echo "<script>alert('Deleted Succesfuly')</script>";
        echo "<script>window.location = 'admin-dashboard2.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
