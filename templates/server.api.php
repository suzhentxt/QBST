<?php
include 'config.php';
// Kết nối đến cơ sở dữ liệu
// (Phần kết nối đã được định nghĩa ở trên)

// Xử lý request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Query để lấy dữ liệu từ bảng trong cơ sở dữ liệu (ví dụ: 'users')
    $sql = "SELECT * FROM mywater";

    // Thực thi truy vấn và lấy dữ liệu
    $result = $conn->query($sql);

    // Kiểm tra nếu có dữ liệu trả về từ truy vấn
    if ($result->num_rows > 0) {
        // Chuyển dữ liệu thành mảng kết hợp và encode thành JSON
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        // Nếu không có dữ liệu
        echo "No data found";
    }
} else {
    // Phản hồi với lỗi method không hợp lệ
    http_response_code(405);
    echo json_encode(array("message" => "Method Not Allowed"));
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>