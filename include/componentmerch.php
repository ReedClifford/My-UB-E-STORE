<?php 
 function merch($merchimg,$merchname,$merchprize){
     $element = "
     <form action=\"books.php\" method=\"post\">
     <div class=\"item py-2 bg-light\">
     <div class=\"merch \">
     <a href=\"#\"><img src=\"$merchimg\" alt=\"\" class=\"img-fluid img-thumbnail\"></a>
     <div class=\"text-center \">
       <h6 class=\"fw-bold mt-2\">$merchname</h6>
       <div class=\"rating fw-4 text-warning\">
         <span><i class=\"fas fa-star\"></i></span>
         <span><i class=\"fas fa-star\"></i></span>
         <span><i class=\"fas fa-star\"></i></span>
         <span><i class=\"fas fa-star\"></i></span>
         <span><i class=\"far fa-star\"></i></span>
       </div>
       <div class=\"price py-2\">$merchprize</div>

       

     </div>
   </div>
   </div>
   </form>
     ";
     echo $element;
 }