<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ví dụ AJAX Poll đơn giản</title>
    <script>
        // Hàm thực hiện AJAX poll
        function pollData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("randomNumber").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getRandomNumber.php", true); // Gửi yêu cầu GET đến tập tin getRandomNumber.php
            xhttp.send();
        }

        // Hàm poll dữ liệu mỗi 3 giây
        setInterval(function() {
            pollData();
        }, 3000); // Thời gian poll, ví dụ 3 giây
    </script>
</head>
<body>
    <h2>Số ngẫu nhiên:</h2>
    <div id="randomNumber">Đang tải...</div>
</body>
</html>
