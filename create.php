<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add User</title>
</head>
<body>

<div class="container mt-5">
    <h2>Add User</h2>
    <form action="insert.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="rollno">Rollno:</label>
            <input type="text" class="form-control" id="rollno" name="rollno" required>
        </div>
        <button type="submit" class="btn btn-success">Add User</button>
    </form>
</div>

</body>
</html>
