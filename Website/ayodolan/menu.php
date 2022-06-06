<nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1" style="color: black;">
          <div class="menu-collapse" style="font-size: 1rem;">
            <a class="u-button-style u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Wisata.php">Wisata</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Booking.php">Booking</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Tentang-Kami.php">Tentang Kami</a></li>
              <li class="u-nav-item">
                <?php
                  if(isset($_SESSION['status'])){
                    echo "</li><li class='u-nav-item'>
                    <div class='dropdown'>
                      <a class='btn dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Account
                      </a>
                      <div class='dropdown-menu' aria-labelledby='dropdownMenuLink' style='padding: 5px'>
                        <img src='ayodolan-admin/admin/images/user-2-icon.png' class='u-image u-image-circle' width='90px' style='margin-top:10px; display: block; margin-left: auto; margin-right: auto; margin-bottom:10px'>
                        <center> <a style='font-size:13px; padding-left:10px; padding-right:10px;'>"; 
                          echo $_SESSION['username'];
                        echo "</a></center><br>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='profile.php'>Profile</a>
                        <a class='dropdown-item' href='logout.php'>Logout</a>
                      </div>
                    </div>
                  </li>";
                  } else {
                    echo "</li><li class='u-nav-item'>
                    <div class='dropdown'>
                      <a class='btn dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Login
                      </a>
                    
                      <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                        <a class='dropdown-item' href='Login.php'>Login as User</a>
                        <a class='dropdown-item' href='ayodolan-admin/index.php'>Login as Admin</a>
                      </div>
                    </div>
                  </li>";
                  }
                ?>
              </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Wisata.php">Wisata</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Booking.php">Booking</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Tentang-Kami.php">Tentang Kami</a></li>
                  <li class="u-nav-item">
                    <?php
                      if(isset($_SESSION['status'])){
                        echo "</li><li class='u-nav-item'>
                        <div class='dropdown'>
                          <a class='btn dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Account
                          </a>
                          <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                            <a class='dropdown-item' href='profile.php'>Profile</a>
                            <a class='dropdown-item' href='logout.php'>Logout</a>
                          </div>
                        </div>
                      </li>";
                      } else {
                        echo "</li><li class='u-nav-item'>
                        <div class='dropdown'>
                          <a class='btn dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Login
                          </a>
                          <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                            <a class='dropdown-item' href='Login.php'>Login as User</a>
                            <a class='dropdown-item' href='ayodolan-admin/index.php'>Login as Admin</a>
                          </div>
                        </div>
                      </li>";
                      }
                    ?>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>