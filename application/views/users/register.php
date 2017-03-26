<div class="container">
<h2 class="text-center">Register</h2>
<p class="text-center">Please fill out the form below to create an account</p>

<!-- Start Displaying errors -->
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<!-- End Displaying errors -->

<!-- Start register form -->
<?php 
    $attributes = array(
        'id' => 'register-form',
        'class' => 'form-horizontal register-form'
    );
    echo form_open('users/register', $attributes); 
?>

<!-- Start firstname -->
<div class="form-group">
<?php 
    echo form_label('First Name:', '', ['for' => 'first_name']);
    $data = array(
        'name' => 'first_name',
        'class' => 'form-control',
        'placeholder' => 'Write your first name please...',
        'value' => set_value('first_name')
    );
?>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user">1</i></span>
    <?php
        echo form_input($data);
    ?>
    </div>
</div>
<!-- End  firstname -->

<!-- Start lastname -->
<div class="form-group">
<?php 
    echo form_label('Last Name:');
    $data = array(
        'name' => 'last_name',
        'class' => 'form-control',
        'placeholder' => 'Write your last name please...',
        'value' => set_value('last_name')
    );
?>  
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user">2</i></span>
    <?php
        echo form_input($data);
    ?>
    </div>
</div>
<!-- End lastname -->

<!-- Start email -->
<div class="form-group">
<?php 
    echo form_label('Email:');
    $data = array(
        'name' => 'email',
        'class' => 'form-control',
        'placeholder' => 'Write your email please...',
        'value' => set_value('email')
    );
?>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <?php
        echo form_input($data);
    ?>
    </div>
</div>
<!-- End email -->

<!-- Start username -->
<div class="form-group">
<?php 
    echo form_label('Username:');
    $data = array(
        'name' => 'username',
        'class' => 'form-control',
        'placeholder' => 'Write your username please...',
        'value' => set_value('username')
    );
?>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <?php
        echo form_input($data);
    ?>
</div>
</div>
<!-- End username -->

<!-- Start password -->
<div class="form-group">
<?php 
    echo form_label('Password:');
    $data = array(
        'name' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Write your password please...',
        'value' => set_value('password')
    );
?>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock">1</i></span>
    <?php
        echo form_password($data);
    ?>
    </div>
</div>
<!-- End password -->

<!-- Start confirm password -->
<div class="form-group">
<?php 
    echo form_label('Confirm Password:');
    $data = array(
        'name' => 'confirm_password',
        'class' => 'form-control',
        'placeholder' => 'Confirm your password please...',
        'value' => set_value('confirm_password')
    );
?>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock">2</i></span>
    <?php
        echo form_password($data);
    ?>
    </div>
</div>
<!-- End confirm password -->

<!-- Start submit button -->
<div class="form-group">
<?php 
    $data = array(
        'value' => 'register',
        'name'  => 'submit',
        'class' => 'btn btn-primary'
    );
    echo form_submit($data);
?>
</div>
<!-- End submit button -->

<?php echo form_close(); ?>
<!-- End register form -->

</div>