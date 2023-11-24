<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  <style>
    .text-center {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: white;
    }

    body{
      background-color: #4F4557;
    }
  </style>
</head>

<!-- Get data -->
<?php

$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabletodo` WHERE `ID` = '$id'");
$data = mysqli_fetch_array($sql);

?>




<body>
<form action="update.php" method="post">
    <div class="container">
      <h2 class="row justify-content-center bg-dark m-auto shadow mt-3 py-3 col-md-6 rounded-4">
        <div class="text-center  fs-1">UPDATE LIST</div>
        <div class="col-8">
          <input type="text" value="<?php echo $data['List'] ?>" name="list" class="form-control shadow">
        </div>
        <div class="col-2">
          <button class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></button>
          <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
        </div>
      </h2>
    </div>
  </form>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>