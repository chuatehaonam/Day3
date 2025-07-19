<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accounts List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <form method="get" action="" class="mb-3">
        <label for="search">Search by Email:</label>
        <input type="text" id="search" name="search" placeholder="Enter email" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" class="form-control d-inline-block w-auto" style="margin-right:8px;">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <h4><a class="btn btn-success mb-3" href="createaccount.php">Create New</a></h4>
    <h1 class="mb-4">Accounts List</h1>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "connect.php";
        $conn = connectDb();
        $sql = "SELECT id, email, fullname, phone FROM accounts";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array(MYSQLI_NUM)) {
        ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="editaccount.php?id=<?php echo $row[0] ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row[0] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php
            }
        } else {
        ?>
            <tr>
                <td colspan="5" class="text-center text-danger">No Data Available</td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
