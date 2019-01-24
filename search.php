
<?php

header('Content-Type: text/html; charset=utf-8' );
include 'db.php';
if (isset($_POST) && !empty($_POST)) {
    $keyword = $_POST['keywrd'];
    $get_data = "select * from engaradictionary where eng like '$keyword%' or ara like '$keyword%' limit 10";
    mysqli_query($connect,"set NAMES utf8");
    $res = mysqli_query($connect, $get_data);
    $count_res = mysqli_num_rows($res);
    if ($count_res > 0) {

        echo "<tr>";
        echo "<td colspan='2' class='text-left border-0'> <h5 class='text-info'>" . $count_res . " word found</h5></td>";
        echo "</tr>";
        echo "";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>" . $row['eng'] . "</td>";
            echo "<td dir='rtl'>" . $row['ara'] . "</td>";
            echo "</tr>";

        }
        echo "<tr>";
        echo "<td colspan='2' class='text-center'> <input type='submit' value='More' class='btn btn-primary'/></td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>Nothing found</td>";
        echo "</tr>";
    }
} else
    echo "I'm waiting for you :P";
?>