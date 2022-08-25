<?php
include "include/connect.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from delivery_info2 where  id=$id";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('On Delivery')</script>";
        echo "<script>window.location = 'deliverydetails.php#section2'</script>";
    } else {
        die(mysqli_error($connect));
    }
    # code...
}
