<?php
    //getting data from database
    $conn = mysqli_connect("localhost", "root", "root", "u286910301_colors_moods");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Mood Ring</title>
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
    <!-- background circles -->
  <!--NAVBAR-->
  <nav class="container item">
    <a href="#">
      <h1>mood ring</h1>
    </a>
  </nav>

  <main>

    <!--BLURB-->
    <div class="container item">
      <p id="blurb">Pick <strong>two colors</strong> that represent how you’re feeling</p>
    </div>

    <div class="container">

      <!--COLOR WHEEL-->
      <div class="item-picker">
        <canvas id="picker-colors" width="350" height="350">
        </canvas>
        <canvas id="picker-container" width="400" height="400">
        </canvas>
      </div>

      <!--PRIMARY COLOR BUTTON-->
      <div class="item-primary">
        <input type="radio" name="colorPicker" value="primary" id="radio-0">
        <label for="radio-0">
          <button class='button-smol'>
            <span class='dot'></span>
            <span id="primary-color">Primary</span>
          </button>
        </label>
      </div>

      <!--SECONDARY COLOR BUTTON-->
      <div class="item-secondary">
        <input type="radio" name="colorPicker" value="secondary" id="radio-1">
        <label for="radio-1">
          <button class='button-smol'>
            <span class='dot'></span>
            <span id='secondary-color'>Secondary</span>
          </button>
        </label>
      </div>

    </div>

    <!--BLENDED COLOR PREVIEW (FOR TESTING DELETE LATER)-->
    <div class="container item">
      <button class='button-smol'>
        <span class='dot'></span>
        <span id='blended-color'>Result</span>
      </button>
    </div>

    <!--ACTION BUTTON NEXT->BLEND-->
    <div class='container item'>
      <button id='action-button' class='button-yuge'>
        <span>Blend</span>
      </button>
    </div>

    <form action="index.php" method = "POST" >
    <textarea name="result" id='result' rows="0" cols="0">
    </textarea>
   <input type="submit" value="Tell me my color mood!" />
</form>

    <!--HELP BUTTON-->
    <div class="container item">
      <a href="#" id="help-button">
        <h5>Help</h5>
      </a>
    </div>

  </main>

  <!--ANIMATED BACKGROUND AREA-->
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

  <!--IMPORTING SCRIPTS-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="./script.js"></script>

    </body>
</html>
    

