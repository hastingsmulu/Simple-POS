<?php
header('Content-Type: application/json');


$data = array( get_server_memory_usage()%,get_server_memory_usage());

	$data[] = $data;
}



echo json_encode($data);
?>