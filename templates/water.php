<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Nước</title>
        <meta name = "description" content = "[Description about AquaEmi]">
        <link rel = "stylesheet" href = "../css/water.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/b20eaf92de.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- <script src="script.js"></script> -->

        <script>
            $(document).ready(function() {
                $("#overlay_search").hide();
                $("#search_engine").click(function() { 
                    $("#overlay_search").toggle();
                });
                $("#search_back").click(function() { 
                    $("#overlay_search").toggle();
                });
            });
        </script>

        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('.search_result').each(function() {
                    $(this).attr('data_search_term', $(this).attr('data_search_term').toLowerCase());
                });
                $('#search_content').on('change keydown paste input', function() {
                    var searchTerm = $(this).val().toLowerCase();
                    console.log(searchTerm);
                    $('.search_result').each(function() {
                        console.log($(this).filter('[data_search_term *= ' + searchTerm + ']'));
                        if ($(this).filter('[data_search_term *= ' + searchTerm + ']').length > 0) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            });
        </script>

    </head>
    <body>

    <section class = "navigation" id = "navigation">
            <nav>
                <div class = "navigation_bar" id = "navigation_bar">
                    <img src="../css/images/logo.png" style = "width: 12.5vw; height: 4.5vw;" onclick="location.href='{{url_for('home_page')}}';">
                    <div class = "navigation_keys">
                        <div class = "subjects">
                            <p><a href = "index.php" title = "Trang Chủ" style = "text-decoration: none; color: #000000;">Trang Chủ</a></p>
                            <p><a href = "water.php" title = "Nước" style = "text-decoration: none; color: #000000;"><u>Nước</u></a></p>
                            <p><a href = "travel.php" title = "Du lịch" style = "text-decoration: none; color: #000000;">Du lịch</a></p>
                            <p><a href = "news.php" title = "Tin tức" style = "text-decoration: none; color: #000000;">Tin tức</a></p>
                        </div>
                        <div class = "tools" id = "tools">
                            <img src = "../css/images/search.png" alt="search icon" style = "width: 2vw" id = "search_engine"></a>
                            <a href = "index"><img src = "../css/images/notifications.png" alt="notifications icon" style = "width: 1.75vw"></a>
                            <a href = "profile"><img src = "../css/images/profile.png" alt="profile icon" style = "width: 1.7vw;"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section>
            <div class = "overlay_search" id = "overlay_search">
                <div class = "search_bar" id = "search_bar">
                    <img src = "../css/images/search_back.png" style = "width: 1.5vw; height: 0.5w; margin-bottom: -0.15vw;" id = "search_back">
                    <input type = "text" id = "search_content" name = "search_content" placeholder = "Enter your location..." style = "font-size: 1vw;">
                    <i class="fa-solid fa-x fa-2xs" style="color: #00a56f;" id = "clear_search" onclick = "document.getElementById('search_content').value = ''"></i>
                </div>
                <div class = "search_result_box" id = "search_result_box">
                        <div class = "search_result" id = "search_result" data_search_term="{{watersource.name}}" style="display: none;" onclick="location.href='{{url_for('detail_page', rivername=watersource.name)}}';">
                            <img src = "../css/images/location.png" style = "width: 1vw; height: 1.3vw;">
                            <p style = "font-size: 1vw; color: #616161; margin: 0.2vw 0 0 0.7vw; ">{{watersource.name}}</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 0.3vw 0 0 0.7vw;">{{watersource.followers}}</p>
                            <div class = "wqi_search_result" id = "wqi_search_result">{{watersource.quality}}</div>
                        </div>
                </div>
            </div>

            <div class = "content" id = "content">
                <div class = "destination" id = "destination">
                    <img src="../css/images/location.png" style = "width: 1.3vw; height: 1.5vw; margin-top: -0.15vw">
                    <p style = "margin: 0 0.5vw 0 0.7vw; font-weight: bold; color:#3E4784"> Bố Trạch </p>
                    <img src="../css/images/more.png" style = "width: 1vw; height: 1.3vw;">
                    <p style = "margin: 0 0.5vw 0 0.7vw; font-weight: bold; color:#3E4784">Động Phong Nha</p>
                </div>
                <div class = "headings" id = "headings">
                    <p style = "font-size: 2.5vw; font-weight: bold;">Chất lượng nước của Động Phong Nha</p>
                    <p style = "font-size: 1vw; margin-top: -2.2vw;">Water Quality Index (WQI) ở Động Phong Nha, Bố Trạch, Quảng Bình</p>
                    <div class = "headings_others" id = "headings_others">
                        <div class = "followers" id = "followers">
                            <p style = "font-size: 0.8vw;"><mark style = "background-color: #fff; font-weight: bold;"> 3,12N </mark> người theo dõi hang động này</p>
                            <img src = "../css/images/people.png" style = "width: 6.5vw; height: 1.8vw; margin: 0.3vw 0 0 1vw;">
                            <img src = "../css/images/heart2.png" style = "width: 2vw; height: 2.1vw; margin: 0.3vw 0 0 0.5vw;">
                            <img src = "../css/images/share.png" style = "width: 2.1vw; height: 2.2vw; margin: 0.3vw 0 0 0.5vw;">
                        </div>
                    </div>
                </div>
                <div class = "general" id = "general">
    
                    <div class = "map" id = "map">
                        <img src = "../css/images/map2.png" style = "width: 25vw; height: 30vw; border-radius: 1vw;">
                        <p style = "font-size: 1.3vw; color: #fff; margin: -6vw 0 0 1vw; font-weight: bold;">Bản đồ nguồn nước Động Phong Nha</p>
                        <button class = "view_map" id = "view_map" onclick="location.href='map';">VIEW MAP</button>
                    </div>

                    <div class = "information" id = "information">
                        
                        <!-- information_box1 -->
                        <div class="information_box" id="information_box1">
                            <div class="quality_box" id="quality_box">
                                <div class="image_quality_box" id="image_quality_box">
                                    <img src="../css/images/good.png" style="width: 12vw; height: 11vw;">
                                </div>
                                <div class="waterquality" id="waterquality">   
                                    <p class = "wqiv" style="font-size: 6vw; color: #3E821F; margin: 0.5vw 0 0 0"><span id="wqi-value"></span></p>
                                    <p style="font-size: 1.3vw; color: #3E821F; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
                                </div>
                                <div class="quality_information" id="quality_information_good">
                                    <p style="font-size: 4.5vw; color: #3E821F; margin: 1vw 0 0 3vw; font-weight: bold;">GOOD</p>
                                    <p style="font-size: 1.5vw; color: #3E821F; margin: 0 0 1vw 0;">Healthy for fish and people</p>
                                    <!-- <div class="quality_information_others" id="quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div> -->
                                    <!-- <div class="quality_information_others" id="quality_information_others">7, 6, 5</div> -->
                                </div>
                            </div>
                            <div class="others" id="others">
                                <div class="ph" id = "ph">
                                    <img src="../css/images/temperature4.png" style="width: 4vw; height: 4vw;">
                                    <p class = "phv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw"> pH</p>
                                </div>
                                <div class="streamflow" id = "streamflow">
                                    <img src="../css/images/wind3.png" style="width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;"> ml/s</p>
                                </div>
                                <div class="tds" id = "tds">
                                    <img src="../css/images/wet2.png" style="width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "tdsv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;"><span id="tds-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;"> ppm</p>
                                </div>
                            </div>
                        </div>

                        <!-- information_box2 -->
                        <div class = "information_box" id = "information_box2" style="border: 0.3vw solid #ff6600;">
                            <div class = "quality_box" id = "quality_box" style="background-color: #fcb07e">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #F6956C;">
                                    <img src = "../css/images/moderate.png" style = "width: 12vw; height: 11vw;">
                                </div>
                                <div class = "waterquality" id = "waterquality">
                                    <p class = "wqiv" style = "font-size: 6vw; color: #ff6600; margin: 0.5vw 0 0 0"><span id="wqi-value"></span></p>
                                    <p style = "font-size: 1.3vw; color: #ff6600; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
                                </div>
                                <div class = "quality_information" id = "quality_information_moderate" style="background-color: #fcb07e;">
                                    <p style = "font-size: 4.5vw; color: #ff6600; margin: 1vw 0 0 -1vw; font-weight: bold;">MODERATE</p>
                                    <p style = "font-size: 1.5vw; color: #ff6600; margin: 0 0 1vw 0;">Unhealthy for sensitive groups of fish and people</p>
                                    <!-- <div class = "quality_information_others" id = "quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div> -->
                                </div>
                            </div>
                            <div class = "others" id = "others">
                                <div class = "ph" id = "ph">
                                    <img src = "../css/images/temperature5.png" style = "width: 4vw; height: 4vw;">
                                    <p class = "phv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw">pH</p>
                                </div>
                                <div class = "streamflow" id = "streamflow">
                                    <img src = "../css/images/wind4.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span> ml/s </p>
                                </div>
                                <div class = "tds" id = "tds">
                                    <img src = "../css/images/wet4.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "tdsv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;"><span id="tds-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;">ppm</p>
                                </div>
                            </div>
                        </div>
                                       
                        <!-- information_box3 -->
                        <div class = "information_box" id = "information_box3" style="border: 0.3vw solid #BD0000;">
                            <div class = "quality_box" id = "quality_box" style="background-color: rgba(256, 132, 132, 0.65);">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #FD7373;">
                                    <img src = "../css/images/alarm.png" style = "width: 12vw; height: 11vw;">
                                </div>
                                <div class = "waterquality" id = "waterquality">
                                    <p class = "wqiv" style = "font-size: 6vw; color: #BD0000; margin: 0.5vw 0 0 0"><span id="wqi-value"></span></p>
                                    <p style = "font-size: 1.3vw; color: #BD0000; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
                                </div>
                                <div class = "quality_information" id = "quality_information_alarm" style="background-color: rgba(256, 132, 132, 0);">
                                    <p style = "font-size: 4.5vw; color: #BD0000; margin: 1vw 0 0 1vw; font-weight: bold;">ALARM</p>
                                    <p style = "font-size: 1.5vw; color: #BD0000; margin: 0 0 1vw 0;">Unhealthy for fish and people</p>
                                    <!-- <div class = "quality_information_others" id = "quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div> -->
                                </div>
                            </div>
                            <div class = "others" id = "others">
                                <div class = "ph" id = "ph">
                                    <img src = "../css/images/temperature.png" style = "width: 4vw; height: 4vw;">
                                    <p class = "phv" style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw">pH</p>
                                </div>
                                <div class = "streamflow" id = "streamflow">
                                    <img src = "../css/images/wind.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;">ml/s</p>
                                </div>
                                <div class = "tds" id = "tds">
                                    <img src = "../css/images/wet3.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "tdsv" style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.5vw;"><span id="tds-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.5vw;">ppm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
                <p style = "font-size: 1.2vw; font-weight: bolder; font-family: 'Noto Sans', sans-serif; margin: 3vw 0 0 2.5vw; color: #3E4784">Lịch sử WQI</p>
                <!-- // SQL query to select data from database
                $sql = " SELECT * FROM mywater ORDER BY id DESC ";
                $result = $mysqli->query($sql);
                $mysqli->close(); -->
                <div class = "forecast" id = "forecast">
                    <div class = "forecast_info" id = "forecast_info">
                        <p>Ngày</p>
                        <p style = "margin-left: 12vw;">Mức độ ô nhiễm</p>
                        <!-- <p style = "margin-left: 35vw;">Temperature</p> -->
                        <p style = "margin-left: 10vw;">pH</p>
                        <p style = "margin-left: 10vw;">Tổng chất rắn hòa tan</p>
                        <p style = "margin-left: 10vw;">Tốc độ dòng chảy</p>
                    </div>
                        <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "water";
                            
                            $conn = mysqli_connect($servername, $username, "", $database) or die("Connection Failed");
                                if(!$conn){
                                    die("Sorry we failed to connect: " .mysqli_connect_error());
                                }
                            // Assuming you have a database connection stored in $conn
                            $query = "SELECT * FROM mywater";
                            $result = $conn->query($query);

                            // Check if the query was successful
                            if (!$result) {
                                die("Query failed: " . $conn->error);
                            }

                        
                            // LOOP TILL END OF DATA
                            while($rows=$result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <!-- FETCHING DATA FROM EACH
                                            ROW OF EVERY COLUMN -->
                                      
                                        <div class = "forecast_box" id = "forecast_box">
                                            <p><?php echo $rows['time'];?></p>
                                            <?php
                                                if ($rows['wqi'] <= 100) { 
                                                    echo'
                                                    <div class = "quality_forecast_box" id = "quality_forecast_box" style="background-color: #A8E05F; color: #3E821F;">
                                                        <p>Good</p>
                                                        <p style="margin-left: 29vw;"><mark style="background-color: #A8E05F; font-weight: bold; color: #3E821F;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "../css/images/good2.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">    
                                                    </div>';
                                                }
                                                elseif ($rows['wqi'] <= 200) {
                                                    echo'
                                                    <div class = "quality_forecast_box" id = "quality_forecast_box" style="background-color: #F6956C; color: #ff6600;">
                                                        <p>Moderate</p>
                                                        <p style = "margin-left: 29vw;"><mark style = "background-color: #F6956C; font-weight: bold; color: #ff6600;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "../css/images/moderate.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">
                                                    </div>';
                                                }
                                                else {
                                                    echo'
                                                    <div class = "quality_forecast_box" id = "quality_forecast_box" style="background-color: #FD7373; color: #BD0000;">
                                                        <p>Alarm</p>
                                                        <p style = "margin-left: 29vw;"><mark style = "background-color: #FD7373; font-weight: bold; color: #BD0000;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "../css/images/alarm.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">
                                                    </div>';
                                                }
                                            ?>
                                            <!-- <p style = "margin-left: 4.5vw;">{{prediction.temperature}}°C</p> -->
                                            <p style = "margin-left: 12vw;"><?php echo $rows['ph'];?></p>
                                            <p style = "margin-left: 10vw;"><?php echo $rows['tds'];?></p>
                                            <p style = "margin-left: 10vw;"><?php echo $rows['streamflow'];?></p>
                                        </div> 

                                    </tr>
                                <?php
                            }
                        ?>
                </div>
                
            </div>
        </section>
        
        <footer>
            <div class = "footer" id = "footer">
                <img src="../css/images/logo.png" alt="logo" style = "width: 19vw; height: 6.5vw; margin-top: 1.3vw">
                <div class = "subjects_footer" id = "subjects_footer">
                    <div class = "first" id = "first">
                        <p>Trang chủ</p>
                        <p>Nước</p>
                    </div>
                    <div class = "second" id = "second">
                        <p>Du lịch</p>
                        <p>Tin tức</p>
                    </div>
                </div>
                <div class = "mailing_list" id = "mailing_list">
                    <p style = "font-size: 1.2vw; font-weight: bold; color: #3E4784">JOIN OUR MAILING LIST!</p>
                    <input type = "email" class = "email_mailing" id = "email" name = "email" placeholder="Email address">
                    <i class="fa-solid fa-arrow-right" style="color: #3E4784;"></i><br>
                    <div class = "social_media" id = "social_media">
                        <i class="fa-brands fa-square-instagram fa-lg" style="color: #3E4784; margin: 0 0.5vw"></i>
                        <i class="fa-brands fa-pinterest fa-lg" style="color: #3E4784; margin: 0 0.5vw"></i>
                        <i class="fa-brands fa-twitter fa-lg" style="color: #3E4784; margin: 0 0.5vw"></i>
                        <i class="fa-brands fa-facebook fa-lg" style="color: #3E4784; margin: 0 0.5vw"></i>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <script src="script.js"></script> -->
        <script>
            function loadData () {
                // URL của API hoặc endpoint mà bạn muốn gửi request đến
                const apiUrl = 'http://localhost/qbst/templates/server.api.php';

                // Sử dụng fetch để gửi request GET đến API
                fetch(apiUrl)
                .then(response => {
                    // Kiểm tra xem response có thành công không
                    if (!response.ok) {
                    throw new Error('Network response was not ok');
                    }
                    // Nếu thành công, parse dữ liệu JSON từ response
                    return response.json();
                })
                .then(data => {
                    // Xử lý dữ liệu mà bạn nhận được từ API
                    console.log('Data:', data);
                    // Ví dụ: Hiển thị dữ liệu lên trang web
                    // document.getElementById('ph-value').innerHTML = data[data.length-1].ph;
                    // document.getElementById('wqi-value').innerHTML = data[data.length-1].wqi;
                    // document.getElementById('sf-value').innerHTML = data[data.length-1].streamflow;
                    // document.getElementById('tds-value').innerHTML = data[data.length-1].tds;
                    //ph
                    var elements = document.getElementsByClassName("phv");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].innerHTML = data[data.length-1].ph;
                    }
                    //wqi
                    var elements = document.getElementsByClassName("wqiv");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].innerHTML = data[data.length-1].wqi;
                    }
                    //streamflow
                    var elements = document.getElementsByClassName("streamflowv");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].innerHTML = data[data.length-1].streamflow;
                    }
                    //tds
                    var elements = document.getElementsByClassName("tdsv");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].innerHTML = data[data.length-1].tds;
                    }

                    // console.log('wqi: ', data[0].wqi);

                    if (data[data.length-1].wqi <= 100) {
                        document.getElementById('information_box1').style.display = 'block';
                        document.getElementById('information_box2').style.display = 'none';
                        document.getElementById('information_box3').style.display = 'none';
                    } 
                    else if (data[data.length-1].wqi <= 200) {
                        document.getElementById('information_box1').style.display = 'none';
                        document.getElementById('information_box2').style.display = 'block';
                        document.getElementById('information_box3').style.display = 'none';
                    } 
                    else {
                        document.getElementById('information_box1').style.display = 'none';
                        document.getElementById('information_box2').style.display = 'none';
                        document.getElementById('information_box3').style.display = 'block';
                    }
                })
                .catch(error => {
                    // Xử lý lỗi nếu có
                    console.error('There was a problem with the fetch operation:', error);
                });
                // document.getElementById("wqivalue").innerHTML = 100;
            }
            setInterval(function() {
                loadData();
            }, 5000);
        </script>
    </body>
</html>
