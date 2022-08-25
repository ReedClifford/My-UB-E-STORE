<?php 
    function cartElement($item_img,$item_name,$item_price,$item_qty,$item_id){

        $elementcart = "
        <form action=\"cart.php?action=remove&id=$item_id\" method =\"post\" class = \"cart-items\">
        <div class=\"border-rounded my-4\">
            <div class=\"row bg-white border shadow p-3 mb-5 bg-body rounded\">
                <div class=\"col-lg-5\">
                    <img src=\"$item_img\" alt=\"\" class=\"img-fluid img-thumbnail my-2\">
                </div>
                <div class=\"col-lg-7 mb-5 text-center\">
                    <h5 class=\"pt-5 fw-bolder fs-5\">$item_name</h5>
                    <small class =\"text-secondary\">Item Id:$item_id</small>
                    <br>
                    <small class =\"text-secondary\">Seller:My-Ub-E-Store</small>
                    <h5 class=\"pt-2\">Php $item_price</h5>
                    <h5 class=\"pt-2\"> $item_qty on stock</h5>
                   
                    <button type = \"submit\" class = \"btn btn-danger w-50 mt-3\" name=\"remove\">Remove</button>
                </div>

            </div>
        </div>
    </form>
        
        ";
        echo $elementcart;
    }
    function cartElement2($item_img,$item_name,$item_price,$item_qty,$item_id){

        $elementcart = "
        <form action=\"cart.php?action=remove&id=$item_id\" method =\"post\" class = \"cart-items\">
        <div class=\"border-rounded my-4\">
            <div class=\"row bg-white border shadow p-3 mb-5 bg-body rounded\">
                <div class=\"col-lg-5\">
                    <img src=\"$item_img\" alt=\"\" class=\"img-fluid img-thumbnail my-2\">
                </div>
                <div class=\"col-lg-7 mb-5 text-center\">
                    <h5 class=\"pt-5 fw-bolder fs-5\">$item_name</h5>
                    <small class =\"text-secondary\">Item Id:$item_id</small>
                    <br>


                    <small class =\"text-secondary\">Seller:My-Ub-E-Store</small>
                    
                    <h5 class=\"pt-2\">Php $item_price</h5>
                    <h5 class=\"pt-2\"> $item_qty on stock</h5>
                   
                    <button type = \"submit\" class = \"btn btn-danger w-50 mt-3\" name=\"remove2\">Remove</button>
                </div>

            </div>
        </div>
    </form>
        
        ";
        echo $elementcart;
    }

//     <select class=\"form-select w-50 mx-auto\" aria-label=\"Default select example\">
//     <option selected>Select Size</option>
//     <option value=\"S\">Small</option>
//     <option value=\"M\">Medium</option>
//     <option value=\"L\">Large</option>
// </select>





   

   
    


//     <div class=\"col-md-3 py-5 \">
//     <div>
//         <button type=\"button\" class =\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
//         <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
//         <button type=\"button\" class =\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
//     </div>
// </div>
   






