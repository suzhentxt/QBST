<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>AquaEmi - Info</title>
        <meta name = "description" content = "[Description about AquaEmi]">
        <link rel = "stylesheet" type = "text/css" href = "../static/info.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
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
                    <img src="../static/images/logo.png" alt="AquaEmi's logo" style = "width: 12.5vw; height: 4.5vw;" onclick="location.href='{{url_for('home_page')}}';">
                    <div class = "navigation_keys" id = "navigation_keys">
                        <div class = "subjects" id = "subjects">
                            <p><a href = "index" title = "My water" style = "text-decoration: none; color: #00A66F;">My water</a></p>
                            <p><a href = "map" title = "Map" style = "text-decoration: none; color: #00A66F;">Map</a></p>
                            <p><a href = "travel" title = "Travel" style = "text-decoration: none; color: #00A66F;">Travel</a></p>
                            <p><a href = "news" title = "News & Rankings" style = "text-decoration: none; color: #00A66F;">News & Rankings</a></p>
                            <p><a href = "info" title = "Info" style = "text-decoration: none; color: #00A66F;">Info</a></p>
                        </div>
                        <div class = "tools" id = "tools">
                            <img src = "../static/images/search.png" alt="AquaEmi's search icon" style = "width: 2vw" id = "search_engine"></a>
                            <a href = "index"><img src = "../static/images/notifications.png" alt="AquaEmi's notifications icon" style = "width: 1.75vw"></a>
                            <a href = "profile"><img src = "../static/images/profile.png" alt="AquaEmi's profile icon" style = "width: 1.7vw;"></a>
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
                <div class = "background" id = "background">
                    <img src="../static/images/info_background.jpeg" alt="AquaEmi's background" style = "width: 100%; height: 20vw">
                    <p class = "over_background_header">WATER QUALITY INFORMATION</p>
                    <p class = "over_background_head">ANYTIME ANYWHERE!</p>
                    <img src="../static/images/turtle.png" class = "over_background_image" alt="AquaEmi's turtle uwu" style = "margin-top: -5vw; width: 2%; height: 8%;">
                </div>
                <div class = "reason" id = "reason">
                    <div class = "reason_head" id = "reason_head">
                        <p style = "font-size: 2.5vw">Why choosing AquaEmi?</p>
                        <p style = "font-size: 1vw; margin-top: -2vw; color: #808080">We aim to identify pollution sources, monitor water quality and assess environmental impacts</p>
                    </div>
                    <div class = "reason_content" id = "reason_content">
                        <div class = "monitoring" id = "monitoring">
                            <img src="../static/images/map_reason.png" alt="AquaEmi's monitoring reason" style = "width: 55%; height: 50%;">
                            <p style = "font-size: 1.4vw; font-weight: bold;">Advanced Geolocation-Based Monitoring</p>
                            <p style = "font-size: 1vw;">AquaEmi utilizes cutting-edge geolocation tech to pinpoint pollution sources, assess water quality in real-time, and provide timely alerts to authorities and communities</p>
                        </div>
                        <div class = "visual" id = "visual">
                            <img src="../static/images/visual_reason.png" alt="AquaEmi's visual reason" style = "width: 75%; height: 50%;">
                            <p style = "font-size: 1.4vw; font-weight: bold;">Advanced Geolocation-Based Monitoring</p>
                            <p style = "font-size: 1vw;">AquaEmi utilizes cutting-edge geolocation tech to pinpoint pollution sources, assess water quality in real-time, and provide timely alerts to authorities and communities</p>
                        </div>
                        <div class = "solution" id = "solution">
                            <img src="../static/images/solution_reason.png" alt="AquaEmi's visual reason" style = "width: 40%; height: 50%;">
                            <p style = "font-size: 1.4vw; font-weight: bold;">Advanced Geolocation-Based Monitoring</p>
                            <p style = "font-size: 1vw;">AquaEmi utilizes cutting-edge geolocation tech to pinpoint pollution sources, assess water quality in real-time, and provide timely alerts to authorities and communities</p>
                        </div>
                    </div>
                </div>
                <div class = "about_us" id = "about_us">
                    <p style = "font-size: 2.5vw">About us</p>
                    <img src="../static/images/hipster_intro.png" alt="AquaEmi's Hipster Intro" style = "width: 40%; height: 50%; margin-right: 5vw">
                    <img src="../static/images/hacker_intro.png" alt="AquaEmi's Hacker Intro" style = "width: 40%; height: 50%;">
                </div>
                <div class = "questions" id = "questions">
                    <p style = "font-size: 2.5vw">Any questions?</p>
                    <div class = "questions_mailing" id = "questions_mailing">
                        <p style = "font-size: 1.5vw; font-weight: bold; color: #008A5C; margin-top: -1vw; margin-left: 25%;">JOIN OUR MAILING LIST!</p>
                        <input type = "email" class = "email" id = "email" name = "email" placeholder="Email address">
                        <i class="fa-solid fa-arrow-right" style="color: #008a5c; margin-top: 1.5vw; margin-left: -1vw"></i>
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