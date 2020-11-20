<html>

<head>
  <title>DATABASE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, '63070039itflab02.mysql.database.azure.com', 'chutima@63070039itflab02', 'Fah931755', 'ITFLab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <div class="container mt-5">
    <div class="card-header bg-info text-white d-flex justify-content-between">
      <h3>Home</h4>
       <a href="form.php" class="btn btn-warning">Add</a>
    </div>
    <div class="card-body">
      <div class="container">
        <h2>Dark Striped Table</h2>
        <p>Combine .table-dark and .table-striped to create a dark, striped table:
      </p>            
        <table class="table table-dark table-striped">
    </table>
          </thead>
          <tbody>
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
              <tr>
                <td><?php echo $Result['Name']; ?></td>
                <td><?php echo $Result['Comment']; ?></td>
                <td><?php echo $Result['Link']; ?></td>
                <td>
                  <a class="btn btn-light" href="edit.php?ID=<?php echo $Result['ID']; ?>">Edit</a>
                  <a class="btn btn-dark" href="delete.php?ID=<?php echo $Result['ID']; ?>">Delete</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
          </div>
       </div>
      </table>


  <?php
  mysqli_close($conn);
  ?>
</body>

</html>
