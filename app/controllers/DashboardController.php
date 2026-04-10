<?php
require_once "../app/models/Teacher.php";
require_once "../app/models/Student.php";

class DashboardController {

    public function index() {
        $teacherModel = new Teacher();
        $studentModel = new Student();

        $totalTeachers = count($teacherModel->getAll());
        $totalStudents = count($studentModel->getAll());

        require "../app/views/dashboard/index.php";
    }
}