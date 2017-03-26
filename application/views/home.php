<div class="container">

<!-- Start slider -->
<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
  <!-- Indicators -->
<!--   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
<!--   <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/images/calendar1.jpg" alt="Callendar">
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/calendar1.jpg" alt="Callendar">
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/calendar1.jpg" alt="Callendar">
    </div>

  </div> -->

  <!-- Left and right controls -->
<!--   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<!-- End slider -->

<!-- Start messages section -->
<?php
  if ($this->session->flashdata('register')) {
    echo '<div class="alert alert-success alert-dismissable text-center">'. $this->session->flashdata('register') .'</div>';
  }
?>
<!-- End messages section -->

<!-- Start page body -->
    <div class="row pageBody">
        <!-- Start left side section -->
        <div class="col-sm-3 side_bar">
        <!-- Start login form -->

        <!-- Start messages section -->
        <?php
          if ($this->session->flashdata('login-success')) {
            echo '<div class="alert alert-success text-center">'. $this->session->flashdata('login-success') .'</div>';      
          }
          if ($this->session->flashdata('login-fail')) {
            echo '<div class="alert alert-danger alert-dismissable text-center">'. $this->session->flashdata('login-fail') .'</div>';
          }
          if ($this->session->flashdata('logout')) {
            echo '<div class="alert alert-warning alert-dismissable text-center">'. $this->session->flashdata('logout') .'</div>';
          }
        ?>
        <!-- End messages section -->
            <?php 
              if (!empty($this->session->userdata['username'])) {
                $this->load->view('templates/welcome_user');
              } else {
                $this->load->view('users/login_form'); 
              }
            ?>
        <!-- End login orm -->
        </div>
        <!-- End left side section -->
        <!-- <div class="col-sm-1"></div> -->
        <!-- Start right side section -->
        <div class="col-sm-9 right-side">
            <h2>Welcome to My Calendar</h2>
            <p>
            My Callendar is a simple and helpful application to help you manage your daily tasks. You can add as many tasks as you want
            </p>
            <p>
              You can start by <a href="<?php echo base_url(); ?>index.php/users/register">Sign-Up</a> to start organize your daily life as easy as possible.
            </p>
        </div>
        <!-- End right side section -->
    </div>
<!-- End page body -->
</div>