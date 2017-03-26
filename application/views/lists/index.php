<div class="container">
<h2>Your Lists:</h2>

<?php 
    if (empty($list_data)) {
        echo '<div class="alert alert-warning text-center">There is no tasks for you, enjoy your day!</div>';
    }
    if (!empty($this->session->flashdata('addlist-complete'))) {
        echo '<div class="alert alert-success text-center">'.$this->session->flashdata('addlist-complete').'</div>';
    }
    if (!empty($this->session->flashdata('edit-complete'))) {
        echo '<div class="alert alert-success text-center">'.$this->session->flashdata('edit-complete').'</div>';
    }
    if (!empty($this->session->flashdata('delete-complete'))) {
        echo '<div class="alert alert-success text-center">'.$this->session->flashdata('delete-complete').'</div>';
    }
    if (!empty($this->session->flashdata('complete'))) {
        echo '<div class="alert alert-success text-center">'.$this->session->flashdata('complete').'</div>';
    }
?>

<table class="table table-responsive table-hover">
<thead class="alert alert-info">
    <tr>
        <th>Task Name</th> 
        <th>Status</th> 
        <th>Creation date</th> 
        <th>View Task</th> 
    </tr>
</thead>
<tbody>
<?php 
    foreach($list_data as $list) {
        echo '<tr>';
        echo '<td>'.$list['list_name'].'</td>';
        echo '<td><b>'.$list['list_status'].'</b></td>';
        echo '<td>'.$list['create_date'].'</td>';
        echo '<td><a href="'.site_url().'/lists/view/'.$list['id'].'">View Task</a></td>';
        echo '</tr>';
    }
?>
</tbody>
</table>
</div>