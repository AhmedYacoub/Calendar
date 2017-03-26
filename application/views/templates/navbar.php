<?php 
if (isset($active_class)) {
      switch ($active_class) {
        case 'home':
            $active1 = 'active';
            break;
        
        case 'register':
            $active2 = 'active';
            break;

        case 'lists':
            $active3 = 'active';
            break;

        case 'addlist':
            $active4 = 'active';
            break;
        default:
            $active1 = $active2 = $active3 = $active4 ='';
            break;
    }
}
  
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <!-- Start Navbar header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
          </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-calendar"></i> My Callendar</a>
        </div>
        <!-- End Navbar header -->

        <!-- Start Navbar body -->
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="<?php echo @$active1; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php 
                if (isset($this->session->userdata['username'])) {
                    echo '<li class="'.@$active3.'"><a href="'.site_url().'/lists">Lists</a></li>';
                    echo '<li class="'.@$active4.'"><a href="'.site_url().'/lists/addlist">Add a List</a></li>';
                }
            ?>
        </ul>

        <?php 
            if (!empty($this->session->userdata['username'])) {
                echo '<ul class="nav navbar-nav navbar-right">';
                echo '<li><a href="'.base_url().'index.php/users/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                echo '<li><a href="'.base_url().'index.php/users/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
                echo '</ul>';
            }
        ?>
        </div>
        <!-- End Navbar body -->

    </div>
</nav>