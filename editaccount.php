
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>update Account</title>
</head>
<body>
  <h1>update Account</h1>
  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br>

    <button type="submit">update Account</button>
  </form>
</body>
</html>

