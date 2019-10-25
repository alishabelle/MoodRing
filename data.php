<?php

//getting data from database
$conn = mysqli_connect("localhost", "root", "root", "u286910301_colors_moods");
    
//    if($conn){
//        echo("It works");
//    }else{
//        echo("throw error: " . mysqli_connect_error());
//    }
//getting data from colormood table
$result = mysqli_query($conn, "SELECT * FROM ColorMood");

    
//storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
//	$data[] = $row;
    echo($row["color_name"] . "<br>");
}

//returning response in JSON format
//echo json_encode($data);
    
?>

