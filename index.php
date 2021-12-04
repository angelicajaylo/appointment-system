<?php include_once "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/jpg" href="favicon/favicon.ico" />
    <title class="btn">Appointment System</title>
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Github -->
                            <a href="https://github.com/angelicajaylo/appointment-system" target="_blank" class="btn btn-primary" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="
          background-image: url('images/bg.jpg');
          height: 500px;
          margin-top: 58px;
        ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Heading</h1>
                        <h4 class="mb-3">Subheading</h4>
                        <a class="btn btn-outline-light btn-lg" href="#add" role="button">Start</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>

    <section class="p-5">
        <div class="container">
            <div class="bg-primary p-5 text-light text-center header-container">
                <h1>APPOINTMENT SYSTEM</h1>
                <hr />
                <p>ANGELICA JAYLO - PfC 5108</p>
            </div>
            <div class="create-btn-container mt-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-mdb-toggle="modal" id="add" data-mdb-target="#exampleModal">
                    Add Appointment
                </button>
            </div>
            <div class="user-section mt-5">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>

                                    <th scope="col"><b>Appointment ID</b></th>
                                    <th scope="col"><b>Appointment Subject</b></th>
                                    <th scope="col"><b>Appointment Place</b></th>
                                    <th scope="col"><b>Appointee</b></th>
                                    <th scope="col"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($account as $row) : ?>
                                    <tr>

                                        <td>
                                            <?php echo $row['appointment_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['appointment_subject']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['appointment_place']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['appointee']; ?>
                                        </td>
                                        <td>
                                            <form style="display: inline-block;" action="delete.php" method="post">
                                                <input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm px-3">
                                                    <i class="bi bi-trash"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ADD APPOINTMENT</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="create.php" method="post">
                            <div class="form-outline my-3">
                                <input type="text" id="form12" class="form-control" name="appointment_subject" />
                                <label class="form-label" for="form12">Appointment Subject</label>
                            </div>
                            <div class="form-outline my-3">
                                <input type="text" id="form12" class="form-control" name="appointment_place" />
                                <label class="form-label" for="form12">Appointment Place</label>
                            </div>
                            <div class="form-outline my-3">
                                <input type="text" id="form12" class="form-control" name="appointee" />
                                <label class="form-label" for="form12">Appointee</label>
                            </div>
                            <div class="btn-container text-center">
                                <button type="submit" class="btn btn-primary">ADD <i class="bi bi-arrow-right-circle-fill"></i></button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

</body>

</html>