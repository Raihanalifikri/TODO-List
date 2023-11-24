<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todo List</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #3F2E3E;
    }

    .text-center {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: white;
    }
    h2{
      color: white;
    }
  </style>
</head>

<body>
<header class="header">
        <h2 alt="logo" class="logo">TODO LIST</h2>
        <i class="bx bx-menu-alt-left" id="menu-icon" style="color: rgb(7, 7, 7);"></i>

        <nav class="navbar">
            <a href="https://raihanalifikri.github.io/gravity.github.io/">Gravity Falls</a>
            <a href=" https://raihanalifikri.github.io/Portofolio2/">Portofolio</a>
            <a href=" https://raihanalifikri.github.io/Musilm-Web/">Muslim Web</a>
        </nav>
        <div class="tombol">
            <button class="user">user</button>
        </div>
    </header>
    
  <form action="insert.php" method="post">
    <div class="container">
      <h2 class="row justify-content-center bg-dark m-auto shadow py-3 col-md-6 rounded-4">
        <div class="text-center  fs-1 ">TODO LIST</div>
        <div class="col-8">
          <input type="text" name="list" class="form-control shadow" required placeholder="What You Want To Do ?">
        </div>
        <div class="col-2">
          <button class="btn btn-success"><i class="fa-duotone fa-plus"></i></button>
        </div>
      </h2>
    </div>
  </form>

  <!-- Get data from localhost -->
  <?php

  include "config.php";

  $sql = mysqli_query($con, "SELECT * FROM `tabletodo`");
  $i = 1;
  ?>

  <!-- Tampilkan data -->
  <div class="wrapper">
    <?php
    while ($row = mysqli_fetch_array($sql)) {
    ?>

      <div class="box">
        <div class="number tetx-white"><?php echo $i++ ?></div>
        <div class="bulat"></div>
        <div class="list"><?php echo $row["List"] ?></div>
        <div class="bottom">
          <div class="update"><a href="halaman-update.php? ID=<?php echo $row['ID'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square">Edit</i></a></div>
          <div class="delete"><a href="delete.php? ID=<?php echo $row['ID'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can i">Delete</i></a></div>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>