<?php 

// logout-form attributes
$attributes = array(
    'id' => 'logout-form',
    'class' => 'form_horizontal'
);

// open the form
echo form_open('users/logout', $attributes);

// submit button attributes
$attributes = array(
    'value' => 'logout',
    'name' =>'submit',
    'class' => 'btn btn-primary'
);

// submit button
echo form_submit($attributes);
// close the form
echo form_close();