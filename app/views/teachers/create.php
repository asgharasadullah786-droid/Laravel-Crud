<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <!-- TEACHER -->

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Add New Teacher</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="/practicproject/teachers/store">

                <div class="mb-3">
                    <label class="form-label">Teacher Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="/practicproject/teachers" class="btn btn-secondary">Back</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>
