<?php include 'db.php'; ?>
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
    <script src="js/app.js"></script>
    <title>Dictionnary project</title> 
  </head>

  <body>
    <div class="container text-center">
      <div class="row">
        <!-- the main app surface -->
        <h3 class="text-center text-info m-auto pt-5">Welcome to <strong>getWord</strong> Dictionnary</h3>
        <div class="col-10 main-container m-auto">
          <div class="container search-container">
            <div class="card container shadow mt-3 pb-3">
              <div class="card-body">
                <h5 class="text-info card-title">Look for A word</h5>
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