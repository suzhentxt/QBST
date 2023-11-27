<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Nước</title>
        <meta name = "description" content = "[Description about AquaEmi]">
        <link rel = "stylesheet" href = "../static/water.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/b20eaf92de.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="script.js"></script>

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
                    <img src="../static/images/logo.png" style = "width: 12.5vw; height: 4.5vw;" onclick="location.href='{{url_for('home_page')}}';">
                    <div class = "navigation_keys">
                        <div class = "subjects">
                            <p><a href = "index.php" title = "Trang Chủ" style = "text-decoration: none; color: #000000;">Trang Chủ</a></p>
                            <p><a href = "water.php" title = "Nước" style = "text-decoration: none; color: #000000;"><u>Nước</u></a></p>
                            <p><a href = "travel.php" title = "Du lịch" style = "text-decoration: none; color: #000000;">Du lịch</a></p>
                            <p><a href = "news.php" title = "Tin tức" style = "text-decoration: none; color: #000000;">Tin tức</a></p>
                        </div>
                        <div class = "tools" id = "tools">
                            <img src = "../static/images/search.png" alt="search icon" style = "width: 2vw" id = "search_engine"></a>
                            <a href = "index"><img src = "../static/images/notifications.png" alt="notifications icon" style = "width: 1.75vw"></a>
                            <a href = "profile"><img src = "../static/images/profile.png" alt="profile icon" style = "width: 1.7vw;"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section>
            <div class = "overlay_search" id = "overlay_search">
                <div class = "search_bar" id = "search_bar">
                    <img src = "../static/images/search_back.png" style = "width: 1.5vw; height: 0.5w; margin-bottom: -0.15vw;" id = "search_back">
                    <input type = "text" id = "search_content" name = "search_content" placeholder = "Enter your location..." style = "font-size: 1vw;">
                    <i class="fa-solid fa-x fa-2xs" style="color: #00a56f;" id = "clear_search" onclick = "document.getElementById('search_content').value = ''"></i>
                </div>
                <div class = "search_result_box" id = "search_result_box">
                    {% for watersource in watersources_data %}
                        <div class = "search_result" id = "search_result" data_search_term="{{watersource.name}}" style="display: none;" onclick="location.href='{{url_for('detail_page', rivername=watersource.name)}}';">
                            <img src = "../static/images/location.png" style = "width: 1vw; height: 1.3vw;">
                            <p style = "font-size: 1vw; color: #616161; margin: 0.2vw 0 0 0.7vw; ">{{watersource.name}}</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 0.3vw 0 0 0.7vw;">{{watersource.followers}}</p>
                            <div class = "wqi_search_result" id = "wqi_search_result">{{watersource.quality}}</div>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <div class = "content" id = "content">
                <div class = "destination" id = "destination">
                    <img src="../static/images/location.png" style = "width: 1.3vw; height: 1.5vw; margin-top: -0.15vw">
                    <p style = "margin: 0 0.5vw 0 0.7vw; font-weight: bold; color:#3E4784"> Bố Trạch </p>
                    <img src="../static/images/more.png" style = "width: 1vw; height: 1.3vw;">
                    <p style = "margin: 0 0.5vw 0 0.7vw; font-weight: bold; color:#3E4784">Động Phong Nha</p>
                </div>
                <div class = "headings" id = "headings">
                    <p style = "font-size: 2.5vw; font-weight: bold;">Chất lượng nước của Động Phong Nha</p>
                    <p style = "font-size: 1vw; margin-top: -2.2vw;">Water Quality Index (WQI) ở Động Phong Nha, Bố Trạch, Quảng Bình</p>
                    <div class = "headings_others" id = "headings_others">
                        <p style = "font-size: 0.8vw; font-weight: bold;">Last updated at 9:22 pm August 5 (local time)</p>
                        <div class = "followers" id = "followers">
                            <p style = "font-size: 0.8vw;"><mark style = "background-color: #fff; font-weight: bold;"> 3,12N </mark> người theo dõi hang động này</p>
                            <img src = "../static/images/people.png" style = "width: 6.5vw; height: 1.8vw; margin: 0.3vw 0 0 1vw;">
                            <img src = "../static/images/heart2.png" style = "width: 2vw; height: 2.1vw; margin: 0.3vw 0 0 0.5vw;">
                            <img src = "../static/images/share.png" style = "width: 2.1vw; height: 2.2vw; margin: 0.3vw 0 0 0.5vw;">
                        </div>
                    </div>
                </div>
                <div class = "general" id = "general">
                    <div class = "map" id = "map">
                        <img src = "../static/images/map2.png" style = "width: 25vw; height: 30vw; border-radius: 1vw;">
                        <p style = "font-size: 1.3vw; color: #fff; margin: -6vw 0 0 1vw; font-weight: bold;">Bản đồ nguồn nước Động Phong Nha</p>
                        <button class = "view_map" id = "view_map" onclick="location.href='map';">VIEW MAP</button>
                    </div>
                    <div class = "information" id = "information">
                        {% if data.quality <= 100 %}
                        <div class = "information_box" id = "information_box">
                            <div class = "quality_box" id = "quality_box">
                                <div class = "image_quality_box" id = "image_quality_box">
                                    <img src = "../static/images/good.png" style = "width: 12vw; height: 11vw;">
                                </div>
                                <div class = "wqi" id = "wqi">
                                    <p style = "font-size: 6vw; color: #3E821F; margin: 0.5vw 0 0 0"> {{ data.quality }} </p>
                                    <p style = "font-size: 1.3vw; color: #3E821F; margin: -0.5vw 0 0 2vw; font-weight: bold;">WQI</p>
                                </div>
                                <div class = "quality_information" id = "quality_information_good">
                                    <p style = "font-size: 4.5vw; color: #3E821F; margin: 1vw 0 0 3vw; font-weight: bold;">GOOD</p>
                                    <p style = "font-size: 1.5vw; color: #3E821F; margin: 0 0 1vw 0;">Healthy for fish and people</p>
                                    <div class = "quality_information_others" id = "quality_information_others">pH, nồng độ oxy tan, chất ô nhiễm</div>
                                    <div class = "quality_information_others" id = "quality_information_others">7, 6, 5</div>
                                </div>
                            </div>

                            <div class = "others" id = "others">
                                <div class = "temperature" id = "temperature">
                                    <img src = "../static/images/temperature4.png" style = "width: 4vw; height: 4vw;">
                                    <p style = "font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.2vw">{{ data.temperature }} °C </p>
                                </div>
                                <div class = "wind" id = "wind">
                                    <img src = "../static/images/wind3.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.7vw;">{{ data.flow }} m3/s </p>
                                </div>
                                <div class = "wet" id = "wet">
                                    <img src = "../static/images/wet2.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #94D53F; margin: 1.1vw 0 0 0.5vw;">{{ data.turbidity }} NTU</p>
                                </div>
                            </div>
                        </div>
                        {% elif data.quality <= 200 %}
                        <div class = "information_box" id = "information_box" style="border: 0.3vw solid #ff6600;">
                            <div class = "quality_box" id = "quality_box" style="background-color: #fcb07e">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #F6956C;">
                                    <img src = "../static/images/moderate.png" style = "width: 12vw; height: 11vw;">
                                </div>
                                <div class = "wqi" id = "wqi">
                                    <p style = "font-size: 6vw; color: #ff6600; margin: 0.5vw 0 0 0"> {{ data.quality }} </p>
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
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.2vw">{{ data.temperature }} °C</p>
                                </div>
                                <div class = "wind" id = "wind">
                                    <img src = "../static/images/wind4.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.7vw;">{{ data.flow }} m3/s </p>
                                </div>
                                <div class = "wet" id = "wet">
                                    <img src = "../static/images/wet4.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #ff9249; margin: 1.1vw 0 0 0.5vw;">{{ data.turbidity }} NTU</p>
                                </div>
                            </div>
                        </div>
                        {% else %}
                        <div class = "information_box" id = "information_box" style="border: 0.3vw solid #BD0000;">
                            <div class = "quality_box" id = "quality_box" style="background-color: rgba(256, 132, 132, 0.65);">
                                <div class = "image_quality_box" id = "image_quality_box" style="background-color: #FD7373;">
                                    <img src = "../static/images/alarm.png" style = "width: 12vw; height: 11vw;">
                                </div>
                                <div class = "wqi" id = "wqi">
                                    <p style = "font-size: 6vw; color: #BD0000; margin: 0.5vw 0 0 0"> {{ data.quality }} </p>
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
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.2vw">{{ data.temperature }} °C</p>
                                </div>
                                <div class = "wind" id = "wind">
                                    <img src = "../static/images/wind.png" style = "width: 3vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.7vw;">{{ data.flow }} m3/s </p>
                                </div>
                                <div class = "wet" id = "wet">
                                    <img src = "../static/images/wet3.png" style = "width: 2vw; height: 3vw; margin: 0.5vw 0 0 0;">
                                    <p style = "font-size: 1.5vw; color: #F63E3E; margin: 1.1vw 0 0 0.5vw;">{{ data.turbidity }} NTU</p>
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <p style = "font-size: 1vw; margin: 2vw 0 0 27vw;">Last updated 10:06</p>
                        <div class = "data_provided" id = "data_provided">
                            <img src = "../static/images/logo.png" style = "width: 11vw; height: 4.5vw; margin: 0.5vw 1vw 0 0.5vw;">
                            <div class = "text" id = "text">
                                <p style = "font-size: 1vw;">Data provided by</p>
                                <p style = "font-size: 1.2vw; font-weight: bold; margin-top: -0.5vw;">WQI modeled using satellite data</p>
                            </div>
                            <img src = "../static/images/more.png" style = "width: 2vw; height: 2vw; margin: 1.5vw 0 0 31vw;">
                        </div>
                    </div>
                </div>
                <p style = "font-size: 1.2vw; font-weight: bolder; font-family: 'Noto Sans', sans-serif; margin: 1vw 0 0 2.5vw; color: #3E4784;">Chất lượng nước hiện tại</p>
                <div class = "current_quality" id = "water_quality">
                    <div class = "level" id = "level">
                        <p style = "font-weight: bold;">Water pollution level</p>
                        {% if data.quality <= 100 %}
                            <p>Good</p>
                        {% elif data.quality <= 200 %}
                            <p>Moderate</p>
                        {% else %}
                            <p>Alarm</p>
                        {% endif %}
                    </div>
                    <div class = "index" id = "index">
                        <p style = "font-weight: bold;">Water pollution index</p>
                        <p><mark style = "background-color: #fff;"> {{ data.quality }} </mark> WQI</p>
                    </div>
                    <div class = "others" id = "others">
                        <p style = "font-weight: bold;">[pH, nồng độ oxy tan, chất ô nhiễm]</p>
                        <p>[{{data.ph}}, {{data.DO}} ppm, {{data.turbidity}} NTU]</p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <div class = "footer" id = "footer">
                <img src="../static/images/logo.png" alt="logo" style = "width: 19vw; height: 6.5vw; margin-top: 1.3vw">
                <div class = "subjects_footer" id = "subjects_footer">
                    <div class = "first" id = "first">
                        <p>Intro</p>
                        <p>My water</p>
                    </div>
                    <div class = "second" id = "second">
                        <p>Map</p>
                        <p>Travel</p>
                    </div>
                    <div class = "third" id = "third">
                        <p>News and Rankings</p>
                        <p>Profile and notifications</p>
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
        <script src="script.js"></script>
    </body>
</html>
