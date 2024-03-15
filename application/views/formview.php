<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <title>User Input Form</title>
    <style>
    .error {
        color: red;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: linear-gradient(rgba(84, 8, 151, 0.397), #1d9974);
    }
    </style>
</head>

<body>
    <div class="container">
        <div>

            <a class="btn btn-primary btn-lg m-3" href="<?php echo base_url()?>Project" role=" button">Add New
                User</a>
        </div>
        <?php if (!empty($user_data)): ?>
        <div class="card">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Date of birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user_data as $user): ?>
                    <tr>
                        <td><?php echo $user->name; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->age; ?></td>
                        <td><?php echo $user->DOF; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Date of birth</th>
                    </tr>
                </tfoot> -->
            </table>
        </div>
        <?php else: ?>
        <div class="card">
            <div class="card-body">
                <p>Data is not found.</p>
            </div>
        </div>
        <?php endif; ?>

    </div>
</body>

</html>