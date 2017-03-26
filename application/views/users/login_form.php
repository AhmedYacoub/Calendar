<h2>Login form</h2>
<!-- Start form -->
<?php 
// Form attributes
$attributes = array(
    'id'    => 'login_form',
    'class' => 'form_horizontal'
);

// open form
echo form_open('users/login', $attributes);
?>

<!-- Start form body -->
<!-- Start username field -->
<div class="form-group">
<?php 
    // Username Label
    echo form_label('Username', '', ['for' => 'username']); // creates an label field.
    // Username Input field
    $data = array(
        'name'        => 'username',
        'placeholder' => 'Write your username...',
        'class'       => 'form-control',
        'value'       => set_value('username')
    );
?>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<?php
    echo form_input($data);     // creates an input field with the $data attributes.
?>
</div>
</div>
<!-- End username field -->

<!-- Start password field -->
<div class="form-group">
<?php 
    // Password Label
    echo form_label('Password', '', ['for' => 'password']); // creates a label field.
    // Password Input field
    $data = array(
        'name'        => 'password',
        'placeholder' => 'Write your password...',
        'class'       => 'form-control',
        'value'       => set_value('password')
    );
?>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<?php
    echo form_password($data);  // creates a password field.
?>
</div>
<a href="<?php echo base_url(); ?>index.php/users/register">register?</a>
</div>
<!-- End password field -->

<!-- Start submit button -->
<div class="form-group">
<?php 
    $data = array(
        'name'  => 'submit',
        'class' => 'btn btn-primary',
        'value' => 'login'
    );

    echo form_submit($data);    // creates a submit button for the form.
?>

<!-- End submit button -->
</div>
<!-- End form body -->

<!-- Close form -->
<?php echo form_close(); // close the form ?>     