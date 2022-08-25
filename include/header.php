<nav class="navbar navbar-expand-lg navbar-dark   bg-dark py-4 px-4">
    <div class="container-fluid">
      <a href="landing-page.php"><img src="images/ubwhitelogo.png" alt="" width="160" height="45" class="d-inline-block align-text-top" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link " href="landing-page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="books.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="uniforms.php">Uniform</a>
          </li>

          <li class="nav-item">
            <form action="#" class="">
              <a class="nav-link rounded-pill bg-dark active" href="cart.php">
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
          </li>
          <li class="nav-item">
            <a href="php-scripts/logout.php"><button class=" logoutbtn"> <i class="fas fa-sign-out-alt"></i> Logout</button></a>

          </li>
        </ul>
      </div>
    </div>
  </nav>