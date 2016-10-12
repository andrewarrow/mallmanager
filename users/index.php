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
<td><?= $row['id'] ?>.</td>
<td><?= $row['firstname'] ?></td>
<td><?= $row['lastname'] ?></td>
<td><a href="xuser.php?id=<?= $row['id'] ?>">x</a></td>
</tr>

<? } ?>
</table>

<hr/>

Add New User:
<br/>
<form method="POST" action="adduser.php">
firstname: <input type="text" name="firstname"/>
lastname: <input type="text" name="lastname"/>
<br/>
<input type="submit"/>
</form>

</div>

</body>
</html>

