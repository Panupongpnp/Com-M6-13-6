<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ตรวจสอบเกรด</title>
</head>
<body>

<h2>โปรแกรมคำนวณเกรดแบบง่าย</h2>

<form method="post">
  <label>ป้อนคะแนนของคุณ:</label>
  <input type="number" name="score" required>
  <button type="submit">ประเมินผล</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $score = $_POST['score'];

    echo "<hr>";
    echo "<p>คะแนนที่คุณกรอก: <strong>$score</strong></p>";

    if ($score > 80) {
        $grade = "คุณได้เกรด A";
    } elseif ($score > 70) {
        $grade = "คุณได้เกรด B";
    } elseif ($score > 60) {
        $grade = "คุณได้เกรด C";
    } elseif ($score > 50) {
        $grade = "คุณได้เกรด D";
    } else {
        $grade = "คุณได้เกรด F";
    }

    echo "<p>ผลการประเมิน: คุณได้เกรด <strong>$grade</strong></p>";
}
?>

</body>
</html>
