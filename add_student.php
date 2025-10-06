<?php include('db_connect.php'); ?>

<h2>Add New Student</h2>
<form method="POST" action="">
  <label>Name:</label><br>
  <input type="text" name="name" required><br><br>

  <label>Grade:</label><br>
  <input type="text" name="grade" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email"><br><br>

  <label>Phone:</label><br>
  <input type="text" name="phone"><br><br>

  <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $grade = $_POST['grade'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO students (name, grade, email, phone)
          VALUES ('$name', '$grade', '$email', '$phone')";

  if (mysqli_query($conn, $sql)) {
    echo "<p>Student added successfully!</p>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
