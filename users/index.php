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
</tr>

<? } ?>
</table>


</div>

</body>
</html>

