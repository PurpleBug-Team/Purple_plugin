<?php
global $wp_roles;
$all_users = get_users();
$wp_roles = new WP_Roles();
$available_roles = $wp_roles->get_names();


?>
<div class="user-management">
    <div class="user-management-header">
        <div class="table-header">
            <div class="title"><h1>User Management</h1></div>
            <div class="right-side">
                <ul class="action-list">
                    <li><i class="fa fa-user-plus" id="add-user" aria-hidden="true"></i>Add Account</li>
                    <li><i class="fas fa-sort-amount-down-alt"></i>Sort by</li>
                </ul>
            </div>
        </div>
        <table>
  <tr class="theader-user-management">
    <th width="5%">ID</th>
    <th>Username</th>
    <th>User Role</th>
    <th>Email</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php
  $id = 1;
  foreach ($all_users as $user) {
   ($user->data->user_status == 0) ? $stat = '<i class="fas fa-circle text-active"></i>Active': $stat = '<i class="fas fa-circle text-inactive"></i>Inactive';
   $output = '';
   $output .= '<tr>';
   $output .= '<td>'.$id.'</td>';
   $output .= '<td>'.$user->data->user_login.'</td>';
   $roles = $user->roles;
   $output .= '<td>';
   foreach($roles as $role){
       $output .= $role.',';
    }
   $output .= '</td>';
   $output .= '<td>'.$user->data->user_email.'</td>';
   $output .= '<td>'.$stat.'</td>';
   $output .= '<td><i class="fas fa-edit edit-user" data-id='.$user->data->ID.'></i></td>';
   $output .= '</tr>';
   echo $output;
   $id++;
  }
  ?>
</table>
    </div>
</div>
<!-- Add user modal -->
<div class="add-new-user-modal">
    <div class="modal add-user-modal" style="display:block;">
    <form action="#" method="post" id="add-user-modal">
        <div class="plan-CreateModal-title "><h1 class="user-modal-title">Add new User</h1></div>
            <input type="hidden" name="user-id" id="user-hidden-id" value="">
            <div class="form-group">
                <label>Username *
                    <input name="username" id="username" autocomplete="off"  class="input-field" maxlength="80" type="text" placeholder="Enter Username" value="">
                </label>
            </div>
            <div class="form-group">
                <label>User Email *
                    <input name="email" autocomplete="off" id="email" class="input-field" maxlength="80" type="text" placeholder="Enter Email" value="">
                </label>
            </div>
            <div class="form-group">
                <label>User Role *
                    <select name="user_role" class="form-field" id="user-role">
                        <?php
                        foreach($available_roles as $user_role_key => $value){
                            echo "<option value='$user_role_key'>$value</option>";
                        }                    ?>
                    </select>
                </label>
            </div>
            <a href="#" class="change-pass-switch" ><p>Change your password</p></a>
            <div class="form-group change-password" style="display:none;">
                <label>Set New Password *
                    <input name="set_new_password" id="set_new_password"  autocomplete="off"  class="input-field" maxlength="80" type="text" placeholder="Set New Password" value="">
                </label>
            </div>
            <div class="form-group " style="display:none;">
                <label>Password *
                    <input name="new_password" id="new_password"  autocomplete="off"  class="input-field" maxlength="80" type="text" placeholder="Type your Password" value="">
                </label>
            </div>
            <div class="close-modal-container">
                <a href="#close-modal" rel="modal:close" class="close-modal cls-user-btn">Close</a>
            </div>
            <!--  -->
            <div class="create-user-button">
                <div class="inner-buttons">
                    <a class="close cls-user-btn ndl-Button ndl-Button--primary ndl-Button--medium" href="#">Close</a>
                    <button type="submit" class="submit-user">Add</button>
                    <button id="update-user" style="display:none;">Update</button>
                </div>
            </div>
    </form>
    </div>
</div>
<style>
.edit-user{
    color: #28a745;  
    font-size: 1.2em; 
}
.theader-user-management th{
    padding: 12px;
}
.theader-user-management{
    background: #f2f7fb;
   
}
.text-active{
    color:#28a745;
    margin: 8px;
}
.text-inactive{
    margin: 8px;
}
.inner-buttons a{
    text-decoration: none;
    vertical-align: middle;
    line-height: 2.5;
    font-size: 14px;
    font-weight: bold;
}

.create-user-button{
    text-align: center;
    margin-top: 20px;
}
.create-user-button button{
    background: #4655d7;
    border: none;
    color: #fff;
    display: inline-block;
    cursor: pointer;
    vertical-align: top;
    padding: 10px 0;
    border-radius: 4px;
    width: 65px;
    line-height: 1;
    font-weight: 600;
    font-size: 14px;
    margin-left: 10px;

}
.form-group{
    margin-bottom: 15px;
}
.plan-CreateModal-title h1{
    font-size: 16px;
    font-weight: 600;
    line-height: 20px;
}
.form-group input[type="text"],.form-group select{
    width: 100%;
    max-width: 100%;
    min-height: 35px !important;
    padding: 5px 10px;
}
.add-user-modal{
    position: fixed;
    top: -10%;;
    left: 50%;
    right: 0;
    transform: translate(-50%,50%);
}
.user-management-header{
    padding-right:20px;
}
.action-list{
    display:flex;
}
.action-list li{
    padding: 0px 15px;
}
.action-list li i{
    padding: 0px 15px;
    font-size: 1.2rem;
}
.table-header h1{
    font-size: 2.5em;
    color: #0663a6;
}
.table-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 8px;
  border-bottom: unset!important;
    border-top: unset!important;
    color: rgba(0,0,0,.6509803921568628);
}

tr:nth-child(odd) {
    background: #f2f7fb;
    
}
tbody:nth-last-child(){
border-bottom: 1px solid hsla(0,0%,54.9%,.9333333333333333);
}
</style>