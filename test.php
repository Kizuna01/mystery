<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 123;
} else {
    http_response_code(405); // 返回 405 狀態碼
    echo "Method Not Allowed";
}
?>
