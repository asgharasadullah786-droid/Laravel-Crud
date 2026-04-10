<?php
require_once "../app/core/Database.php";

class Teacher {

    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM teachers")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM teachers WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO teachers (name, email) VALUES (?, ?)");
        return $stmt->execute([$data['name'], $data['email']]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE teachers SET name=?, email=? WHERE id=?");
        return $stmt->execute([$data['name'], $data['email'], $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM teachers WHERE id=?");
        return $stmt->execute([$id]);
    }
}
