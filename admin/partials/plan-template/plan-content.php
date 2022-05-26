
<?php
  global $wpdb;
  $args = array(
      'orderby' => 'date',
      'order'   => 'DESC',
      'post_type' => 'event-task',
       'posts_per_page' => -1
      );
  $plans = get_posts($args);

  if(!empty($plans)){
      //$group = array('');
      foreach($plans as $plan){
          $type = get_post_meta($plans->ID,'type',true);
          $task_start_date = get_post_meta($plans->ID,'task_start_date',true);
          $task_end_date = get_post_meta($plans->ID,'task_end_date',true);
       
         
          $stats  = $type == 'TASK' ? 'TSK':'EVT';

          $TSK = $stats.'-'.$plans->ID;
          $post_modified = $plans->post_modified;
        
          $owner = get_userdata($plans->post_author)->roles[0];
        
          
          
          $categories = get_the_terms( $plans->ID, 'campaign' );
          $Parent_campaign = '<a href="#'.$categories[0]->term_id.'">'.$categories[0]->name.'</a>';
        
          
          $task_start_date_ = date("M j, Y", strtotime($task_start_date));
          $task_end_date_ = date("M j, Y", strtotime($task_end_date));

          $Campaign = get_post_meta($plans->ID,'workflow_id',true)!='' ? get_post_meta($plans->ID,'workflow_id',true):'';

          $total_workflow = (get_field('create_workflow',$Campaign,true)!='')?  count(get_field('create_workflow',$Campaign,true)):'';
         
         $approve_1 =  get_post_meta($plans->ID,'approve_'.$total_workflow,true);
         $stats = $approve_1 =='1'? '<span class="stats completed" >completed</span>':'<span class="stats not" >Not Yet Started</span>';
         
         $plan_checkbox = '<input type="checkbox" value="'.$plans->ID.'" class="delete-field">';
                   
         $title = $plans->post_title.'<span class="button-action"><button type="button" class="btn delete-1" value="'.$plans->ID.'">delete</button><a href="'.get_site_url().'/wp-admin/admin.php?page=view-plan&id='.$plans->ID.'#content" target="_blank" class="btn">view</a></span>';
        
         // print_r($approve_1);
         
       
          $group[] = array(
              $plan_checkbox,
              $title,
              ucfirst($type),
              $TSK,
              $owner,
              ($task_start_date!='')?$task_start_date_:'No Start Date',
              ($task_end_date!='')?$task_end_date_:'No End Date',
              $stats,
              ($Parent_campaign !='')?$Parent_campaign:'-',
              $post_modified

            );
        
      }
  }

?>

<table id="list-data" class="display" style="width:100%">
  <thead>
    <tr>
      <th><button type="button" aria-disabled="false" class="components-button delete is-primary">Delete</button></th>        
      <th>Title</th>
      <th>Type</th>
      <th>Reference</th>
      <th>Owner</th>  
      <th>Start Date</th>
      <th>End/Due Date</th>
      <th>Status</th>
      <th>Parent Campaign</th>
      <th>Last Modified</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

<script>
  jQuery('#list-data').DataTable( {
        data: <?php  echo json_encode($group);  ?>, 
    } );
jQuery(".delete ").click(function(){
    var favorite = [];
     jQuery.each(jQuery(".delete-field:checked"), function(){
        favorite.push(jQuery(this).val());
     });
     data_function(favorite.join(","));
});
jQuery('button.delete-1').click(function (){
    var val = jQuery(this).val();
    data_function(val)
});

function data_function(id){
    
     var conf = confirm("Are you sure you want to delete this item?");
        if(conf == true){
            jQuery.ajax({
                type: "GET",
                url: ajaxurl, 
                data : { action:'my_delete', task_d:id}, // serializes the form's elements.
                success: function(data) {
                   alert(data);
                }
            });
         }
    
}
</script>
<style>
div#list-data_wrapper {
    margin-right: 20px;
}
th.sorting.sorting_asc {
    width: 10px !important;
}
td.sorting_1 {
    text-align: center;
}
table#list-data thead tr th {
    background: #ededf4;
    padding: 13px 9px !important;
}
span.button-action .btn {
    margin-right: 4px !important;
    font-size: 10px !important;
}
table#list-data tbody tr td {
    background: #fff;
    padding: 12px  10px;
    color: #474759;
    font-weight: 600;
    border: solid 1px #f7f7f7;
    height: 45px;
}
table#list-data tr td {
    position: relative;
}

table#list-data tr td span.button-action {position:absolute;left:10px; bottom:5px;}

table#list-data tbody tr td:first-child,table#list-data tbody tr td:nth-child(2) {
    font-weight: 600;
}
.dataTables_filter {
   float: left !important;
}
span.button-action {
    display: none;
    margin-top: 5px;
    width: 100%;
}
td:hover span.button-action {
    display: inline-block;
}
table#list-data tr:hover td span.button-action button.btn {
    background: transparent;
    border: none;
    padding: 0;
    font-size: 12px;
    text-decoration: underline;
    line-height: 1;
    color: #4b50d7;
    margin-right: 10px;
}
div#list-data_length {
    float: right;
}
span.stats {
    text-align: center;
    display: block;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 600;
    background: #f5f7fa;
    border-radius: 4px;
    padding: 3px 8px;
}
td.sorting_1 button.btn {
    background: transparent;
    border: none;
    text-decoration: underline;
    font-size: 11px;
}
span.stats.completed {
    color: #fff;
    background: #07bb00 !important;
}
</style>
 