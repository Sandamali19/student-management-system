<?php include('db_connect.php'); ?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="style.css">

<div class="container">
  <h2>Add New Student</h2>
  <form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Grade:</label>
    <input type="text" name="grade" required>

    <label>Email:</label>
    <input type="email" name="email">

    <label>Phone:</label>
    <input type="text" name="phone">

    <input type="submit" name="save" value="Save Student">
  </form>

  <br>
  <a href="view_students.php">← Back to Student List</a>

  <?php
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, grade, email, phone)
            VALUES ('$name', '$grade', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
      echo "<p style='color:green;'>✔ Student added successfully!</p>";
    } else {
      echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
  }
  ?>
</div>
