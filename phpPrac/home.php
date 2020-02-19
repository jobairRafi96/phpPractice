
<?php
		$student = 	[
				's1'=>[ 'id'=>'10-11-1', 'name'=>'ABC',  'cgpa'=>3.7 ],
				's2'=>[ 'id'=>'222345', 'name'=>'XYZ',  'cgpa'=>3.4 ],
				's3'=>[ 'id'=>'333567', 'name'=>'CCC',  'cgpa'=>3.6 ]
				];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>CGPA</td>
			</tr>

			<?php  foreach ($student as $s) { ?>

			<tr>
				<td><?= $s['id'] ?></td>
				<td><?= $s['name'] ?></td>
				<td><?= $s['cgpa']?></td>
			</tr>

			<?php	} ?>

		</table>
</body>
</html>