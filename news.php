<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Tin tức</title>
        
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
        <link href="css/news.css" rel="stylesheet">

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
                    <a href="water.php" class="nav-item nav-link">Nước</a>
                    <a href="news.php" class="nav-item nav-link active"><u>Tin tức</u></a>
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
                <div class = "news_content" id = "news_content">
                    <div class = "headline" id = "headline">
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><img src = "css/images/news1.png" alt="first article" style = "width: 100%; height: 70%;"></a>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html" class = "name"><p style = "font-size: 2vw; font-weight: bold; margin-left: 0.5vw; margin-top: 1vw;">Ánh ban mai trên phía Tây Nam tỉnh Quảng Bình</p>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><p style = "font-size: 1vw; margin-top: -1vw; margin-left: 0.5vw; font-style: italic;">"Giữa dãy Trường Sơn hùng vỹ, nằm về phía Tây Nam tỉnh Quảng Bình, Suối nước nóng Bang tại xã Kim Thủy, huyện Lệ Thủy, tỉnh Quảng Bình từ bao năm vẫn sục sôi, huyền ảo uốn lượn quanh những cánh rừng tự nhiên cổ kính ẩn mình chờ đợi một ngày được đánh thức […]"</p></a>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><p style = "font-size: 1vw; color: #000000; margin-left: 0.5vw">2 hours ago</p></a>
                    </div>
                    <div class = "headline_others" id = "headline_others">
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html"><img src="css/images/news2.png" alt="second article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Du lịch Quảng Bình mùa đông đi đâu?</p></a>
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">7 hours ago</p></a>
                        </div>
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html"><img src="css/images/news3.png" alt="third article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Tiên phong làm “du lịch có trách nhiệm”</p></a>
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">A day ago</p></a>
                        </div>
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html"><img src="css/images/news4.png" alt="fourth article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Tháo gỡ vướng mắc để du lịch Quảng Bình phát triển bền vững</p></a>
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">Two days ago</p></a>
                        </div>
                    </div>
                </div>
                <div class = "other_articles" id = "other_articles">
                    <img src="css/images/news5.png" alt="fifth article" style = "width: 30%; height: 20%;">
                    <div class = "review_article" id = "review_article">
                        <a href = "https://www.quangbinhtravel.vn/le-hoi-mung-com-moi-cua-nguoi-bru-van-kieu-tai-quang-binh.html" class = "name"><p style = "font-size: 1.5vw; font-weight: bold; margin: 0.3vw 0.2vw 0 1vw">Lễ hội mừng cơm mới của người Bru Vân Kiều tại Quảng Bình</p></a>
                        <a href = "https://www.quangbinhtravel.vn/le-hoi-mung-com-moi-cua-nguoi-bru-van-kieu-tai-quang-binh.html"><p style = "font-size: 1vw; margin-left: 1vw; font-style: italic;">"Quảng Bình là tỉnh có truyền thống lịch sử – văn hoá lâu đời, nơi con người đã tụ cư sinh sống từ ngàn xưa; nơi chứa đựng nhiều dấu tích văn hoá của các lớp dân cư trong tiến trình lịch sử của dân tộc. Lễ hội mừng cơm mới của người Bru Vân […]"</p></a>
                        <a href = "https://www.quangbinhtravel.vn/le-hoi-mung-com-moi-cua-nguoi-bru-van-kieu-tai-quang-binh.html"><p style = "font-size: 0.8vw; margin: -0.5vw 0.2vw 0 1vw; color: #000000">Sat, July 29, 2023</p></a>
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