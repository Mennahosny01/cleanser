<?php
require_once("db.php");
$id=$_GET ['id'];
$query="select* from login where id=?";
$old_data=getdata($query,[$id]);






?>





<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      direction: ltr;         
  text-align: left;      


    }

    .form-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    .radio-group {
      margin-bottom: 15px;
    }

    .radio-group label {
      font-weight: normal;
      margin-left: 10px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color:rgb(107, 17, 97);
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color::rgb(107, 17, 97);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>  Edit account </h2>
<form method="POST" action="update.php">
  <div>
<input name="id" value="<?php echo $login[0]['id'] ?>" hidden>
  </div>


      <label for="name">name</label>
      <input type="text"  id="name" name="name" value="<?php echo $login [0]['name']?>" required>

       <label for="email">email</label>
      <input type="text"  id="email" name="email" value="<?php echo $login [0]['email']?>" required>


      <label for="Password">Password</label>
      <input type="number"  id="Password" name="Password" value="<?php echo $login[0]['Password']?>" required>
 
        <label for="img">IMG</label>
      <input type="file"  id="img" name="img" value="<?php echo $login[0]['img']?>" required>
      
     

      <button type="submit">Done</button>
    </form>
  </div>
</body>
</html>
