<header class="header" style="background: #eb6f05;">

   <div class="flex">

      <a href="products.php" class="logo">taste</a>

      <nav class="navbar">
         <a href="products.php">products</a>
      </nav>

      <?php

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`")or die('qurey failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      

      <a href="cart.php" class="cart">cart <span style="color: #000;"><?php echo $row_count;  ?></span> </a>


      <nav class="navbar">
         
        
         <a href="admin.php">admin</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>