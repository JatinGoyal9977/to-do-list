<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1311e537dd.js" crossorigin="anonymous"></script>
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
                            <h2 class="my-4">Edit Task</h2>
                            <form method="post">
                                <div class="d-flex justify-content-center my-4">
                                    <div class="form-outline flex-fill">
                                        <input type="text" id="form2" value="<?php echo $todo['title']; ?>" name="title" class="form-control" placeholder="Enter the title" />
                                        <?php echo form_error('title'); ?>
                                    </div>
                                    <div class="ms-2 form-outline flex-fill">
                                        <input type="text" id="form2" name="task" value="<?php echo $todo['todoitem']; ?>" class="form-control" placeholder="Enter the description" />
                                        <?php echo form_error('task'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info ms-2">Update</button>
                                <a class="btn btn-secondary mx-2" href="<?php echo base_url('index.php/Todolist/') ?>">Cancel</a>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>