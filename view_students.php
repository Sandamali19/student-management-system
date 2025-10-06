<?php include('db_connect.php'); ?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="style.css">

<div class="container">
  <h2>Student List</h2>
  <a href="add_student.php">
    <button>+ Add New Student</button>
  </a>

  <table>
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
            <td class='actions'>
              <a href='edit_student.php?id={$row['id']}'>✏️ Edit</a> |
              <a href='delete_student.php?id={$row['id']}'>🗑️ Delete</a>
            </td>
          </tr>";
  }
  ?>
  </table>
</div>
