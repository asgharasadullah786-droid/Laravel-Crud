<?php
require_once "../app/models/Student.php";

class StudentsController {

    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    // READ
    public function index() {
        $students = $this->student->getAll();
        require "../app/views/students/index.php";
        
    }
    // CREATE FORM
    public function create() {
        require "../app/views/students/create.php";
    }

    // STORE
    public function store() {
        $this->student->create($_POST);
        header("Location: /practicproject/students");
    }

    // EDIT FORM
    public function edit($id) {
        $student = $this->student->find($id);
        require "../app/views/students/edit.php";
    }

    // UPDATE
    public function update($id) {
        $this->student->update($id, $_POST);
        header("Location: /practicproject/students");
    }

    // DELETE
    public function delete($id) {
        $this->student->delete($id);
        header("Location: /practicproject/students");
    }
}
