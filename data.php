<?php

//getting data from database
$conn = mysqli_connect("local host", "root", "", "u286910301_colors_moods");

//getting data from colormood table
$result = mysql_query($conn, "SELECT * FROM ColorMood");

//storing in array
$data = array();
while ($row = mysql_fetch_assoc($result))
{
	$data[] = $row;
}

//returning response in JSON format
echo json_encode($data);

