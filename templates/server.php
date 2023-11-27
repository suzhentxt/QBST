<?php
include 'config.php';

$sql = "SELECT * FROM `mywater` ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $ph = $row['ph'];
    $wqi = $row['wqi'];
    $streamflow = $row['streamflow'];
    $tds = $row['tds'];
    $time = $row['time'];

    // Check the condition for $wqi
    if ($wqi <= 100) {
      ?>
        <div class="information_box" id="information_box">
            <div class="quality_box" id="quality_box">
                <div class="image_quality_box" id="image_quality_box">
                    <img src="../static/images/good.png" style="width: 12vw; height: 11vw;">
                </div>
                <div class="wqi" id="wqi">
                    <p style="font-size: 6vw; color: #3E821F; margin: 0.5vw 0 0 0"><?= $wqi ?></p>
                    <p style="font-size: 1.3vw; color: #3E821F; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
                </div>
                <div class="quality_information" id="quality_information_good">
                    <p style="font-size: 4.5vw; color: #3E821F; margin: 1vw 0 0 3vw; font-weight: bold;">GOOD</p>
                    <p style="font-size: 1.5vw; color: #3E821F; margin: 0 0 1vw 0;">Healthy for fish and people</p>
                    <div class="quality_information_others" id="quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div>
                    <div class="quality_information_others" id="quality_information_others">7, 6, 5</div>
                </div>
            </div>

            <div class="others" id="others">
                <div class="temperature" id="temperature">
                    <img src="../static/images/temperature4.png" style="width: 4vw; height: 4vw;">
                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw"><?= $ph ?> pH </p>
                </div>
                <div class="wind" id="wind">
                    <img src="../static/images/wind3.png" style="width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;"><?= $streamflow ?> ml/s </p>
                </div>
                <div class="wet" id="wet">
                    <img src="../static/images/wet2.png" style="width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;"><?= $tds ?> ppm</p>
                </div>
            </div>
        </div>
      <?php
    } elseif ($wqi <= 200) {
      ?>
        <div class = "information_box" id = "information_box" style="border: 0.3vw solid #ff6600;">
          <div class = "quality_box" id = "quality_box" style="background-color: #fcb07e">
              <div class = "image_quality_box" id = "image_quality_box" style="background-color: #F6956C;">
                  <img src = "../static/images/moderate.png" style = "width: 12vw; height: 11vw;">
              </div>
              <div class = "wqi" id = "wqi">
                  <p style = "font-size: 6vw; color: #ff6600; margin: 0.5vw 0 0 0"><?= $wqi ?></p>
                  <p style = "font-size: 1.3vw; color: #ff6600; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
              </div>
          
              <div class = "quality_information" id = "quality_information_moderate" style="background-color: #fcb07e;">
                  <p style = "font-size: 4.5vw; color: #ff6600; margin: 1vw 0 0 -1vw; font-weight: bold;">MODERATE</p>
                  <p style = "font-size: 1.5vw; color: #ff6600; margin: 0 0 1vw 0;">Unhealthy for sensitive groups of fish and people</p>
                  <div class = "quality_information_others" id = "quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div>
              </div>
          </div>

          <div class = "others" id = "others">
              <div class = "temperature" id = "temperature">
                  <img src = "../static/images/temperature5.png" style = "width: 4vw; height: 4vw;">
                  <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw"><?= $ph ?> pH </p>
              </div>
              <div class = "wind" id = "wind">
                  <img src = "../static/images/wind4.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                  <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;"><?= $streamflow ?> ml/s </p>
              </div>
              <div class = "wet" id = "wet">
                  <img src = "../static/images/wet4.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                  <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;"><?= $tds ?> ppm</p>
              </div>
          </div>
        </div>
      <?php
    }
    else {
      ?>
        <div class = "information_box" id = "information_box" style="border: 0.3vw solid #BD0000;">
          <div class = "quality_box" id = "quality_box" style="background-color: rgba(256, 132, 132, 0.65);">
              <div class = "image_quality_box" id = "image_quality_box" style="background-color: #FD7373;">
                  <img src = "../static/images/alarm.png" style = "width: 12vw; height: 11vw;">
              </div>
              <div class = "wqi" id = "wqi">
                  <p style = "font-size: 6vw; color: #BD0000; margin: 0.5vw 0 0 0"><?= $wqi ?>/p>
                  <p style = "font-size: 1.3vw; color: #BD0000; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
              </div>
          
              <div class = "quality_information" id = "quality_information_alarm" style="background-color: rgba(256, 132, 132, 0);">
                  <p style = "font-size: 4.5vw; color: #BD0000; margin: 1vw 0 0 1vw; font-weight: bold;">ALARM</p>
                  <p style = "font-size: 1.5vw; color: #BD0000; margin: 0 0 1vw 0;">Unhealthy for fish and people</p>
                  <div class = "quality_information_others" id = "quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div>
              </div>
          </div>

          <div class = "others" id = "others">
              <div class = "temperature" id = "temperature">
                  <img src = "../static/images/temperature.png" style = "width: 4vw; height: 4vw;">
                  <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw"><?= $ph ?> pH </p>
              </div>
              <div class = "wind" id = "wind">
                  <img src = "../static/images/wind.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                  <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;"><?= $streamflow ?> ml/s </p>
              </div>
              <div class = "wet" id = "wet">
                  <img src = "../static/images/wet3.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                  <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.5vw;"><?= $tds ?> ppm</p>
              </div>
          </div>
        </div>
      <?php
    }
}
mysqli_close($conn);
?>
