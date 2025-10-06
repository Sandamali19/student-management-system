<?php
include('db_connect.php');
include('header.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="style.css">

<div class="container">
  <h2>Edit Student</h2>
  <form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

    <label>Grade:</label>
    <input type="text" name="grade" value="<?php echo $row['grade']; ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>">

    <label>Phone:</label>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>">

    <input type="submit" name="update" value="Update Student">
  </form>
  <br>
  <a href="view_students.php">← Back to Student List</a>

<?php
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $grade = $_POST['grade'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "UPDATE students SET name='$name', grade='$grade', email='$email', phone='$phone' WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green;'>✔ Student updated successfully!</p>";
  } else {
    echo "<p style='color:red;'>Error updating: " . mysqli_error($conn) . "</p>";
  }
}
?>
</div>
