<?php include 'include/header.php' ?>
<?php include 'include/navabar.php' ?>
</div>
<div class="container py-5">
    <h1 class="text-dark text-center mb-5">Our Vision & Mission

    </h1>
    <br>
    <br>
    <div class="row my-10">
        <div class="col-md-6">
            <h2 class="text-center mb-2 text-light">Our
                Mission


            </h2>
            <br>
            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor inventore, nostrum
                cumque possimus, beatae odio a, optio eveniet cum veritatis iste aliquid temporibus. Accusantium,
                officiis? Consequuntur expedita iste distinctio dicta.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus repellendus delectus, a repudiandae quo excepturi aspernatur amet cumque eaque quod quos quidem, perspiciatis obcaecati. Odio exercitationem amet explicabo cupiditate!</p>
        </div>
        <div class="col-md-6">
            <h2 class="text-center mb-2 text-light">Our
                Vision


            </h2>
            <br>
            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor inventore, nostrum
                cumque possimus, beatae odio a, optio eveniet cum veritatis iste aliquid temporibus. Accusantium,
                officiis? Consequuntur expedita iste distinctio dicta.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus repellendus delectus, a repudiandae quo excepturi aspernatur amet cumque eaque quod quos quidem, perspiciatis obcaecati. Odio exercitationem amet explicabo cupiditate!</p>
        </div>

    </div>
    <br>
    <br>

    <div class="row mt-5" style="width: 400px;">
        <div class="col-md-6 ">
            <div class="btn btn-primary b-2 h-2" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-sign-in-alt"></i> login
            </div>
        </div>

        <div class="col-md-6">
            <div class="btn btn-primary b-2" data-toggle="modal" data-target="#myModalRegister">
                <i class="fas fa-registered"></i> Register
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center text-primary">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form action="search.php" method="post">
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" class="form-control" id="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Login">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="myModalRegister" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center text-primary">Register</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form action="search.php" method="post">
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password"> password</label>
                            <input type="password" class="form-control" id="comfrimpassword">
                        </div>
                        <div class="form-group">
                            <label for="password">Comfrim password</label>
                            <input type="password" class="form-control" id="comfrimpassword">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>


<?php include 'include/footer.php'; ?>