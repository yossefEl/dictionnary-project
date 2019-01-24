<?php
include 'db.php';
    $nb_of_res = 10;

    if (!empty($POST['nbOfResults'])) {
        $nb_of_res = $POST['nbOfResults'];
    }
    $get_data = "select * from engaradictionary limit $nb_of_res";
    $res = mysqli_query($connect, $get_data);
    $count_res = mysqli_num_rows($res);
    if ($count_res > 0) {
echo '<div class="col-10 main-container text-center">';
echo '<div class="container search-container">';
  echo '<div class="card container shadow mt-5 pb-3">';
    echo '<div class="card-body">';
      echo '<h5 class="card-title text-info">Search for A Word</h5>';
      echo '<p class="card-text">';        
        echo '<div class="container">';
            echo '<table class="table table-light border-0 text-left">';
              echo 'echo "<tbody id="show-all-result"> "';
                            while ($row = mysqli_fetch_assoc($res)) {

                            
                            }
                        }
                    
              echo '</tbody></table></div></p></div></div></div></form></div></div>';
              ?>