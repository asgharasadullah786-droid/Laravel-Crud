<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card bg-primary text-white p-3">
                <h4>Total Teachers</h4>
                <h2><?= $totalTeachers ?></h2>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-success text-white p-3">
                <h4>Total Students</h4>
                <h2><?= $totalStudents ?></h2>
            </div>
        </div>
    </div>
</div>

</body>
</html>