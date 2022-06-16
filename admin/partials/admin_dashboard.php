<?php
$article_args = array(
    'numberposts'      => 5,
    'category'         => 0,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => array(),
    'exclude'          => array(),
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'article',
    'suppress_filters' => true,
);
$articles = get_posts($article_args);
$total_articles = count($articles);

$plan_args = array(
    'orderby' => 'date',
    'order'   => 'DESC',
    'post_type' => 'event-task',
     'posts_per_page' => -1
    );
$plans = get_posts($plan_args);
$total_plans = count($plans);

$forms_args = array(
    'orderby' => 'date',
    'order'   => 'DESC',
    'post_type' => 'sfba_subscribe_form',
     'posts_per_page' => -1
    );
$forms = get_posts($forms_args);
$total_forms = count($forms);

$query_img_args = array( 
    'post_type' => 'attachment', 
    'post_mime_type' =>array( 
    'jpg|jpeg|jpe' => 'image/jpeg', 
    'gif' => 'image/gif', 
    'png' => 'image/png', 
    ), 
    'post_status' => 'inherit', 
    'posts_per_page' => -1, 
); 
$query_img = new WP_Query( $query_img_args ); 
$total_media_files = $query_img->post_count; 
   
?>
<div class="custom-dashboard">
    <div class="dashboard-items">
        <div class="dashboard-cards col-4">
            <a href="/wp-admin/edit.php?post_type=article" class="dashboard-page-links">
                <div class="dashboard-card-body">
                    <div class="dashboard-content">
                        <h2><?=$total_articles;?></h2>
                    </div>
                    <div class="item-icon_des">
                        <span class="wp-menu-image dashicons-before dashicons-media-document" aria-hidden="true">No of Articles</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="dashboard-cards col-4">
            <a href="/wp-admin/admin.php?page=plan" class="dashboard-page-links">
                <div class="dashboard-card-body">
                    <div class="dashboard-content">
                        <h2><?=$total_plans;?></h2>
                    </div>
                    <div class="item-icon_des">
                        <span class="wp-menu-image dashicons-before dashicons-editor-ul" aria-hidden="true">No of Plans</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="dashboard-cards col-4">
            <a href="/wp-admin/edit.php?post_type=sfba_subscribe_form" class="dashboard-page-links">
                <div class="dashboard-card-body">
                    <div class="dashboard-content">
                        <h2><?=$total_forms;?></h2>
                    </div>
                    <div class="item-icon_des">
                        <span class="wp-menu-image dashicons-before dashicons-email-alt" aria-hidden="true">No of Forms</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="dashboard-cards col-4">
            <a href="/wp-admin/profile.php" class="dashboard-page-links">
                <div class="dashboard-card-body">
                    <div class="dashboard-content">
                        <h2><?=$total_media_files;?></h2>
                    </div>
                    <div class="item-icon_des">
                        <span class="wp-menu-image dashicons-before dashicons-admin-users" aria-hidden="true">No of Media files on Library</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Include Calendar -->
    <!-- <div class="calendar-dashboard-widget">
        < ?php
            include( plugin_dir_path( __FILE__ ) . 'plan-template/calendar-content.php' );
        ?>
    </div> -->
</div>
<style>
    .calendar-dashboard-widget{
        margin-top:50px;
        width:50%;
    }
    .dashboard-page-links{
        text-decoration:none;
    }
    .item-icon_des span{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
    }

    span.wp-menu-image:before {
        font-size:2rem !important;
        line-height: 17px;
        margin-right: 20px;
    }
    .dashboard-items{
        display: flex;
        column-gap: 15px;
        margin-top:20px;
    }
    .dashboard-cards{
        border-radius: 1rem!important;
        background: linear-gradient(to bottom right,#679ee2,#0663a6)!important;
    }
    .dashboard-card-body{
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
        color: #fff;
        text-align: center;
    }
    .col-4{
        width:25%;
    }
    .dashboard-card-body h2{
        font-family:inherit;
        color: #fff;
        font-size: 5em;
        margin: 45px;
    }
    .dashboard-content{
        border-bottom: 1px solid #fff;
        text-align: center;
    }

</style>