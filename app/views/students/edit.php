<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4>Edit Student</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="/practicproject/students/update/<?= $student['id'] ?>">

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $student['name'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?= $student['email'] ?>" required>
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/practicproject/students" class="btn btn-secondary">Back</a>

            </form>

        </div>
    </div>
    
</div>

</body>
</html>
