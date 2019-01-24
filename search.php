
<?php

header('Content-Type: text/html; charset=utf-8');
include 'db.php';
if (isset($_POST) && !empty($_POST)) {
    $keyword = $_POST['keywrd'];
    $limits;
    if (isset($_POST['limits'])) {
        $limits = $_POST['limits'];
    } else {
        $limits = 10;
    }

    //count real num of results
    $all = "select * from engaradictionary where eng like '$keyword%' or ara like '$keyword%'";
    $real = mysqli_query($connect, $all);
    $count_real = mysqli_num_rows($real);
    
    
    // set limit to save resources
    $get_data = "select * from engaradictionary where eng like '$keyword%' or ara like '$keyword%' limit $limits";

    $res = mysqli_query($connect, $get_data);

    $count_res = mysqli_num_rows($res);
    if ($count_res > 0) {

        echo "<tr>";
        echo "<td colspan='2' class='text-left border-0' value='" . $keyword . "' id='ac-keyword' rel='" . $limits . "'> <h5 class='text-info'>" . $count_real . " word found</h5></td>";
        echo "</tr>";
        echo "";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>" . $row['eng'] . "</td>";
            echo "<td dir='rtl'>" . $row['ara'] . "</td>";
            echo "</tr>";

        }
        //only show the button more if results are more than the number of results and the limits is less than the real numbre of results
        if ($count_real > 10 && $limits<$count_real ) {
            echo "<tr>";
            echo "<td colspan='2' class='text-center'> <input type='submit' value='More' class='btn btn-primary' id='show-more'/></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo "<td>Nothing found</td>";
        echo "</tr>";
    }
}
?>


<script>
    $("#show-more").click(function () { 
        var c=parseFloat($("#ac-keyword").attr("rel"));
        var ac_keyword=$("#ac-keyword").attr("value");
        c=c+10;
        $.ajax({
            type: "POST",
            url: "search.php",
            data: {keywrd:ac_keyword,limits:c},
            success: function (response) {
                $("#search-results").html(response);
            }
        });
    });

</script>