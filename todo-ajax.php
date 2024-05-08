

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 
 <script>
//  jQuery(document).ready(function($) {
//     $('#my-form').submit(function(e) {
//         e.preventDefault();
 
//         var formData = $(this).serialize();

//         $.ajax({
//             type: 'POST',
//             url: '</?php echo admin_url('admin-ajax.php')?>',
//             data: formData + '&action=add_todo',
//             success: function(response) {
//                 console.log(response);
//                 $('#popup').hide()
 
//                 // var newTodoItem = JSON.parse(response);
//                console.log( newTodoItem);
              
//                 // $('#todo-list').append('<li>' + newTodoItem.title + '</li>');
//             }   
//             error: function(error) {
//                 console.log('Error: ' + error.message);
//             }
//         });
//     });
// });

jQuery(document).ready(function($) {
    $('#my-form').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php')?>',
            data: formData + '&action=add_todo',
            success: function(response) {
                console.log(response);
                $('#popup').hide();

                // Reload the main div after 1 second
                setTimeout(function() {
                    $('.detailsof').load(window.location.href + ' .detailsof');
                }, 1000); // 1000 milliseconds = 1 second
            },
            error: function(error) {
                console.log('Error: ' + error.message);
            }
        });
    });
});

 
  jQuery(document).ready(function($) {
      $('.deletetodo').on('click', function(e) {
        var todoremove;
        e.preventDefault();
         todoremove = $(this).closest('div');
          var todoID = $(this).siblings('input[name="todo_id"]').val();
          var data = {
              'action': 'delete_todo',
              'todo_id': todoID
          };
          console.log(todoID);
          console.log('clicked');
          $.post('<?php echo admin_url('admin-ajax.php')?>', data, function(response) {
             
              console.log(response);
              todoremove.remove();

              console.log(todoremove);

          });
      });
  });

  jQuery(document).ready(function($) {
    $('.deletedone').click(function(e) {
        var todoremove;
        e.preventDefault();
         todoremove = $(this).closest('div');
        var todo_id = $(this).siblings('input[name="done_id"]').val();
        console.log(todo_id);

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php');?>',
            data: {
                action: 'delete_done_todo',
                todo_id: todo_id
            },
            success: function(response) {
                todoremove.remove();
               
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});


  jQuery(document).ready(function($) {
      var todoItem;

      $('.donebutton').click(function(e) {

      
          e.preventDefault();
          todoItem = $(this).closest('div');
          var todo_id = $(this).siblings('input[name="item_id"]').val();
          console.log(todo_id);
          var recordId = $(this).data("id");
        


          $.ajax({
              type: 'POST',
              url: '<?php echo admin_url('admin-ajax.php');?>',
              
            
              
              data: {
                  action: 'update_todo',
                  todo_id: todo_id,
                  status:'completed'
              },
              
              success: function(response) {
                todoItem.remove();

                  $('#tasksofdone').append(todoItem);
                 
               
                  
                  // alert(response.data);
              },
              error: function(xhr, status, error) {
                  console.error(error);
              }
              
          });
      });
  });
</script>