<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>QBST - Tin tức</title>
        
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel = "stylesheet" href = "../static/news.css">
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
                            <p><a href = "travel.php" title = "Du lịch" style = "text-decoration: none; color: #000000;">Du lịch</a></p>
                            <p><a href = "news.php" title = "Tin tức" style = "text-decoration: none; color: #000000;"><u>Tin tức</u></a></p>
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
                <div class = "news_content" id = "news_content">
                    <div class = "headline" id = "headline">
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><img src = "../static/images/news1.png" alt="first article" style = "width: 100%; height: 70%;"></a>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html" class = "name"><p style = "font-size: 2vw; font-weight: bold; margin-left: 0.5vw; margin-top: 1vw;">Ánh ban mai trên phía Tây Nam tỉnh Quảng Bình</p>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><p style = "font-size: 1vw; margin-top: -1vw; margin-left: 0.5vw; font-style: italic;">"Giữa dãy Trường Sơn hùng vỹ, nằm về phía Tây Nam tỉnh Quảng Bình, Suối nước nóng Bang tại xã Kim Thủy, huyện Lệ Thủy, tỉnh Quảng Bình từ bao năm vẫn sục sôi, huyền ảo uốn lượn quanh những cánh rừng tự nhiên cổ kính ẩn mình chờ đợi một ngày được đánh thức […]"</p></a>
                        <a href = "https://www.quangbinhtravel.vn/anh-ban-mai-tren-phia-tay-nam-tinh-quang-binh.html"><p style = "font-size: 1vw; color: #000000; margin-left: 0.5vw">2 hours ago</p></a>
                    </div>
                    <div class = "headline_others" id = "headline_others">
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html"><img src="../static/images/news2.png" alt="second article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Du lịch Quảng Bình mùa đông đi đâu?</p></a>
                            <a href = "https://www.quangbinhtravel.vn/du-lich-quang-binh-mua-dong-di-dau.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">7 hours ago</p></a>
                        </div>
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html"><img src="../static/images/news3.png" alt="third article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Tiên phong làm “du lịch có trách nhiệm”</p></a>
                            <a href = "https://www.quangbinhtravel.vn/tien-phong-lam-du-lich-co-trach-nhiem.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">A day ago</p></a>
                        </div>
                        <div class = "small_article" id = "small_article">
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html"><img src="../static/images/news4.png" alt="fourth article" style = "width: 100%; height: 90%;"></a>
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html" class = "name"><p style = "font-size: 1vw; font-weight: bold; margin: 0.3vw 0.2vw 0 0.3vw">Tháo gỡ vướng mắc để du lịch Quảng Bình phát triển bền vững</p></a>
                            <a href = "https://www.quangbinhtravel.vn/thao-go-vuong-mac-de-du-lich-quang-binh-phat-trien-ben-vung.html"><p style = "font-size: 0.6vw; color: #000000; margin: 0.3vw 0.2vw 0 0.3vw">Two days ago</p></a>
                        </div>
                    </div>
                </div>
                <div class = "other_articles" id = "other_articles">
                    <img src="../static/images/news5.png" alt="fifth article" style = "width: 30%; height: 20%;">
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
    </body>
</html>