<?php include('../layouts/header.php'); ?>
<?php include('../layouts/navbar.php'); ?>
    <div class="container-fluid">
        <div class="row m-4 ">
            <div class="col mx-1 ">
            
                <h4 class="display-6"><b>Project management system</b></h4><br> list of the projects designed by the
                site...
            </div>
            <div class="col mx-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    ADD PROJECT
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row mt-3">
                                        <label>Phase:</label>
                                        <input type="text" class="form-control" placeholder=" Enter Phase...">
                                    </div>
                                    <div class="row mt-3">
                                        <label>Project name:</label>
                                        <input type="text" class="form-control" placeholder=" Enter Project name...">
                                    </div>
                                    <div class="row mt-3">
                                        <label>Assigned to:</label>
                                        <input type="text" class="form-control" placeholder="Enter user name...">
                                    </div>
                                    <div class="row mt-3">
                                        <label>Description:</label>
                                        <input type="text" class="form-control" placeholder="description">
                                    </div>
                                    <div class="row mt-3">
                                        <label for="start">Start date:</label>
                                        <input type="date" id="birthday" name="start">
                                    </div>
                                    <div class="row mt-3">
                                        <label for="end">End date:</label>
                                        <input type="date" id="birthday" name="end">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </span4>
        </div>
    </div>
    <div class="row m-3 ps-4">
        <table class="table table-hover">
            <thead class="table-dark ms-3">
                <tr>
                    <th>PHASES</th>
                    <th>PROJECT NAME</th>
                    <th>ASSIGNED TO:</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>STATUS</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <tr>
                    <td>Planning</td>
                    <td>Project one</td>
                    <td>Mr.X</td>
                    <td>01-01-2020</td>
                    <td>01-01-2021</td>
                    <td>Done</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="d-flex"> 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">log in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary mx-2" href="project.php">view </a>
                        <button type="button" class="btn btn-primary ">delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Design</td>
                    <td>Project two</td>
                    <td>Mr.Y</td>
                    <td>05-01-2021</td>
                    <td>05-01-2022</td>
                    <td>Done</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="d-flex"> 
                        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row mt-3">
                                                <label>Phase:</label>
                                                <input type="text" class="form-control" placeholder=" Enter Phase...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Project name:</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter Project name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Assigned to:</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Description:</label>
                                                <input type="text" class="form-control" placeholder="description">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">Start date:</label>
                                                <input type="date" id="birthday" name="start">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="end">End date:</label>
                                                <input type="date" id="birthday" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary mx-2" href="project.php">view </a>
                        <button type="button" class="btn btn-primary ">delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Development</td>
                    <td>Project three</td>
                    <td>Mr.Z</td>
                    <td>10-01-2022</td>
                    <td>10-01-2023</td>
                    <td>Done</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="d-flex">
                        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row mt-3">
                                                <label>Phase:</label>
                                                <input type="text" class="form-control" placeholder=" Enter Phase...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Project name:</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter Project name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Assigned to:</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Description:</label>
                                                <input type="text" class="form-control" placeholder="description">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">Start date:</label>
                                                <input type="date" id="birthday" name="start">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="end">End date:</label>
                                                <input type="date" id="birthday" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary mx-2" href="project.php">view </a>
                        <button type="button" class="btn btn-primary ">delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>Project five</td>
                    <td>Mr.N</td>
                    <td>30-01-2022</td>
                    <td>30-05-2022</td>
                    <td>Done</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="d-flex"> <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row mt-3">
                                            <label>Phase:</label>
                                            <input type="text" class="form-control" placeholder=" Enter Phase...">
                                        </div>
                                        <div class="row mt-3">
                                            <label>Project name:</label>
                                            <input type="text" class="form-control"
                                                placeholder=" Enter Project name...">
                                        </div>
                                        <div class="row mt-3">
                                            <label>Assigned to:</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter user name...">
                                        </div>
                                        <div class="row mt-3">
                                            <label>Description:</label>
                                            <input type="text" class="form-control" placeholder="description">
                                        </div>
                                        <div class="row mt-3">
                                            <label for="start">Start date:</label>
                                            <input type="date" id="birthday" name="start">
                                        </div>
                                        <div class="row mt-3">
                                            <label for="end">End date:</label>
                                            <input type="date" id="birthday" name="end">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a type="button" class="btn btn-primary mx-2" href="project.php">view </a>
                        <button type="button" class="btn btn-primary ">delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Maintainance</td>
                    <td>Project sixth</td>
                    <td>Mr.D</td>
                    <td>01-12-2022</td>
                    <td>30-05-2023</td>
                    <td>pending</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="d-flex">
                        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add new project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row mt-3">
                                                <label>Phase:</label>
                                                <input type="text" class="form-control" placeholder=" Enter Phase...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Project name:</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter Project name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Assigned to:</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Description:</label>
                                                <input type="text" class="form-control" placeholder="description">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">Start date:</label>
                                                <input type="date" id="birthday" name="start">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="end">End date:</label>
                                                <input type="date" id="birthday" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary mx-2" href="project.php">view </a>
                        <button type="button" class="btn btn-primary ">delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <div class=" container">
        <div class="row">
            <div class="col m-4">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">
                            << </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php'); ?>