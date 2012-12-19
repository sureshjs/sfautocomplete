<?php

	// CONFIRM LOCAL SETTINGS
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "symfony";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}

	$autocomplete_value = mysql_real_escape_string($_GET["term"]);

	$sql = "SELECT id, name, three, four FROM searchresults WHERE name LIKE '%$autocomplete_value%'";

	$query = mysql_query($sql);
	
	$results = array();
	while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {		
		
		$text = $row['name'];

		$contentType = substr($row['id'], 0, 1);
		
		if ($contentType == 'a'){
			// IS ARTIST
			$link = "artist/".$row['name'];
			if($row['three'] != ""){
			$text .= " (" . $row['three']. ")";		
			}
		}
		elseif ($contentType == 'u'){
			$userId = substr($row['id'], 1);
			// IS USER			
			$link = "user/".$userId;			
			$text .= " (music fan)";		
		}	
		elseif ($contentType == 'e'){
			// IS EVENT
			$link = "event/".$row['four']."/".$row['name'];	
			$text .= " ".$row['four'];
		}						
	
		
		array_push($results, array( 'value' => $text, 'link' => $link));

	}

	echo json_encode($results);

?>