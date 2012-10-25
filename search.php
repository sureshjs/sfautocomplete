<?php
	$con = mysql_connect('localhost','root','root');
	if (!$con) {
		'dead in the water' . mysql_error();
	}

	mysql_select_db('symfony',$con);

	$autocomplete_value = mysql_real_escape_string($_GET["term"]);

	$sql = "SELECT name FROM Artist WHERE name LIKE '%$autocomplete_value%' UNION
			SELECT name FROM Event WHERE name LIKE '%$autocomplete_value%'";

	$query = mysql_query($sql);
	
	$results = array();
	while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		array_push($results, array( 'value' => $row['name']));

	}

	echo json_encode($results);

?>