<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/pembelajaran inr/pertemuan 10/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/pembelajaran inr/pertemuan 10/user.php">user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pembelajaran inr/pertemuan 10/posts.php">posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pembelajaran inr/pertemuan 10/student.php">student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pembelajaran inr/pertemuan 10/organization.php">organizations</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content">
    
    <?php
    require "koneksi.php"
    ?>
    <?php $users = $koneksi->query("SELECT * FROM users");?>
    <h1>user list</h1>
    <table class="table" >
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php $count = 1;?>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $count;?> </td>
                <td><?= $user['username'];?> </td>
                <td><?= $user['email'];?> </td>
                <td><?php
                if ($user['gender'] === "male") : ?> 
                    L
                <?php else : ?>
                    p
                <?php endif ?>
                </td>
            </tr>
            <?php
            $count++;
            endforeach; ?>
    </table>


</body>
</html>