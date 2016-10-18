<? 
$conn = mysqli_connect("localhost", "root", "root", "mallmanager");
$query = mysqli_query($conn, "INSERT INTO users (store, floornumber) values ('" . $_POST['store'] . 
                             "','" . $_POST['floornumber'] . "')");
Header('Location: /users'); 
?> 

