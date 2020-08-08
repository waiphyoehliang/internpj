<?php
include '../include/header.php';
include '../include/navabar.php';
include '../config/db_function.php';
?>
<?php
$table = new Table;
$department = $table->getAllDepartment();

?>



<div class="container-fluid">
    <h2 class="text-center text-light my-5" id="head-text">Department
    </h2>

    <div class="row  ml-2 row-cols-md-3">
        <div class="row">
            <div class="col-md-3 p-1">
                <div class="card" style="width: 19rem;">
                 
                    <?php foreach ($department as  $value) : ?>
                        <img src="../img/a1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo (strtoupper($value['depname']));  ?></h5>
                            <h6><?php echo ($value['date']);  ?></h6>
                            <p class="card-text"><?php echo ($value['description']);  ?></p>

                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>












    <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


<?php include '../include/footer.php'; ?>