<?php

include 'config/db.php';

$id = $_GET['id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM students WHERE id=$id"
);

$row =
mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$query =
"UPDATE students
SET
name='$name',
email='$email',
course='$course'
WHERE id=$id";

mysqli_query($conn,$query);

header("Location:viewStudents.php");
}
?>

<form method="POST">

<input
type="text"
name="name"
value="<?php echo $row['name']; ?>">

<input
type="email"
name="email"
value="<?php echo $row['email']; ?>">

<input
type="text"
name="course"
value="<?php echo $row['course']; ?>">

<button name="update">
Update Student
</button>

</form>