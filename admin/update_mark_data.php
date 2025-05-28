<?php
if (isset($_POST['submit'])) {
    include('../dbcon.php');

    // Roll number (received from hidden input)
    $rollno = $_POST['rollno'];

    // 1st Semester Grades
    $grade1_MA1011 = $_POST['grade1_MA1011'];
    $grade1_CP1012 = $_POST['grade1_CP1012'];
    $grade1_CC1013 = $_POST['grade1_CC1013'];
    $grade1_ML1014 = $_POST['grade1_ML1014'];
    $grade1_DS1015 = $_POST['grade1_DS1015'];

    // 2nd Semester Grades
    $grade2_PH2011 = $_POST['grade2_PH2011'];
    $grade2_DS2012 = $_POST['grade2_DS2012'];
    $grade2_CP2013 = $_POST['grade2_CP2013'];
    $grade2_PHP2014 = $_POST['grade2_PHP2014'];
    $grade2_SQL2015 = $_POST['grade2_SQL2015'];
    $grade2_AI2016 = $_POST['grade2_AI2016'];

    // Update query (make sure these column names exist in your database)
    $sql = "UPDATE `user_mark` SET  
        `grade1_MA1011` = '$grade1_MA1011',
        `grade1_CP1012` = '$grade1_CP1012',
        `grade1_CC1013` = '$grade1_CC1013',
        `grade1_ML1014` = '$grade1_ML1014',
        `grade1_DS1015` = '$grade1_DS1015',
        `grade2_PH2011` = '$grade2_PH2011',
        `grade2_DS2012` = '$grade2_DS2012',
        `grade2_CP2013` = '$grade2_CP2013',
        `grade2_PHP2014` = '$grade2_PHP2014',
        `grade2_SQL2015` = '$grade2_SQL2015',
        `grade2_AI2016` = '$grade2_AI2016'
        WHERE `u_rollno` = '$rollno'";

    $run = mysqli_query($con, $sql);

    if ($run) {
        echo "
        <script>
            alert('Data Updated Successfully');
            window.open('updatemark_form.php?sid=$rollno', '_self');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Error updating data');
            window.open('updatemark_form.php?sid=$rollno', '_self');
        </script>
        ";
    }
}
?>
