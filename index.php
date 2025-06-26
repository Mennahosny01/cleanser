<?php
require_once('db.php');
$query="select * from login";
$data=getdata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">

  

   
    <form action="form.php">
      <button class="btn btn-success">+ Add email</button>
    </form>
  </div>

 
  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle text-center bg-white shadow-sm">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>password</th>
          <th>img</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data as $login): ?>
        <tr>
          <td><?= $login['id'] ?></td>
          <td><?= $login['name'] ?></td>
          <td><?= $login['email'] ?></td>
          <td><?= $login['password'] ?></td>
           <td><?= $login['img'] ?></td>
          
          <td>
            <a href="delete.php?id=<?= $login['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
          </td>
          <td>
            <a href="edit.php?id=<?= $login['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
