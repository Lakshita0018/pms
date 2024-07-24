<?php include('../layouts/header.php'); ?>
<?php include('../layouts/navbar.php'); ?>
    <div class="container-fluid">
        <div class="row m-3 ps-2">
            <h4 class="display-6">PROJECT #FIRST</h4>
        </div>
        <div class="row m-2 ps-1">
            <div class="col m-2">
                <button type="button" class="btn btn-dark btn-lg">PROJECT ID-001</button>
                <button type="button" class="btn btn-dark btn-lg">PROJECT MANAGER- MR.X</button>
            </div>

            <div class="col m-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    ADD TASK
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row mt-3">
                                        <label>Task name:</label>
                                        <input type="text" class="form-control" placeholder=" Enter task name...">
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
        </div>
        <div class="row m-4">
            <div class="col p-2">
                <input type="button" class="btn btn-light"
                    value="Start date:                                                        01-01-2020"
                    style="border-radius: 10px">
                <input type="button" class="btn btn-light"
                    value="End date:                                                          01-06-2020"
                    style="border-radius: 10px">
                <input type="button" class="btn btn-light"
                    value="Status:                                                           pending"
                    style="border-radius: 10px">
            </div>
            <table class="table table-hover">
                <thead class="table-dark ms-3">
                    <tr>
                        <th>Sno.</th>
                        <th>TASK NAME</th>
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
                        <td>01</td>
                        <td>Task one</td>
                        <td>Mr.X</td>
                        <td>01-01-2020</td>
                        <td>01-01-2021</td>
                        <td>Done</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="d-flex"> <!-- Button trigger modal -->
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        
                                        <div class="row mt-3">
                                            <label>Task name:</label>
                                            <input type="text" class="form-control"
                                                placeholder=" Enter task name...">
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
                            <a type="button" class="btn btn-primary mx-2" href="task.php">view </a>
                            <button type="button" class="btn btn-primary ">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Task two</td>
                        <td>Mr.Y</td>
                        <td>05-01-2021</td>
                        <td>05-01-2022</td>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        
                                        <div class="row mt-3">
                                            <label>Task name:</label>
                                            <input type="text" class="form-control"
                                                placeholder=" Enter task name...">
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
                    <a type="button" class="btn btn-primary mx-2" href="task.php">view </a>
                            <button type="button" class="btn btn-primary ">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Task three</td>
                        <td>Mr.Z</td>
                        <td>10-01-2022</td>
                        <td>10-01-2023</td>
                        <td>Done</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="d-flex"> <!-- Button trigger modal -->
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        
                                        <div class="row mt-3">
                                            <label>Task name:</label>
                                            <input type="text" class="form-control"
                                                placeholder=" Enter task name...">
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
                            <a type="button" class="btn btn-primary mx-2" href="task.php">view </a>
                            <button type="button" class="btn btn-primary ">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Task five</td>
                        <td>Mr.N</td>
                        <td>30-01-2022</td>
                        <td>30-05-2022</td>
                        <td>Done</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="d-flex"> <!-- Button trigger modal -->
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add new task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        
                                        <div class="row mt-3">
                                            <label>Task name:</label>
                                            <input type="text" class="form-control"
                                                placeholder=" Enter task name...">
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
                            <a type="button" class="btn btn-primary mx-2" href="task.php">view </a>
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