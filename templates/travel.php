<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Tin tức</title>
        
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel = "stylesheet" href = "../static/travel.css">
        <script src="https://kit.fontawesome.com/b20eaf92de.js" crossorigin="anonymous"></script>

        <!-- For search bar -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

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
                            <p><a href = "water.php" title = "Nước" style = "text-decoration: none; color: #000000;">Nước</a></p>
                            <p><a href = "travel.php" title = "Du lịch" style = "text-decoration: none; color: #000000;"><u>Du lịch</u></a></p>
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
                    <i class="fa-solid fa-x fa-2xs" style="color: #000000;" id = "clear_search" onclick = "document.getElementById('search_content').value = ''"></i>
                </div>
                <div class = "search_result_box" id = "search_result_box">
                    {% for watersource in watersources_data %}
                        <div class = "search_result" id = "search_result" data_search_term="{{watersource.name}}" style="display: none;" onclick="location.href='{{url_for('detail_page', rivername=watersource.name)}}';">
                            <img src = "../static/images/location.png" style = "width: 1vw; height: 1.3vw;">
                            <p style = "font-size: 1vw; color: #000000; margin: 0.2vw 0 0 0.7vw; ">{{watersource.name}}</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 0.3vw 0 0 0.7vw;">{{watersource.followers}}</p>
                            <div class = "wqi_search_result" id = "wqi_search_result">{{watersource.quality}}</div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            <div class = "content" id = "content">
                <div class = "search_travel_location" id = "search_travel_location">
                    <img src = "../static/images/search_back.png" style = "width: 1.8vw; height: 1.5vw; margin-bottom: -0.3vw;">
                    <input type = "text" class = "search_travel_input" id = "search_travel_input" style = "font-size: 1.1vw; font-family: 'Noto Sans', sans-serif;" placeholder = "Enter name country, city or location..."> 
                    <img src = "../static/images/search.png" style = "width: 1.7vw; height: 1.7vw; margin-bottom: -0.5vw;">
                </div>
                <p style = "font-size: 1vw; color: #00A66E; font-weight: bold; margin: 2vw 0 0 0;">Near your location</p>
                <div class = "near_location" id = "near_location">
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-size: 0.9vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 1.5vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <div class = "near_location_box_wqi" id = "near_location_box_wqi">
                                <div class = "wqi_rank" id = "wqi_rank">33</div>
                                <p style = "margin: 0.3vw 0 0 1.5vw; font-size: 1vw;">ranked 12th in the world</p>
                            </div>
                            <button class = "to_details" id = "to_details">Learn more...</button>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-size: 0.9vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 1.5vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <div class = "near_location_box_wqi" id = "near_location_box_wqi">
                                <div class = "wqi_rank" id = "wqi_rank">33</div>
                                <p style = "margin: 0.3vw 0 0 1.5vw; font-size: 1vw;">ranked 12th in the world</p>
                            </div>
                            <button class = "to_details" id = "to_details">Learn more...</button>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-size: 0.9vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 1.5vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <div class = "near_location_box_wqi" id = "near_location_box_wqi">
                                <div class = "wqi_rank" id = "wqi_rank">33</div>
                                <p style = "margin: 0.3vw 0 0 1.5vw; font-size: 1vw;">ranked 12th in the world</p>
                            </div>
                            <button class = "to_details" id = "to_details">Learn more...</button>
                        </div>
                    </div>
                </div>
                <p style = "font-size: 1vw; color: #00A66E; font-weight: bold; margin: 2vw 0 0 0;">Recommended locations</p>
                <div class = "recommended_locations" id = "recommended_locations">
                    <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                    <div class = "recommended_locations_text" id = "recommended_locations_text">
                        <div class = "recommended_headline" id = "recommended_headline">
                            <p style = "font-size: 1.1vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 2vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 2.05vw 0 -2vw 8.5vw; color: #00A66E">2.1M followers</p>
                            <img src = "../static/images/heart.png" style = "width: 1vw; height: 1vw; margin: 1.8vw 0 0 0.5vw;">
                        </div>
                        <div class = "recommended_locations_wqi_quality" id = "recommended_locations_wqi_quality">
                            <p style = "font-size: 1.2vw; color: #69b900; font-weight: bold; margin: 0.2vw 2vw 0 0;">Good</p>
                            <div class = "wqi_rank" id = "wqi_rank">33</div>
                            <p style = "margin: 0.3vw 0 0 2vw; font-size: 1vw;">ranked 12th in the world</p>
                        </div>
                        <div class = "recommended_locations_weather" id = "recommended_locations_weather">
                            <div class = "temperature" id = "temperature">
                                <img src = "../static/images/temperature4.png" style = "width: 3vw; height: 2.3vw; margin-left: 2vw;">
                                <p style = "margin: 0.25vw 8vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">35</p> 
                            </div>
                            <div class = "wind" id = "wind">
                                <img src = "../static/images/wind3.png" style = "width: 2vw; height: 2vw; margin-top: 0.1vw">
                                <p style = "margin: 0.25vw 9vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">14.8 km/h</p> 
                            </div>
                            <div class = "wet" id = "wet">
                                <img src = "../static/images/wet2.png" style = "margin-top: 0.1vw; width: 1.6vw; height: 2vw">
                                <p style = "margin: 0.4vw 2vw 0.4vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">38%</p> 
                            </div>
                        </div>
                        <div class = "data_provided" id = "data_provided">
                            <div class = "logo" id = "logo">
                                <img src="../static/images/logo.png" alt="AquaEmi's logo" style = "width: 6vw; height: 2vw;">
                            </div>
                            <div class = "text" id = "text">
                                <p style = "font-size: 0.8vw">Data provided by</p>
                                <p style = "font-size: 0.8vw; font-weight: bold; margin-top: -0.5vw;">WQI modeled using satellite data</p>
                            </div>
                            <div class = "more" id = "more">
                                <img src="../static/images/more.png" alt="More information" style = "width: 1vw; height: 1.2vw;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "recommended_locations" id = "recommended_locations">
                    <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                    <div class = "recommended_locations_text" id = "recommended_locations_text">
                        <div class = "recommended_headline" id = "recommended_headline">
                            <p style = "font-size: 1.1vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 2vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 2.05vw 0 -2vw 8.5vw; color: #00A66E">2.1M followers</p>
                            <img src = "../static/images/heart.png" style = "width: 1vw; height: 1vw; margin: 1.8vw 0 0 0.5vw;">
                        </div>
                        <div class = "recommended_locations_wqi_quality" id = "recommended_locations_wqi_quality">
                            <p style = "font-size: 1.2vw; color: #69b900; font-weight: bold; margin: 0.2vw 2vw 0 0;">Good</p>
                            <div class = "wqi_rank" id = "wqi_rank">33</div>
                            <p style = "margin: 0.3vw 0 0 2vw; font-size: 1vw;">ranked 12th in the world</p>
                        </div>
                        <div class = "recommended_locations_weather" id = "recommended_locations_weather">
                            <div class = "temperature" id = "temperature">
                                <img src = "../static/images/temperature4.png" style = "width: 3vw; height: 2.3vw; margin-left: 2vw;">
                                <p style = "margin: 0.25vw 8vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">35</p> 
                            </div>
                            <div class = "wind" id = "wind">
                                <img src = "../static/images/wind3.png" style = "width: 2vw; height: 2vw; margin-top: 0.1vw">
                                <p style = "margin: 0.25vw 9vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">14.8 km/h</p> 
                            </div>
                            <div class = "wet" id = "wet">
                                <img src = "../static/images/wet2.png" style = "margin-top: 0.1vw; width: 1.6vw; height: 2vw">
                                <p style = "margin: 0.4vw 2vw 0.4vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">38%</p> 
                            </div>
                        </div>
                        <div class = "data_provided" id = "data_provided">
                            <div class = "logo" id = "logo">
                                <img src="../static/images/logo.png" alt="AquaEmi's logo" style = "width: 6vw; height: 2vw;">
                            </div>
                            <div class = "text" id = "text">
                                <p style = "font-size: 0.8vw">Data provided by</p>
                                <p style = "font-size: 0.8vw; font-weight: bold; margin-top: -0.5vw;">WQI modeled using satellite data</p>
                            </div>
                            <div class = "more" id = "more">
                                <img src="../static/images/more.png" alt="More information" style = "width: 1vw; height: 1.2vw;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "recommended_locations" id = "recommended_locations">
                    <img src = "../static/images/saigonriver5.png" style = "width: 29vw; height: 18vw;">
                    <div class = "recommended_locations_text" id = "recommended_locations_text">
                        <div class = "recommended_headline" id = "recommended_headline">
                            <p style = "font-size: 1.1vw;"><mark style = "background-color: #fff; font-weight: bold; font-size: 2vw;"> Sai Gon River</mark>, Ho Chi Minh city, Vietnam</p>
                            <p style = "font-size: 0.8vw; font-weight: bold; margin: 2.05vw 0 -2vw 8.5vw; color: #00A66E">2.1M followers</p>
                            <img src = "../static/images/heart.png" style = "width: 1vw; height: 1vw; margin: 1.8vw 0 0 0.5vw;">
                        </div>
                        <div class = "recommended_locations_wqi_quality" id = "recommended_locations_wqi_quality">
                            <p style = "font-size: 1.2vw; color: #69b900; font-weight: bold; margin: 0.2vw 2vw 0 0;">Good</p>
                            <div class = "wqi_rank" id = "wqi_rank">33</div>
                            <p style = "margin: 0.3vw 0 0 2vw; font-size: 1vw;">ranked 12th in the world</p>
                        </div>
                        <div class = "recommended_locations_weather" id = "recommended_locations_weather">
                            <div class = "temperature" id = "temperature">
                                <img src = "../static/images/temperature4.png" style = "width: 3vw; height: 2.3vw; margin-left: 2vw;">
                                <p style = "margin: 0.25vw 8vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">35</p> 
                            </div>
                            <div class = "wind" id = "wind">
                                <img src = "../static/images/wind3.png" style = "width: 2vw; height: 2vw; margin-top: 0.1vw">
                                <p style = "margin: 0.25vw 9vw 0.25vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">14.8 km/h</p> 
                            </div>
                            <div class = "wet" id = "wet">
                                <img src = "../static/images/wet2.png" style = "margin-top: 0.1vw; width: 1.6vw; height: 2vw">
                                <p style = "margin: 0.4vw 2vw 0.4vw 0.5vw; font-size: 1.3vw; font-weight: bold; color: #94D53F">38%</p> 
                            </div>
                        </div>
                        <div class = "data_provided" id = "data_provided">
                            <div class = "logo" id = "logo">
                                <img src="../static/images/logo.png" alt="AquaEmi's logo" style = "width: 6vw; height: 2vw;">
                            </div>
                            <div class = "text" id = "text">
                                <p style = "font-size: 0.8vw">Data provided by</p>
                                <p style = "font-size: 0.8vw; font-weight: bold; margin-top: -0.5vw;">WQI modeled using satellite data</p>
                            </div>
                            <div class = "more" id = "more">
                                <img src="../static/images/more.png" alt="More information" style = "width: 1vw; height: 1.2vw;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class = "footer" id = "footer">
                <img src="../static/images/logo.png" alt="AquaEmi's logo" style = "width: 19vw; height: 6.5vw; margin-top: 1.3vw">
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
                    <p style = "font-size: 1.2vw; font-weight: bold; color: #008A5C">JOIN OUR MAILING LIST!</p>
                    <input type = "email" class = "email_mailing" id = "email" name = "email" placeholder="Email address">
                    <i class="fa-solid fa-arrow-right fa-sm" style="color: #008a5c;"></i><br>
                    <div class = "social_media" id = "social_media">
                        <i class="fa-brands fa-square-instagram fa-sm" style="color: #01a26d; margin: 0 0.1vw"></i>
                        <i class="fa-brands fa-pinterest fa-sm" style="color: #01a26d; margin: 0 0.1vw"></i>
                        <i class="fa-brands fa-twitter fa-sm" style="color: #01a26d; margin: 0 0.1vw"></i>
                        <i class="fa-brands fa-facebook fa-sm" style="color: #01a26d; margin: 0 0.1vw"></i>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>