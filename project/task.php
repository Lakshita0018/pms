<?php include('../layouts/header.php'); ?>
<?php include('../layouts/navbar.php'); ?>
    <div class="container-fluid">
    <div class="row m-3 ps-2">
            <h4 class="display-6">TASK #FIRST</h4>
        </div>
        <div class="row m-2 ps-1">
            <div class="col m-2">
                <button type="button" class="btn btn-dark btn-lg">TASK ID-001</button>
                <button type="button" class="btn btn-dark btn-lg">ASSIGNED USER ID- #X011</button>
            </div>
            <div class="col m-2 ps-6">
                <button type="button" class="btn btn-dark btn-lg ">STATUS: PENDING</button>
            </div>
        </div>
        <div class="row m-4">
            <div class="col p-2">
                <input type="button" class="btn btn-light"
                    value="Start date:                                                     01-08-2023"
                    style="border-radius: 10px">
                <input type="button" class="btn btn-light"
                    value="End date:                                                    01-12-2024"
                    style="border-radius: 10px">
                <input type="button" class="btn btn-light"
                    value="PROGRESS:                                                40%" style="border-radius: 10px">
            </div>
            <table class="table table-hover">
                <thead class="table-dark ms-3">
                    <tr>
                        <th>Sno.</th>
                        <th>ATTACHMENT ID:</th>
                        <th>FILE NAME</th>
                        <th>FILE PATH</th>
                        <th>UPLOAD BY</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <td>01</td>
                        <td>T#01</td>
                        <td>XYZ</td>
                        <td> URL</td>
                        <td>MR.X</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td> <button type="button" class="btn btn-primary ">view</button></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>T#02</td>
                        <td>XYZ</td>
                        <td> URL</td>
                        <td>MR.Y</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td> <button type="button" class="btn btn-primary ">view</button></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>T#03</td>
                        <td>XYZ</td>
                        <td> URL</td>
                        <td>MR.Z</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td> <button type="button" class="btn btn-primary ">view</button></td>
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