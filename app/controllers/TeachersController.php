<?php
require_once "../app/models/Teacher.php";

class TeachersController {

    private $teacher;

    public function __construct() {
        $this->teacher = new Teacher();
    }

    // READ
    public function index() {
        $teachers = $this->teacher->getAll();
        require "../app/views/teachers/index.php";
    }

    // CREATE FORM
    public function create() {
        require "../app/views/teachers/create.php";
    }

    // STORE
    public function store() {
        $this->teacher->create($_POST);
        header("Location: /practicproject/teachers");
    }

    // EDIT FORM
    public function edit($id) {
        $teacher = $this->teacher->find($id);
        require "../app/views/teachers/edit.php";
    }

    // UPDATE
    public function update($id) {
        $this->teacher->update($id, $_POST);
        header("Location: /practicproject/teachers");
    }

    // DELETE
    public function delete($id) {
        $this->teacher->delete($id);
        header("Location: /practicproject/teachers");
    }
}
