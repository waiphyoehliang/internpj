<?php
include 'DB.php';

class Table extends DB{
    public function getAllusers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);

        $name = $stmt->fetchAll();
        // while ($row = $stmt->fetchAll()) {
        //     $name = $row[] . '<br>';
        // }
        return $name;
    }
    public function getAllDepartment()
    {
        $sql = "SELECT * FROM department";
        $stmt = $this->connect()->query($sql);

        $name = $stmt->fetchAll();
        // while ($row = $stmt->fetchAll()) {
        //     $name = $row[] . '<br>';
        // }
        return $name;
    }

}
