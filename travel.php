<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Du lịch</title>
        
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
        <link href="css/travel.css" rel="stylesheet">

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
                    <a href="travel.php" class="nav-item nav-link active"><u>Du lịch</u></a>                
                    <a href="water.php" class="nav-item nav-link">Nước</a>
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