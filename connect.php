<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['first_name'] ?? '';
    $b = $_POST['last_name'] ?? '';
    $c = $_POST['dob'] ?? '';
    $d = $_POST['gender'] ?? '';
    $e = $_POST['email'] ?? '';
    $f = $_POST['phone'] ?? '';
    $g = $_POST['address'] ?? '';
    $h = $_POST['course'] ?? '';
    $i = $_POST['enrollment_year'] ?? '';
    $j = $_POST['roll_number'] ?? '';

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'crescent');

    $sql = "INSERT INTO student (first_name, last_name, dob, gender, email, phone, address, course, enrollment_year, roll_number)
            VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";

    if (mysqli_query($con, $sql)) {
        echo '<script>';
        echo 'alert("Registered successfully....");';
        echo 'window.location.href = "register.php";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Error: ' . mysqli_error($con) . '");';
        echo 'window.location.href = "register.php";';
        echo '</script>';
    }

    mysqli_close($con);
}
?>
