<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <!-- Teacher -->

    <div class="d-flex justify-content-between mb-3">
        <h2 class="text-primary">Teacher List</h2>
        <a href="/practicproject/teachers/create" class="btn btn-success">+ Add Teacher</a>
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
                <?php foreach($teachers as $t): ?>
                    <tr>
                        <td><?= $t['id'] ?></td>
                        <td><?= $t['name'] ?></td>
                        <td><?= $t['email'] ?></td>
                        <td>
                            <a href="/practicproject/teachers/edit/<?= $t['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

                            <a href="/practicproject/teachers/delete/<?= $t['id'] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure?')">
                               Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
