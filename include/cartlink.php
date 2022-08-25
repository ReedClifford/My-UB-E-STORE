<form action="#" class="">
  <a class="nav-link rounded-pill bg-dark " href="cart.php">
    <span class="px-2 text-white">
      <i class="fas fa-shopping-cart"></i><?php echo $_SESSION['name'] ?>
      <?php
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
        echo "<span class=\"px-3 py-2 rounded-pill text-dark bg-light\">$count</span>";
      } else {
        # code...
        echo "<span class=\"px-3 py-2 rounded-pill text-dark bg-light\">0</span>";
      }

      ?>
    </span>
  </a>
</form>