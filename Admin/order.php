<?php require('../session.php'); issetUsername()     ?>  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="admin-style.css" />
  </head>
  <body>
    <div class="layout-container">
      <aside class="sidebar">
        <h2>Logo</h2>
        <ul class="sidebar-nav">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown">
            <div class=" flex justify-between">
              Product <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-product.php">View Product</a></li>
              <li><a href="add-product.php">Add Product</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class=" flex justify-between">
              Product Category <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-product-category.php">View Product Category</a></li>
              <li><a href="add-product-category.php">Add Product Category</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class=" flex justify-between">
              Users<i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-product-category.php">View Users</a></li>
              <li><a href="add-product-category.php">Add Users</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class=" flex justify-between">
              Blog <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-blog.php">View Blog</a></li>
              <li><a href="add-blog.php">Add Blog</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class=" flex justify-between">
              Blog Category <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-blog-category.php">View Blog Category</a></li>
              <li><a href="add-blog-category.php">Add Blog Category</a></li>
            </ul>
          </li>
        </ul>
      </aside>
      <main class="main-section">
        <div class="top-bar flex">
          <div class="icons">
            <a href="admin-profile.php"><i class="fa fa-user fa-2x "></i></a>
            <a href = '../logout.php'><i class="fa fa-sign-out fa-2x"></i></a>
          </div>
        </div>
        <div class="view-list">
          <h3 class="heading">Order List</h3>
          <table>
              <tr>
                <th>S.N</th>
                <th>Ordered By</th>
                <th>Total Amount</th>
              </tr>
              <?php
                include '../connect.php';
                $sql = "SELECT o.*,u.username as username FROM Orders o INNER JOIN users u on u.userid = o.userid";
                $result = mysqli_query($conn,$sql);
                if($result){
                  if(mysqli_num_rows($result)>0){
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo 
                      "<tr>
                      <td>".$i."</td>
                      <td>".$row['username']."</td>
                      <td>".$row['TotalAmount']."</td>
                    </tr>";
                    $i++;
                    }
                  }else{
                    echo "<td colspan='4'>No data found</td>";
                  }
                }else{
                  echo mysqli_connect_error();
                }
              ?>
            </table>
        </div>
      </main>
    </div>
    <script src="admin-script.js"></script>
  </body>
</html>