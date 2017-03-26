<div class="container">
<div class="row">

<div class="col-sm-10">
    <h2><?php echo $task['list_name']; ?></h2>
    <p><?php echo $task['list_body']; ?></p>
</div>

<div class="col-sm-2">
<?php 
    echo '<div>';
    echo '<a href="'.site_url().'/lists/edit/'.$task['id'].'" class="btn btn-success" id="actionbutton" title="Edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a> ';
    echo ' <a href="'.site_url().'/lists/delete/'.$task['id'].'" class="btn btn-danger" id="actionbutton" title="Delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
    echo ' <a href="'.site_url().'/lists/complete/'.$task['id'].'" class="btn btn-info" id="actionbutton" title="Complete"><i class="glyphicon glyphicon-ok"></i> Complete</a>';
    echo '</div>';
?>
</div>

</div>

</div>