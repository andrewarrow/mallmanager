<? 
$conn = mysqli_connect("localhost", "root", "root", "mallmanager");
$query = mysqli_query($conn, "INSERT INTO users (firstname, lastname) values ('" . $_POST['firstname'] . 
                             "','" . $_POST['lastname'] . "')");
Header('Location: /index.php'); 
?> 

