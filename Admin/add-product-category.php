<!DOCTYPE html>
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
    <?php
    ?>
    <div class="layout-container">
      <aside class="sidebar">
        <h2>Logo</h2>
        <ul class="sidebar-nav">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown">
            <div class="flex justify-between">
              Product <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-product.php">View Product</a></li>
              <li><a href="add-product.php">Add Product</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class="flex justify-between">
              Product Category <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li>
                <a href="view-product-category.php">View Product Category</a>
              </li>
              <li>
                <a href="add-product-category.php">Add Product Category</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <div class="flex justify-between">
              Blog <i class="fa fa-angle-down fa-1x"></i>
            </div>
            <ul class="dropdown-menu d-none">
              <li><a href="view-blog.php">View Blog</a></li>
              <li><a href="add-blog.php">Add Blog</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <div class="flex justify-between">
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
            <i class="fa fa-user fa-2x"></i>
            <i class="fa fa-sign-out fa-2x"></i>
          </div>
        </div>
        <div class="add-form">
          <h3 class="heading">Add/Edit Product Category</h3>
          <div class="form-container">
            <form action="" onsubmit="return validateCate()">
              <div class="form-input">
                <label for="category-name">Category Name</label>
                <input type="text" name="name" id="category-name" />
                <p class="error" id="categoryErr"></p>
              </div>
              <button type="submit" class="btn-submit">Submit</button>
            </form>
          </div>
        </div>
      </main>
    </div>
    <script src="admin-script.js">
    </script>
  </body>
</html>