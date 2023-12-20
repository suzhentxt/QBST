<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Tin tức</title>
        
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel = "stylesheet" href = "css/travel.css">
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
                        <img src="css/images/logo.png" onclick="location.href='{{url_for('home_page')}}';">
                        <div class = "navigation_keys">
                            <div class = "subjects">
                                <p><a href = "index.php" title = "Trang Chủ" style = "text-decoration: none; color: #000000;">Trang Chủ</a></p>
                                <p><a href = "water.php" title = "Nước" style = "text-decoration: none; color: #000000;">Nước</a></p>
                                <p id="current"><a href = "travel.php" title = "Du lịch" style = "text-decoration: none; color: #000000;">Du lịch</a></p>
                                <p><a href = "news.php" title = "Tin tức" style = "text-decoration: none; color: #000000;">Tin tức</a></p>
                            </div>
                            <div class = "tools" id = "tools">
                                <img src = "css/images/search.png" alt="search icon" style = "width: 2vw" id = "search_engine"></a>
                                <a href = "index"><img src = "css/images/notifications.png" alt="notifications icon" style = "width: 1.75vw"></a>
                                <a href = "profile"><img src = "css/images/profile.png" alt="profile icon" style = "width: 1.7vw;"></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
        <section>
            <div class = "content" id = "content">

                <div class = "background" id = "background">
                    <img src="css/images/water1_headline.png" style = "width: 100%; height: 25vw">
                    <p class = "over_background_header">Kiểm tra nguồn nước của bạn</p>
                    <p class = "over_background_head">“Với hệ thống IoT, thông tin về nguồn nước được cập nhật liên tục”</p>
                </div>

                <div class = "near_location" id = "near_location">
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_pn.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Động Phong Nha</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "water.php" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_ts.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Động Tiên Sơn</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_td.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Động Thiên Đường</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_ht.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Hang Tối</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                </div>

                <div class = "near_location" id = "near_location">
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_tc.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Hang Thuỷ Cung</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_tl.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Hang Tú Làn</p>
                            <p>Minh Hóa, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_he.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Hang Én</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
                    <div class = "near_location_box" id = "near_location_box">
                        <img src = "css/images/water1_sd.png" style = "width: 21.5vw; height: 18vw; ">
                        <div class = "near_location_box_text" id = "near_location_box_text">
                            <p style = "font-weight: bold; font-size: 1.5vw;">Hang Sơn Đoòng</p>
                            <p>Bố Trạch, Quảng Bình</p>
                            <u><a href = "" style = "font-size: 1vw; color: #000; font-weight: bold;">Xem chi tiết →</a></u>
                        </div>
                    </div>
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
    </body>
</html>