<?php
include('db_connect.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Student</h2>
<form method="POST" action="">
  <label>Name:</label><br>
  <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>

  <label>Grade:</label><br>
  <input type="text" name="grade" value="<?php echo $row['grade']; ?>" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

  <label>Phone:</label><br>
  <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

  <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $grade = $_POST['grade'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "UPDATE students 
          SET name='$name', grade='$grade', email='$email', phone='$phone' 
          WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    echo "<p>Student updated successfully!</p>";
  } else {
    echo "Error updating: " . mysqli_error($conn);
  }
}
?>
