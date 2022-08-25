<?php

function component($uniformname, $uniformprice,$uniformimg,$uniformqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"uniformmain.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$uniformimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$uniformname</h5>
            <p class=\"card-text\">Product Id: $itemid</p>
         
            <p class=\"card-text\">Php $uniformprice</p>
            
            <p class=\"card-text\">$uniformqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"uniform_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"uniform_name\" value=\"$uniformname\">
            <input type=\"hidden\"name=\"uniform_prize\" value=\"$uniformprice\">
            <input type=\"hidden\"name=\"uniform_img\" value=\"$uniformimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$uniformqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component2($uniformname, $uniformprice,$uniformimg,$uniformqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"uniformmain.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$uniformimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$uniformname</h5>
            <p class=\"card-text\">Product Id: $itemid</p>
         
            <p class=\"card-text\">Php $uniformprice</p>
            
            <p class=\"card-text\">$uniformqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"uniform_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"uniform_name\" value=\"$uniformname\">
            <input type=\"hidden\"name=\"uniform_prize\" value=\"$uniformprice\">
            <input type=\"hidden\"name=\"uniform_img\" value=\"$uniformimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$uniformqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component3($uniformname, $uniformprice,$uniformimg,$uniformqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"uniformmain.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$uniformimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$uniformname</h5>
            <p class=\"card-text\">Product Id: $itemid</p>
         
            <p class=\"card-text\">Php $uniformprice</p>
            
            <p class=\"card-text\">$uniformqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"uniform_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"uniform_name\" value=\"$uniformname\">
            <input type=\"hidden\"name=\"uniform_prize\" value=\"$uniformprice\">
            <input type=\"hidden\"name=\"uniform_img\" value=\"$uniformimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$uniformqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component4($uniformname, $uniformprice,$uniformimg,$uniformqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"uniformmain.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$uniformimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$uniformname</h5>
            <p class=\"card-text\">Product Id: $itemid</p>
         
            <p class=\"card-text\">Php $uniformprice</p>
            
            <p class=\"card-text\">$uniformqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"uniform_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"uniform_name\" value=\"$uniformname\">
            <input type=\"hidden\"name=\"uniform_prize\" value=\"$uniformprice\">
            <input type=\"hidden\"name=\"uniform_img\" value=\"$uniformimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$uniformqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}
function component5($uniformname, $uniformprice,$uniformimg,$uniformqty,$itemid)
{

    $element = "
    <div class=\"col col-lg-3\">
    <form action=\"uniformmain.php\" method=\"post\">
        <div class=\"card bg-light my-4 shadow-lg  mb-5 bg-body rounded\" style=\"width: 18rem;\">
        <a href=\"\"><img src=\"$uniformimg\" class=\"image-fluid img-thumbnail\" alt=\"...\"></a>
        <div class=\"card-body\">
            <h5 class=\"card-title fw-bold fs-4\">$uniformname</h5>
            <p class=\"card-text\">Product Id: $itemid</p>
         
            <p class=\"card-text\">Php $uniformprice</p>
            
            <p class=\"card-text\">$uniformqty on stock</p>
            <button name=\"add\" type=\"submit\" class=\"btn btn-outline-danger fw-bold\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart</button>
            <input type=\"hidden\"name=\"uniform_id\" value=\"$itemid\">
            <input type=\"hidden\"name=\"uniform_name\" value=\"$uniformname\">
            <input type=\"hidden\"name=\"uniform_prize\" value=\"$uniformprice\">
            <input type=\"hidden\"name=\"uniform_img\" value=\"$uniformimg\">
            <input type=\"hidden\"name=\"product_qty\" value=\"$uniformqty\">
        </div>
        </div>
    </form>
    </div>
    
    ";

    echo $element;
}

