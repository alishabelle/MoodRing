<?php
    //getting data from database
    $conn = mysqli_connect("localhost", "root", "root", "u286910301_colors_moods");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mr</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.1/pure-min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $moodColor = $_POST["result"];
            
            $sql = "SELECT * FROM ColorMood ";
            $sql .= "WHERE color_name = '{$moodColor}'";
            
            $result = mysqli_query($conn, $sql);
            
            while ($row = mysqli_fetch_assoc($result))
            {
            //    $data[] = $row;
                echo($row["color_moods"] . "<br>");
            }
        }
    ?>
    <!-- partial:index.partial.html -->
    <div class='header'>
        <nav class="home-menu pure-menu pure-menu-horizontal">
            <a href="#">
                <h1 class="logo pure-menu-heading">mood ring</h1>
            </a>
        </nav>
    </div>

    <div class="splash-container">
        <div class="splash">

            <aside class="splash-subhead">

                <p id="blurb">Pick <strong><span id="color-type">two colors</span></strong> that represent how you’re feeling</p>

                <input type="radio" name="colorPicker" value="primary" id="r0">
                <label for="r0">
        <button  id='primary-button' class='pure-button button-smol'>              
          <span class='dot'></span>
          <span id="primary-color">Primary</span>
        </button>
      </label>


                <input type="radio" name="colorPicker" value="secondary" id="r1">
                <label for="r1">
        <button class='pure-button button-smol'>
          <span class='dot'></span>
          <span id='secondary-color'>Secondary</span>
        </button>
      </label>
                
    
<form action="index.php" method = "POST" >
    <textarea name="result" id='result' rows="0" cols="0">
    </textarea>
   <input type="submit" value="Tell me my color mood!" />
</form>



                <button class='pure-button button-smol' name="result">
        <span class='dot'></span>
        <span id='blended-color'>Result</span>
      </button>

                <button id='blend-button' class='pure-button button-yuge'>Blend</button>

            </aside>

            <main>
                <canvas id="picker" width="400" height="400">
      </canvas>
                <canvas id="picker-container" width="400" height="400">
      </canvas>
            </main>

        </div>
        <div class="background-circles">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>
