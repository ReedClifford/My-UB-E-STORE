<?php

function component($bookname, $bookprice, $bookimg,$bookqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"books.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$bookimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$bookname</h5>
            <p class=\"card-text\">Book Id: $itemid</p>
            <p class=\"card-text\">Php $bookprice</p>
            
            <p class=\"card-text\">$bookqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"book_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"book_name\" value=\"$bookname\">
            <input type=\"hidden\"name=\"book_prize\" value=\"$bookprice\">
            <input type=\"hidden\"name=\"book_img\" value=\"$bookimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$bookqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component2($bookname, $bookprice, $bookimg,$bookqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"books.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$bookimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$bookname</h5>
            <p class=\"card-text\">Book Id: $itemid</p>
            <p class=\"card-text\">Php $bookprice</p>
            <p class=\"card-text\">$bookqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"book_id\" value=\"$itemid\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component3($bookname, $bookprice, $bookimg,$bookqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"books.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$bookimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$bookname</h5>
            <p class=\"card-text\">Book Id: $itemid</p>
            <p class=\"card-text\">Php $bookprice</p>
            <p class=\"card-text\">$bookqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"book_id\" value=\"$itemid\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component4($bookname, $bookprice, $bookimg,$bookqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"books.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$bookimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$bookname</h5>
            <p class=\"card-text\">Book Id: $itemid</p>
            <p class=\"card-text\">Php $bookprice</p>
            <p class=\"card-text\">$bookqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"book_id\" value=\"$itemid\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
