<?php include('db_connect.php'); ?>

<h2>Student List</h2>
<a href="add_student.php">+ Add New Student</a><br><br>

<table border="1" cellpadding="8">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Grade</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Actions</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['name']}</td>
          <td>{$row['grade']}</td>
          <td>{$row['email']}</td>
          <td>{$row['phone']}</td>
          <td>
            <a href='edit_student.php?id={$row['id']}'>Edit</a> |
            <a href='delete_student.php?id={$row['id']}'>Delete</a>
          </td>
        </tr>";
}
?>
</table>
