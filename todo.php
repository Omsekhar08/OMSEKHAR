<?php
 if (!is_user_logged_in() && is_page('todo')) {
    wp_redirect(wp_login_url('wp_login'));
    exit();
}
/**
 * Template Name: Todo Page
 * 
 * The template for displaying the Todo Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
// include('search.php');
// include('tag.php');
get_header();

global $wpdb;

// if (isset($_POST['submit'])) {
//   $table_name = $wpdb->prefix . 'todos';

//   $title      =  sanitize_text_field($_POST['title']);
//   $location   =  sanitize_text_field($_POST['location']);
//   $url        =  esc_url($_POST['url']);
//   $description = sanitize_text_field($_POST['description']);
//   $label      = implode(", ", $_POST['label']);
//   $priority   =  sanitize_text_field($_POST['priority']);
//   $duedate    =  sanitize_text_field($_POST['duedate']);
//   $phonenumber= sanitize_text_field($_POST['phonenumber']);
  
//   $data = array(
//       'user_id'   => get_current_user_id(),
//       'user_name' => get_current_user(),
//       'title'     => $title,
//       'label'     =>$label,
//       'description'=>$description,
//       'location'  => $location,
//       'url'       => $url,
//       'priority'  => $priority,
//       'duedate'   => $duedate,
//       'phonenumber'=> $phoneNumber,
//       'createdat' => current_time('mysql'),
//       'updatedat' => current_time('mysql'),
//   );

//   $format = array( '%d', '%s','%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s','%s' );

//   $result = $wpdb->insert($table_name, $data, $format);

//   if (!empty($result)) {
      
//       echo '<div class="notice notice-success is-dismissible"><p>Your todo item has been saved.</p></div>';
//   } else {
      
//       $error_message = $wpdb->print_error();
//       error_log('An error occurred while trying to insert a new todo item: '.$error_message);
//       echo '<div class="notice notice-error is-dismissible"><p>There was an error saving your todo item. Please contact the site administrator for assistance.</p></div>';
//   }
// }



?>

<div id="main">
        <div class="img">
            <img id='todoimage' src="https://th.bing.com/th/id/OIP.tOI69y_uospEGCvIDrcqwQHaEK?rs=1&pid=ImgDetMain" alt="">
        </div>
 
<div id="todobody">
            <div id="todotaskbar">
            <div class="bars">
<div id="todo" class="button active">
    <div id="todobutton">TO DO</div>
  </div>
<div id="done" class="button" style="margin-right: 10px;">
    <div id="donebutton">Done</div>
  </div>
 
</div>
<div class="searchitems">
                <div id="searchform">
                    <div id="icon">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-magnifying-glass" style="line-height: 1; height:23px; margin-left:2px"><path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" class=""></path></svg>
                    <i class="fas fa-brands fa-searchengin"></i>
                    <input type="text" style="  position: relative; margin-left: 15px;   height:20px;width:200px ;border:none;outline:none" name="search" id="searchInput" placeholder="Search Task Name...">
                    </div>
                </div>
                <div class="icon-container">
                    <div class="filtericon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L502 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM128 416a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg>
                    </div>
                </div>
             
            <div id="tags" class="scroll-container">
                <div class="alltags">
                    All Tags
                </div>
                <div id="work">#Work</div>
                <div id="meeting">#Meeting</div>
                <div id="workout">#Workout</div>
                <div id="personal">#Personal</div>
                </div>
</div>
 <div class="detailsof">
                <?php
                global $wpdb;
                $table_name = $wpdb->prefix . 'todos';
                $current_user = wp_get_current_user();

                $results_undone = $wpdb->get_results(
                "SELECT * FROM {$table_name} WHERE user_id = {$current_user->ID} AND status != 'completed' ORDER BY FIELD(priority, 'high', 'medium', 'low');"
                );

                $results_done = $wpdb->get_results(
                    "SELECT * FROM {$table_name} WHERE user_id = {$current_user->ID} AND status = 'completed' ORDER BY FIELD(priority, 'high', 'medium', 'low') DESC;"
                );

                $has_undone_tasks = count($results_undone) > 0;
                $has_done_tasks = count($results_done) > 0;

                if ($has_undone_tasks) {
                
                    $index = 0;
                    while ($index < count($results_undone)) {
                        $row = $results_undone[$index];
                        $class = ($row->priority === 'high' ? 'high-priority' : '');
                ?>

    <div class="todo-list" id='todos-search-results'>

        <div class="firstrow" style="display: flex;gap: 0px;">
            <p id="postvalue"><?= $row->id ?></p>

            <h4 style="max-width: 210px;"><?= $row->title ?></h4> <h6 id="flag" style="margin-left: 5px;margin-right: 10px;">flag</h6>
        </div>

        <p id="description"><?= $row->description ?></p>
        <p id="datetime"><?php echo $row->duedate ?></p> 

        <p id="tagsdisplay"><?= $row->label ?></p>
        <p id="meetinglink"><a href="<?php echo $row->url ?>"><?php echo $row->url ?></a></p>
        <p id="location"><a href="https://www.google.com/maps/dir/?api=1&origin=Current+Location&destination= <?php echo $row->location ?>" target="_blank"><?php echo $row->location ?></a></p>
        <p><?php echo $row->status ?>
            <?php
            if ($row->status == 'pending') {
                echo "pending in if condition";
            } else {
                echo "red";
            }
            ?></p>

        <form method="post">
            <input type="hidden" name="todo_id" id="post_ID" value="<?php echo $row->id; ?>">
            <button type="button" id="todo-delete-button" class="deletetodo" name="delete_todo"> <i class="fas fa-trash" aria-hidden="true"></i></button>
            <input type="hidden" name="item_id" value="<?php echo $row->id; ?>">
            <button type="submit" id='todo-done-button' class='donebutton' name="mark_done"> <i class="fas fa-solid fa-check fa-bounce"></i> </button>
        </form>

    </div>

    <?php
         
            $index++;
        }
    }
    ?>
</div>  
       <?php
  if (!$has_undone_tasks) {
      echo "<p>No tasks yet.</p>";
  }
  if( !$has_done_tasks){
    echo "<p>No tasks yet.</p>";
  }

?>    
</div>
            <?php
        if ($has_done_tasks ) {
              ?>
<div id="tasksofdone"> <?php
       
              foreach ($results_done as $row) {
                      ?>
               <div class="todo-list" id='todos-search-results'>

<div class="firstrow" style="display: flex;gap: 0px;">
    <p id="postvalue"><?= $row->id ?></p>

    <h4 style="max-width: 210px;"><?= $row->title ?></h4> <h6 id="flag" style="margin-left: 5px;margin-right: 10px;">flag</h6>
</div>

<p id="description"><?= $row->description ?></p>
<p id="datetime"><?php echo $row->duedate ?></p> 

<p id="tagsdisplay"><?= $row->label ?></p>
<p id="meetinglink"><a href="<?php echo $row->url ?>"><?php echo $row->url ?></a></p>
<p id="location"><a href="https://www.google.com/maps/dir/?api=1&origin=Current+Location&destination= <?php echo $row->location ?>" target="_blank"><?php echo $row->location ?></a></p>
<p><?php echo $row->status ?>
    <?php
    if ($row->status == 'pending') {
        echo "pending in if condition";
    } else {
        echo "red";
    }
    ?></p>

<form method="post">
    <input type="hidden" name="todo_id" id="post_ID" value="<?php echo $row->id; ?>">
    <button type="button" id="todo-delete-button" class="deletetodo" name="delete_todo"> <i class="fas fa-trash" aria-hidden="true"></i></button>
    <input type="hidden" name="item_id" value="<?php echo $row->id; ?>">
    <button type="submit" id='todo-done-button' class='donebutton' name="mark_done"> <i class="fas fa-solid fa-check fa-bounce"></i> </button>
</form>

</div>

</div>  
              <?php
              }
              ?>

 
                <?php
                
        }
        else{
          echo'norecords';
        }
                          ?>
         
        <div id="addbutton">
          <i class="fas fa-solid fa-plus"></i>
        </div>
    
<div id="popup" style="display:none;">
  <div id="form-container">

        <form id='my-form' method="POST">
          
          <input type="text" id="taskbar" name="title" placeholder="Task name" required>
          <input type="text" name="description" id="description" placeholder='description'>
          <div id="formaline">
              <input type="text" id='locationbar' name="location" placeholder="Location (optional)">
              <input type="url" id="urlbar" name="url" placeholder="URL (optional)">
              <br>
              
              <select name="label[]" multiple required>
                  <option value="personal">#Personal</option>
                  <option value="work">#Work</option>
                  <option value="workout">#Workout</option>
                  <option value="meeting">#Meeting</option>
                  
              </select>
              <select name="priority" required>
                  <option value="low">Priority 3</option>
                  <option value="medium">Priority 2</option>
                  <option value="high">Priority 1</option>
              </select>
              <input type="datetime-local" name="duedate" required>
              <input type="text" name="phonenumber" id="phnumber" placeholder='Enter Your Phone Number' required>
              
              <button type="submit" id='taskadd' name='submit'><i class="fas fa-light fa-paper-plane fa-rotate-by" style="--fa-rotate-angle: 270deg;"></i></i></button>
            
          </div>
        </form>
            <span class="close-icon">×</span>
    <div>
    </div>        
</div>
</div>
    </div>
    </div>
<?php get_footer();?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<?php

// require_once('vendor/autoload.php');

//     global $wpdb;

//     $currentTime= time();
//     // date("Y-m-d H:i:s");
//     // date("Y-m-d H:i:s", strtotime("+30 minutes", strtotime($currentTime)));
//     $deadLineTimeStamp= strtotime('+20 minute');


//     $query = "SELECT  *  FROM wp_todos WHERE duedate BETWEEN FROM_UNIXTIME({$currentTime}) AND FROM_UNIXTIME({$deadLineTimeStamp}) ORDER BY duedate ASC";

//     $results = $wpdb->get_results($query);

// if ($results) {

//     if ($results === false) {
//          echo "Error executing query: " . $wpdb->last_error;
//     } else {

//         $index = 0;
//         $numRows = count($results);
 
//         while ($index < $numRows) {
//          $row = $results[$index];

//          $userName = $row->user_name;  
//         $title = $row->title;
//         $meetingDateTime = $row->duedate;
//         $phoneNumber = $row->phonenumber;

//          $index++;

//         if (!empty($phoneNumber)) {
            
//             $remainingTime = $meetingDateTime - $currentTime;
            
            
//             $message = " Hi $userName  You have a $title in " . gmdate("H:i", $remainingTime) . ". Meeting : " .($row->url);

//             $twilioAccountSid = 'AC4783233184ee7cf383c8c5cd1f719490';
//             $twilioAuthToken = 'f016e1ed4002d3d565f73fb609e1b0f2';
//             $twilioClient = new Twilio\Rest\Client($twilioAccountSid, $twilioAuthToken);

//             try {
//                 $sentMessage = $twilioClient->messages->create(
//                     "+{$phoneNumber}",
//                     ['from' => '+12513201268', 'body' => $message]
//                 );
                
//                 echo "Sent SMS Reminder to {$phoneNumber}: \"{$message}\"\n";
//             } catch (\Exception $e) {
//                 echo "Error while sending SMS Reminder to {$phoneNumber}: " . $e->getMessage() . "\n";
//             }
//         }else{
//             echo'sms not sent';
//         }
//     }
// }
// }
//     else{
//        echo  'something went wrong or no records are there ';
//     }



//     ?>

