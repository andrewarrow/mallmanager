<html>
<body>

<div style="padding: 10px; font-family: sans-serif; font-size: 18px;">

<p><a href="/index.php">Mall Manager v1.0</a>: List Users</p>


<table>
<? 
    $conn = mysqli_connect("localhost", "root", "root", "mallmanager");
    $query = mysqli_query($conn, "select * from users");
    while ($row = mysqli_fetch_array($query)) {
?> 

<tr>
<td><?= $row['store'] ?></td><td><td>
<td><?= $row['floornumber'] ?></td>
<td><a href="xuser.php?id=<?= $row['id'] ?>">x</a></td>
</tr>

<? } ?>
</table>

<hr/>

Add New User:
<br/>
<form method="POST" action="adduser.php">
Store: <input type="text" name="store"/>
Floor Number: <input type="text" name="floornumber"/>
<br/>
<input type="submit"/>
</form>

</div>

</body>
</html>

