<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Nước</title>
        
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b20eaf92de.js" crossorigin="anonymous"></script>

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/water.css" rel="stylesheet">

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

        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img class="d-inline-block align-top" src="css/images/logo.png" width="30%" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Trang chủ</a>
                    <a href="travel.php" class="nav-item nav-link">Du lịch</a>
                    <a href="water.php" class="nav-item nav-link active"><u>Nước</u></a>
                    <a href="news.php" class="nav-item nav-link">Tin tức</a>
                </div>
            </div>
            <!-- <div class = "tools" id = "tools">
                <img src = "css/images/search.png" alt="search icon" style = "width: 2vw" id = "search_engine"></a>
                <a href = "index"><img src = "css/images/notifications.png" alt="notifications icon" style = "width: 1.75vw"></a>
                <a href = "profile"><img src = "css/images/profile.png" alt="profile icon" style = "width: 1.7vw;"></a>
            </div> -->
        </nav>

        <section>
            <div class = "content" id = "content">
                <div class = "destination" id = "destination">
                    <img src="css/images/location.png" style = "width: 1.3vw; height: 1.5vw; margin-top: -0.15vw">
                    <p style = "margin: 0 0.5vw 0 0.7vw; color:#3E4784"> Bố Trạch </p>
                    <img src="css/images/more.png" style = "width: 1vw; height: 1.3vw;">
                    <p style = "margin: 0 0.5vw 0 0.7vw; color:#3E4784">Động Phong Nha</p>
                </div>
                <div class = "headings" id = "headings">
                    <p style = "font-size: 2.5vw; font-weight: bold; color: #000">Chất lượng nước của Động Phong Nha</p>
                    <p style = "font-size: 1vw; margin-top: 1.2vw; color: #000">Water Quality Index (WQI) ở Động Phong Nha, Bố Trạch, Quảng Bình</p>
                    <div class = "headings_others" id = "headings_others">
                        <div class = "followers" id = "followers">
                            <p style = "font-size: 0.8vw;"><mark style = "background-color: #fff; font-weight: bold;"> 3,12N </mark> người theo dõi hang động này</p>
                            <img src = "css/images/people.png" style = "width: 6.5vw; height: 1.8vw; margin: 0.3vw 0 0 1vw;">
                            <img src = "css/images/heart2.png" style = "width: 2vw; height: 2.1vw; margin: 0.3vw 0 0 0.5vw;">
                            <img src = "css/images/share.png" style = "width: 2.1vw; height: 2.2vw; margin: 0.3vw 0 0 0.5vw;">
                        </div>
                    </div>
                </div>
                <div class = "general" id = "general">
    
                    <div class = "map" id = "map">
                        <img src = "css/images/map2.png" style = "width: 25vw; height: 30vw; border-radius: 1vw;">
                        <p style = "font-size: 1.3vw; color: #fff; margin: -6vw 0 0 1vw; font-weight: bold;">Bản đồ nguồn nước Động Phong Nha</p>
                        <button class = "view_map" id = "view_map" onclick="location.href='map';">VIEW MAP</button>
                    </div>

                    <div class = "information" id = "information">
                        
                        <!-- information_box1 -->
                        <div class="information_box" id="information_box1">
                            <div class="quality_box" id="quality_box">
                                <div class="image_quality_box" id="image_quality_box">
                                    <img src="css/images/good.png" style="width: 12vw; height: 11vw;">
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
                                    <img src="css/images/temperature4.png" style="width: 4vw; height: 4vw;">
                                    <p class = "phv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw"> pH</p>
                                </div>
                                <div class="streamflow" id = "streamflow">
                                    <img src="css/images/wind3.png" style="width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;"> ml/s</p>
                                </div>
                                <div class="tds" id = "tds">
                                    <img src="css/images/wet2.png" style="width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "tdsv" style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;"><span id="tds-value"></span></p>
                                    <p style="font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;"> ppm</p>
                                </div>
                            </div>
                        </div>

                        <!-- information_box2 -->
                        <div class = "information_box" id = "information_box2" style="border: 0.3vw solid #ff6600;">
                            <div class = "quality_box" id = "quality_box" style="background-color: #fcb07e">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #F6956C;">
                                    <img src = "css/images/moderate.png" style = "width: 12vw; height: 11vw;">
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
                                    <img src = "css/images/temperature5.png" style = "width: 4vw; height: 4vw;">
                                    <p class = "phv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw">pH</p>
                                </div>
                                <div class = "streamflow" id = "streamflow">
                                    <img src = "css/images/wind4.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span> ml/s </p>
                                </div>
                                <div class = "tds" id = "tds">
                                    <img src = "css/images/wet4.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "tdsv" style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;"><span id="tds-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;">ppm</p>
                                </div>
                            </div>
                        </div>
                                       
                        <!-- information_box3 -->
                        <div class = "information_box" id = "information_box3" style="border: 0.3vw solid #BD0000;">
                            <div class = "quality_box" id = "quality_box" style="background-color: rgba(256, 132, 132, 0.65);">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #FD7373;">
                                    <img src = "css/images/alarm.png" style = "width: 12vw; height: 11vw;">
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
                                    <img src = "css/images/temperature.png" style = "width: 4vw; height: 4vw;">
                                    <p class = "phv" style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw"><span id="ph-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw">pH</p>
                                </div>
                                <div class = "streamflow" id = "streamflow">
                                    <img src = "css/images/wind.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p class = "streamflowv" style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;"><span id="sf-value"></span></p>
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;">ml/s</p>
                                </div>
                                <div class = "tds" id = "tds">
                                    <img src = "css/images/wet3.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
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
                <div class = "history" id = "history">
                    <div class = "history_info" id = "history_info">
                        <p>Ngày</p>
                        <p style = "margin-left: 12vw; color: #000">Mức độ ô nhiễm</p>
                        <!-- <p style = "margin-left: 35vw;">Temperature</p> -->
                        <p style = "margin-left: 10vw; color: #000">pH</p>
                        <p style = "margin-left: 10vw; color: #000">Tổng chất rắn hòa tan</p>
                        <p style = "margin-left: 10vw; color: #000">Tốc độ dòng chảy</p>
                    </div>
                        <?php 
                            // $servername = "localhost";
                            // $username = "id21666431_qbstusername";
                            // $password = "***";
                            // $database = "id21666431_qbstdb";
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "water";
                            
                            $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection Failed");
                            // $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection Failed");
                                if(!$conn){
                                    die("Sorry we failed to connect: " .mysqli_connect_error());
                                }
                            // Assuming you have a database connection stored in $conn
                            $query = "SELECT * FROM mywater ORDER BY time DESC";  // DESC for descending order (latest to oldest)
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
                                      
                                        <div class = "history_box" id = "history_box">
                                            <?php
                                                $originalTime = DateTime::createFromFormat('Y-m-d H:i:s', $rows['time']);
                                                $originalTime->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
                                            ?>
                                            <p><?php echo $originalTime->format('d/m/y H:i:s'); ?></p>
                                            <?php
                                                if ($rows['wqi'] <= 100) { 
                                                    echo'
                                                    <div class = "quality_history_box" id = "quality_history_box" style="background-color: #A8E05F; color: #3E821F;">
                                                        <p>Good</p>
                                                        <p style="margin-left: 29vw;"><mark style="background-color: #A8E05F; font-weight: bold; color: #3E821F;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "css/images/good2.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">    
                                                    </div>';
                                                }
                                                elseif ($rows['wqi'] <= 200) {
                                                    echo'
                                                    <div class = "quality_history_box" id = "quality_history_box" style="background-color: #F6956C; color: #ff6600;">
                                                        <p>Moderate</p>
                                                        <p style = "margin-left: 29vw;"><mark style = "background-color: #F6956C; font-weight: bold; color: #ff6600;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "css/images/moderate.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">
                                                    </div>';
                                                }
                                                else {
                                                    echo'
                                                    <div class = "quality_history_box" id = "quality_history_box" style="background-color: #FD7373; color: #BD0000;">
                                                        <p>Alarm</p>
                                                        <p style = "margin-left: 29vw;"><mark style = "background-color: #FD7373; font-weight: bold; color: #BD0000;">'.$rows['wqi'].'</mark> WQI</p>
                                                        <img src = "css/images/alarm.png" style = "width: 2vw; height: 2vw; margin: 0.6vw 0 0 1vw">
                                                    </div>';
                                                }
                                            ?>
                                            <!-- <p style = "margin-left: 4.5vw;">{{prediction.temperature}}°C</p> -->
                                            <p style = "margin-left: 12vw; color: #000"><?php echo $rows['ph'];?></p>
                                            <p style = "margin-left: 10vw; color: #000"><?php echo $rows['tds'];?></p>
                                            <p style = "margin-left: 10vw; color: #000"><?php echo $rows['streamflow'];?></p>
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
                <img src="css/images/logo.png" alt="logo" style = "width: 10vw; margin-top: 1.3vw">
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
                // const apiUrl = 'https://qbst.000webhostapp.com/server.api.php';
                const apiUrl = 'http://localhost/QBST/server.api.php';

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
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="main.js"></script>
    </body>
</html>