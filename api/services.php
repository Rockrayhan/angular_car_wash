<?php
include 'database.php';
$products = [];

$sql = "SELECT * FROM tblwashingpoints";
if($result = $db->query($sql))
{

	$i = 0;
	while($row = $result->fetch_assoc())
	{
		$products[$i]['id'] = $row['id'];
		$products[$i]['washingPointName'] = $row['washingPointName'];
		$products[$i]['washingPointAddress'] = $row['washingPointAddress'];
		$products[$i]['contactNumber'] = $row['contactNumber'];
		$products[$i]['creationDate'] = $row['creationDate'];
		$i++;
	}
	echo json_encode(['data' => $products ]);
}
else
{
	http_response_code(404);
}



