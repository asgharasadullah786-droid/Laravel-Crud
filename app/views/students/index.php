<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2 class="text-primary">Students List</h2>
        <a href="/practicproject/students/create" class="btn btn-success">+ Add Student</a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="200">Actions</th>
                    </tr>
                </thead>

                <tbody>
                <!-- <?php foreach($students as $s): ?> -->
                    <tr>
                        <td><?= $s['id'] ?></td>
                        <td><?= $s['name'] ?></td>
                        <td><?= $s['email'] ?></td>
                        <td>
                            <a href="/practicproject/students/edit/<?= $s['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

                            <a href="/practicproject/students/delete/<?= $s['id'] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure?')">
                               Delete
                            </a>
                        </td>
                    </tr>
                <!-- <?php endforeach; ?> -->
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
