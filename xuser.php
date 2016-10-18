<? 
$conn = mysqli_connect("localhost", "root", "root", "MALLMANAGER");
$query = mysqli_query($conn, "DELETE FROM users WHERE store=" . $_GET['store']);
Header('Location: /adduser.php'); 
?> 

