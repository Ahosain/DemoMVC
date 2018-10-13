<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../view/css/view_style.css">

</head>
<body>
<h1>Welcome</h1>

<?php
  if($data == -1) echo 'No Result Found';
  else {
?>
	<table>
      <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Semester</th>
      </tr>
      <tr>
        <td><?php echo $data["name"] ?></td>
        <td><?php echo $data["roll"] ?></td>
        <td><?php echo $data["semester"] ?></td>
      </tr>
    </table>
<?php } ?>
</body>
</html>