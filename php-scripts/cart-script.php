<?php

include '../include/connect.php';
session_start();


if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
        $book_item_id = array_column($_SESSION['cart'], "book_id");


        if (in_array($_POST['book_id'], $book_item_id)) {


            echo "<script>alert('Product is already in the cart!!')</script>";
            echo "<script>window.location = 'books.php'</script>";
        } else {
            # code...
            $count = count($_SESSION['cart']);
            $book_array = array(
                'book_id' => $_POST['book_id']
            );
            $_SESSION['cart'][$count] = $book_array;
        }
        # code...
    } else {
        $cart_item = array(
            'book_id' => $_POST['book_id'],
            'book_name' => $_POST['book_name'],
            'book_price' => $_POST['book_prize'],
            'book_img' => $_POST['book_img'],
            'product_qty' => $_POST['product_qty']




        );

        $bookid = $cart_item['book_id'];
        $bookname = $cart_item['book_name'];
        $bookprize = $cart_item['book_price'];
        $bookimg = $cart_item['book_img'];
        $bookqty = $cart_item['product_qty'];

        $sql = "INSERT into cart (book_id,name,price,img,qty) 
        values('$bookid','$bookname','$bookprize','$bookimg','$bookqty')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header("location:../books.php");

            # code...
        } else {
            # code...
            die(mysqli_error($connect));
        }
    }
}
