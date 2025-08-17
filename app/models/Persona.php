<?php

require_once __DIR__ . '/../core/Database.php';

class Persona
{

    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM personas");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM personas WHERE id = ? ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO personas (nombre, apellido, genero, email, password) VALUES(?,?,?,?,?)");

        //Encriptar 
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $stmt->execute([
            $data['nombre'],
            $data['apellido'],
            $data['genero'],
            $data['email'],
            $data['password'],
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE personas SET nombre = ?, apellido = ?, genero = ?, email = ?";
        $params = [$data['nombre'], $data['apellido'], $data['genero'], $data['email']];

        if (!empty($data['password'])) {
            $sql .= ", password= ?";
            $params[] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $sql .= " WHERE id = ?";
        $params[] = $id;

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("UPDATE personas SET activo = 0 WHERE id = ? ");
        return $stmt->execute([$id]);
    }



}