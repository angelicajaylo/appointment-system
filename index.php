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
    <title class="btn">Appointment System</title>
</head>

<body class="p-5">

    <div class="container">
        <div class="bg-primary p-5 text-light text-center header-container">
            <h1>APPOINTMENT SYSTEM</h1>
            <hr />
            <p>ANGELICA JAYLO - PFC</p>
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
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

</body>

</html>