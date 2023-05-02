<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1311e537dd.js" crossorigin="anonymous"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="<?php echo base_url('images/check1.webp'); ?>" alt="Check" width="60">
              <h2 class="my-4">Add Task</h2>
              <form method="post">
                <div class="d-flex justify-content-center my-4">
                  <div class="form-outline flex-fill">
                    <input type="text" id="form2" value="<?php echo set_value('title'); ?>" name="title" class="form-control" placeholder="Enter the title" />
                    <?php echo form_error('title'); ?>
                  </div>
                  <div class="ms-2 form-outline flex-fill">
                    <input type="text" id="form2" name="task" value="<?php echo set_value('task'); ?>" class="form-control" placeholder="Enter the description" />
                    <?php echo form_error('task'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-info ms-2">Add</button>
              </form>
              <hr>
              <h2 class="my-4">Task List</h2>
            </div>

            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">S.No.</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $Sno = 1;
                if (!empty($todos)) {
                  foreach ($todos as $todo) {
                ?>
                    <tr class="fw-normal">
                      <td>
                        <?php echo $Sno . ")";
                        $Sno++;
                        ?>
                      </td>
                      <td>
                        <?php echo $todo['title']; ?>
                      </td>
                      <td>
                        <?php echo $todo['todoitem']; ?>
                      </td>
                      <td>
                        <!-- <a href="javascript:void(0)<?php $value = $todo['id']; ?>" onclick="showModal()" data-mdb-toggle="tooltip" title="Edit"><i class="fa fa-pen-to-square fa-lg text-white me-3"></i></a> -->

                        <a href="<?php echo base_url('index.php/Todolist/update/'), $todo['id']; ?>" data-mdb-toggle="tooltip" title="Edit"><i class="fa fa-pen-to-square fa-lg text-white me-3"></i></a>

                        <a href="<?php echo base_url('index.php/Todolist/delete/'), $todo['id']; ?>" data-mdb-toggle="tooltip" title="Done"><i class="fa fa-check fa-lg text-success me-3"></i></a>
                      </td>
                    </tr>

                <?php
                  }
                }
                ?>
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- <div class="modal" tabindex="-1" id="adduser">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="edittodo">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    // $("document").ready(function(){
    // $("#country").change(function(){
    //   var country_id = $(this).val();
    //   alert(country_id);
    //   $.ajax({
    //     url  : '<?php echo base_url('index.php/Welcome/getStates'); ?>',
    //     type : 'POST',
    //     data : {country_id:country_id},
    //     dataType : 'json',
    //     success : function(response){
    //       if(response['states']){
    //         $("#statesBox").html(response['states']);
    //       }
    //     }
    //   });
    // });
    // });

    // function showModal() {
    //   $('#edittodo').modal("show");
    //   $.ajax({
    //     url: '<?php echo base_url('index.php/Todolist/update'); ?>',
    //     type: 'POST',
    //     data: {todoid:todoid},
    //     dataType: 'json',
    //     success: function(responses) {
    //       $("#edittodo").html(responses['html']);
    //     }
    //   });
    // }
  </script>
</body>

</html>