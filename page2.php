<html>
<head>
<title>Security Information</title>
</head>
<body>
		
	
<center><h1>Security Information</h1></center>
This page consists security information
<?php
$data = array(
	'User' => array(1, 2, 3, 4, 5),
	'SSN' => array('123-12-1234', '234-234-2345', '345-345-3456', '456-456-4567', '567-567-5678'),
	'E-Mail' => array(
		'user1@verizon.com',
		'user2@verizon.com',
		'user3@verizon.com',
		'user4@verizon.com',
		'user5@verizon.com',
	),
	'Address' => array(
		'add1',
		'add2',
		'add3',
		'add4',
		'add5',
	),
	'IP' => array(
		'127.0.0.1',
		'127.0.0.2',
		'127.0.0.3',
		'127.0.0.4',
		'127.0.0.5',
	)
);

$head = "";
$body = "";
foreach ($data as $key => $values) {
	$head .= "<td><strong>$key</strong></td>";
	$body .= "<tr>";
	foreach ($values as $val) {
		$body .= "<td>$val</td>";
	}
	$body .= "</tr>";
}
?>
<table border=1>
<tr><?=$head?></tr>
<?=$body?>
</table>
</body>
</html>