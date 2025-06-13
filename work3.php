<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ตรวจสอบจำนวนวันในเดือน</title>
</head>
<body>

<h2>กรอกชื่อเดือน (ภาษาไทย)</h2>
<form method="post">
  <label>เดือน:</label>
  <input type="text" name="month" required>
  <button type="submit">ตรวจสอบ</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $month = trim($_POST['month']);

    echo "<p>คุณเลือกเดือน: <strong>$month</strong></p>";

    switch ($month) {
        case "มกราคม":
        case "มีนาคม":
        case "พฤษภาคม":
        case "กรกฎาคม":
        case "สิงหาคม":
        case "ตุลาคม":
        case "ธันวาคม":
            echo "เดือน $month มี 31 วัน";
            break;
        case "เมษายน":
        case "มิถุนายน":
        case "กันยายน":
        case "พฤศจิกายน":
            echo "เดือน $month มี 30 วัน";
            break;
        case "กุมภาพันธ์":
            echo "เดือน $month มี 28 หรือ 29 วัน";
            break;
        default:
            echo "ไม่พบชื่อเดือน กรุณากรอกชื่อเดือนให้ถูกต้อง (เช่น: ธันวาคม)";
    }
}
?>

</body>
</html>
