<? 
$conn = mysqli_connect("localhost", "root", "root", "mallmanager");
$query = mysqli_query($conn, "DELETE FROM users WHERE id=" . $_GET['id']);
Header('Location: /users'); 
?> 

