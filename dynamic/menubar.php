<?php
              include ('config.php');
              include ('dbfunction.php');
              $navbars=getnav();
              foreach ($navbars as $navbar):
                  ?>

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="col-sm-1"><a class="navbar-brand" href="img/apple.png" target="_blank"  ><img  class="img-fluid" src="<?php echo $navbar['brand']?>" alt="logo"></a></div>
      
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo $navbar['home']?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo $navbar['gallerylink']?>"><?php echo $navbar['gallery']?></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo $navbar['aboutlink']?>"><?php echo $navbar['about']?></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo $navbar['contactlink']?>"><?php echo $navbar['contact']?></a>
              </li>
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#">Action 1</a>
                      <a class="dropdown-item" href="#">Action 2</a>
                  </div>
              </li> -->
          </ul>

          <?php endforeach ?>
          
      </div>
  </nav>
