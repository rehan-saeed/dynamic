<html>
    <head>
        <!-- <link rel="stylesheet" href="style/css/bootstrap.min.css">
            <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css"> -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>

            <div class="container">
                    <h2>Animated Alerts</h2>
                    <p>The .fade and .show classes adds a fading effect when closing the alert message.</p>
                    <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Success!</strong> This alert box could indicate a successful or positive action.
                    </div>
                    <div class="alert alert-info alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                    </div>
                    <div class="alert alert-primary alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Primary!</strong> Indicates an important action.
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Secondary!</strong> Indicates a slightly less important action.
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Dark!</strong> Dark grey alert.
                    </div>
                    <div class="alert alert-light alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Light!</strong> Light grey alert.
                    </div>

                    <div class="alert alert-danger alert-dismissible fade show ">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>danger</strong>
                            
                        </div>
                  </div>




                  
<div class="container">
        <h2>Button Styles</h2>
        <button type="button" class="btn">Basic</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-link">Link</button> 

        <br> <br>
        
        <div class="btn-group">
                <button type="button" class="btn btn-outline-warning"><span class="spinner-grow spinner-grow-sm"></span>Warning</button>
                <button type="button" class="btn btn-danger"><span class="spinner-border spinner-border-sm"></span>Danger</button>
                <button type="button" class="btn btn-dark">Dark</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-link">Link</button> 
          </div>
      </div>

      <div class="container">
            <h2>Nesting Button Groups</h2>
            <p>Nest button groups to create dropdown menus:</p>
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Apple</button>
              <button type="button" class="btn btn-primary">Samsung</button>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Sony
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tablet</a>
                  <a class="dropdown-item" href="#">Smartphone</a>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
                <h2>Badge inside a Button</h2>
                <button type="button" class="btn btn-primary">
                  Messages <span class="badge badge-light">4</span>
                </button>

                </div>

                <div class="container">
                        <h2>Card Image</h2>
                        <p>Image at the top (card-img-top):</p>
                        <div class="card" style="width:400px">
                          <img class="card-img-top" src="img/r1.jpg" alt="Card image" style="width:100%">
                          <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>


                        
<div class="container">
        <h2>Pagination - Disabled State</h2>
        <p>Add class .disabled if a page for some reason is disabled:</p>
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>






                  
                  




        
    </body>
</html>