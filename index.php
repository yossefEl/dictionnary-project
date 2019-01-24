<?php include 'db.php' ; ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Dictionnary project</title>

    <script>
      $(document).ready(function(){
        $("#search-text").keyup( function()
        {
          
          var keyword=$(this).val();
          if(keyword!='')
          {
            $.ajax({
            url:'search.php',
            data:{keywrd:keyword},
            type:'POST',
            success:function(data)
            {
              $("#search-results").html(data);
            }
          });
          }
          else{
            $("#search-results").html("<span class='text-info text-left'>Waiting for you :)</span>");

          }
        }

        );
      });
    </script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- browse action -->
        <div class="col-2 bg-info text-white" id="my-nav">
          <nav class="nav flex-column mt-5">
            <li class="nav-item p-1">
              <a class="nav-link active text-white d-inline" href="javascript:void(0)">
                <i class="material-icons pr-3 icon-mb">search</i>
                Search</a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link active text-white d-inline" href="javascript:void(0)">
                <i class="material-icons pr-3 icon-mb">visibility</i>
                Show All</a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link active text-white d-inline" href="javascript:void(0)">
                <i class="material-icons pr-3 icon-mb">add_box</i>
                Add</a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link active text-white d-inline" href="javascript:void(0)">
                <i class="material-icons pr-3 icon-mb">update</i>
                Update</a>
            </li>
            <li class="nav-item p-1">
              <a class="nav-link active text-white d-inline " href="javascript:void(0)">
                <i class="material-icons pr-3 icon-mb">delete</i>
                Remove</a>
            </li>
          </nav>
        </div>
        <!-- the main app surface -->
        <div class="col-10 main-container text-center">

          <div class="container">
            <div class="card container shadow mt-5 pb-3">
              <div class="card-body">
                <h5 class="card-title text-info">Search for A Word</h5>
                <p class="card-text">
                  <form method="post" action="" class="container">
                    <div class="form-group">
                      <input class="form-control" type="text" id="search-text" placeholder="looking for a word meaning...">
                    </div>
                  </form>
                  <div class="container">
                      <table class="table table-light border-0 text-left">
                        <tbody id="search-results">
                          <!-- data comes from search.php dynamically -->
                        </tbody>
                      </table>
                  </div>
                </p>
              </div>
            </div>
          </div>

          </form>

        </div>
      </div>

    </div>


  </body>

  </html>