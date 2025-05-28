<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grades = $_POST['grades']; // Grade Points
    $credits = $_POST['credits']; // Corresponding Credits

    $totalGradePoints = 0;
    $totalCredits = 0;

    for ($i = 0; $i < count($grades); $i++) {
        $totalGradePoints += $grades[$i] * $credits[$i];
        $totalCredits += $credits[$i];
    }

    $spi = $totalGradePoints / $totalCredits;

    echo json_encode(["SPI" => round($spi, 2)]);
}
?>
