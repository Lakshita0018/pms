<?php include ('../layouts/header.php'); ?>
<div class="container">
    <!-- <img src="../img/logo.jpg" alt="logo" width="200px" class="text-center py-5"> -->
    <h1 class="text-center py-5">WELCOME</h1>
</div>
<!-- first commit -->
<div class="container">
    <div class="row">
        <!-- <div class="col">
            <img src="D:/lakshita-copy/PMS/img/home-img.png" alt="img">
        </div> -->
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                log in
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">log in</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mt-3">
                                    <label class="d-block" for="e-id">Email or phone</label>
                                    <input class="d-block form-input" type="email" id="e-id" name="e-id">
                                </div>
                                <div class="row mt-3">
                                    <label class="d-block" for="pwd">Password</label>
                                    <input class="d-block form-input" type="password" id="pwd" name="pwd">
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <a style=" margin:10px  display=block color=#8344cc" href="#">forgotten
                                        password?</a>
                                </div>
                                <!-- <div class="row mt-3">
                                        <label for="start">Start date:</label>
                                        <input type="date" id="birthday" name="start">
                                    </div>
                                    <div class="row mt-3">
                                        <label for="end">End date:</label>
                                        <input type="date" id="birthday" name="end">
                                    </div> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">log in</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <a type="button" class="btn btn-primary btn-lg mx-2" href="sign-up.php">sign in</a> -->
</div>
<?php include ('../layouts/footer.php'); ?>