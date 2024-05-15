<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <title>Crud Application</title>
</head>

<body>
  <div class="container my-5">
    <h2>List of Clients</h2>
    <a href="/myshop/create.php" role="button">New Client</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Create At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $servername = "localhost";
        $username = "behnam";
        $password = "123456";
        $database = "myshop";

        // Create a connection
        $connection = new mysqli($servername, $username, $password, $database);

        // Check the connection
        if ($connection->connect_error) {
          die("Connection Failed!" . $connection->connect_error);
        }

        // Read all row from database table
        $sql = "SELECT * FROM clients";
        $results = $connection->query($sql);

        if (!$results) {
          die("Invalid query: " . $connection->error);
        }

        // Read data of each row
        while ($row = $result->fetch_assoc()) {
          echo "
          <tr>
          <td>10</td>
          <td>Bill Gates</td>
          <td>bill.gates@microsoft.com</td>
          <td>+987654321</td>
          <td>New York, USA</td>
          <td>18/05/2022</td>
          <td>
            <a href='/' class='btn btn-primary btn-sm'>Edit</a>
            <a href='/' class='btn btn-danger btn-sm'>Delete</a>
          </td>
        </tr>
          ";
        }

        ?>

      </tbody>
    </table>
  </div>
</body>

</html>