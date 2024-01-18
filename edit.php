<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit User</title>
</head>
<body>

<div class="container mt-5">
    <h2>Edit User</h2>

    <?php
    include 'db.php';

    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM user WHERE id = $id");
    $row = $result->fetch_assoc();

    $conn->close();
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="rollno">RollNo:</label>
            <input type="text" class="form-control" id="rollno" name="rollno" value="<?php echo $row['rollno']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>

</body>
</html>
