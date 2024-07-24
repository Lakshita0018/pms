<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img class="ms-2 navbar-brand" src="../img/logo.jpg" alt="logo" width="60px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">projects</a>
                </li>
                <li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><img src="../img/searchicon.png"
                                alt="search-icon" width="25px"></button>
                    </form>
                </li>
            </ul>
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
</nav>