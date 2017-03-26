<div class="container">
<!-- Start form -->

<!-- Start Displaying errors -->
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<!-- End Displaying errors -->

<?php 
    $attributes = array(
        'id' => 'add-list',
        'class' => 'form form-horizontal'
    );
    echo form_open($controller, $attributes);
?>
<!-- Start taskName input field -->
<div class="form-group">
<?php 
    echo form_label('Task Name:', 'taskName'); 
    $attributes = array(
        'name'  => 'taskName',
        'class' => 'form-control',
        'placeholder' => 'Write Your task name...',
        'value' => $task_info['list_name']
    );
    echo form_input($attributes);
?>
</div>
<!-- End taskName input field -->

<!-- Start taskDescription text-area -->
<div class="form-group">
<?php 
    echo form_label('Task Description:', 'taskBody'); 
    $attributes = array(
        'name'  => 'taskBody',
        'class' => 'form-control',
        'placeholder' => 'Write Your task Description...',
        'value' => $task_info['list_body']
    );
    echo form_textarea($attributes);
?>
</div>
<!-- End taskDescription text-area -->

<!-- Start submit button -->
<div class="form-group">
<?php 
    $attributes = array(
        'id' => 'add-list-submit',
        'class' => 'btn btn-primary',
        'value' => 'Edit task'
    );
    echo form_submit($attributes);
?>
</div>
<!-- End submit button -->
</div>
<!-- End form -->