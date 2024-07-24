<?php include ('../layouts/header.php'); ?>
<?php include ('../layouts/navbar.php'); ?>
<div class="container-fluid">
    <div class="row m-3 ps-2">
        <h4 class="display-6">USERS-INFO</h4>
    </div>
    <div class="row m-2 ps-1">
        <div class="col m-2">
            <button type="button" class="btn btn-dark btn-lg">MANAGER ID-001</button>
            <button type="button" class="btn btn-dark btn-lg">WORKING UNDER-MR.XYZ</button>
        </div>
        <div class="col m-2 ps-6">
            <a type="button" class="btn btn-primary btn-lg" href="sign-up.php">ADD NEW USER</a>
        </div>
    </div>
    <div class="row m-4">
        <table class="table table-hover">
            <thead class="table-dark ms-3">
                <tr>
                    <th>USER ID</th>
                    <th>USER NAME</th>
                    <th>EMAIL ID</th>
                    <th>PHONE NO.</th>
                    <th>USER-TYPE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <tr>
                    <td>011#</td>
                    <td>MR.X</td>
                    <td>x@x.com</td>
                    <td>9999999999</td>
                    <td>admin</td>
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
                                                <label>User ID</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter user ID...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>User name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Email ID</label>
                                                <input type="text" class="form-control" placeholder="enter email ID">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">user type</label>
                                                <input type="text" class="form-control" placeholder="enter user type">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="number">phone number</label>
                                                <input type="text" class="form-control" placeholder="phone number">
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
                        <!-- <a type="button" class="btn btn-primary mx-2" href="#">view </a> -->
                    </td>
                </tr>
                <tr>
                    <td>012#</td>
                    <td>MR.Y</td>
                    <td>y@y.com</td>
                    <td>9999999999</td>
                    <td>admin</td>
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
                                                <label>User ID</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter user ID...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>User name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Email ID</label>
                                                <input type="text" class="form-control" placeholder="enter email ID">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">user type</label>
                                                <input type="text" class="form-control" placeholder="enter user type">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="number">phone number</label>
                                                <input type="text" class="form-control" placeholder="phone number">
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

                    </td>
                </tr>
                <tr>
                    <td>013#</td>
                    <td>Mr.Z</td>
                    <td>z@z.com</td>
                    <td>9999999999</td>
                    <td>USER</td>
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
                                                <label>User ID</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter user ID...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>User name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Email ID</label>
                                                <input type="text" class="form-control" placeholder="enter email ID">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">user type</label>
                                                <input type="text" class="form-control" placeholder="enter user type">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="number">phone number</label>
                                                <input type="text" class="form-control" placeholder="phone number">
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
                    </td>
                </tr>
                <tr>
                    <td>014#</td>
                    <td>Mr.N</td>
                    <td>n@n.com</td>
                    <td>9999999999</td>
                    <td>USER</td>
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
                                                <label>User ID</label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Enter user ID...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>User name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user name...">
                                            </div>
                                            <div class="row mt-3">
                                                <label>Email ID</label>
                                                <input type="text" class="form-control" placeholder="enter email ID">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="start">user type</label>
                                                <input type="text" class="form-control" placeholder="enter user type">
                                            </div>
                                            <div class="row mt-3">
                                                <label for="number">phone number</label>
                                                <input type="text" class="form-control" placeholder="phone number">
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
<?php include ('../layouts/footer.php'); ?>