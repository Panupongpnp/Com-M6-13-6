<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ตรวจสอบช่วงวัยจากอายุ</title>
</head>
<body>

<h2>กรอกอายุของคุณ</h2>
<form method="post">
  <label>อายุ:</label>
  <input type="number" name="age" required>
  <button type="submit">ตรวจสอบ</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $age = $_POST['age'];

    echo "<p>อายุของคุณคือ: <strong>$age</strong> ปี</p>";

    switch (true) {
        case ($age >= 60):
            echo "คุณอยู่ในวัยสูงอายุ";
            break;
        case ($age >= 40):
            echo "คุณอยู่ในวัยกลางคน";
            break;
        case ($age >= 20):
            echo "คุณอยู่ในวัยผู้ใหญ่";
            break;
        case ($age >= 12):
            echo "คุณอยู่ในวัยรุ่น";
            break;
        case ($age >= 6):
            echo "คุณอยู่ในวัยเด็ก";
            break;
        case ($age >= 0):
            echo "คุณอยู่ในวัยทารก";
            break;
        default:
            echo "กรุณากรอกอายุที่ถูกต้อง";
    }
}
?>

</body>
</html>
