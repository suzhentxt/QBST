function fetchData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Xử lý dữ liệu nhận được, ví dụ: cập nhật HTML
            document.getElementById("data-container").innerHTML = "Water Data: " + this.responseText;
        }
    };
    xhttp.open("POST", "water.php", true);
    xhttp.send();
}

// Tự động làm mới mỗi giây
// setInterval(fetchData, 1000);