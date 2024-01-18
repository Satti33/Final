<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CRUD Application</title>
</head>
<body>

<div class="container mt-5">
    <h2>Users</h2>
    <a href="create.php" class="btn btn-success mb-3">Add User</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>RollNo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
               
                $result = $conn->query("SELECT * FROM user");
                if ($result === false) {
                    echo "Error: " . $conn->error;
                }
                else {

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['rollno']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                          </tr>";
                }
            }

                $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
