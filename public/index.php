<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

/*
require_once __DIR__ . '/../app/core/Database.php';
$db = new Database();
echo "Conexión a la base de datos exitosa";*/

/*require_once __DIR__ . '/../app/models/Persona.php';

$persona = new Persona();

$personas = $persona->all();

echo "Lista personas";
print_r($personas);*/

/*
$persona->create([
    'nombre' => 'Carlos',
    'apellido' => "Ruiz",
    'genero' => "Masculino",
    "email" => "c@gmail.com",
    'password' => "password"
]);*/


try{
    require_once __DIR__ . '/../app/controllers/PersonaController.php';
    $controller = new PersonaController();
    $action = isset($_GET['action']) ? $_GET['action']: 'index';

    switch($action){
        case 'index':
            $controller->index();
            break;
        case 'create':
            $controller->create();
            break;
        case 'store':
            $controller->store();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'update':
            $controller->update();
            break;
        case 'delete':
            $controller->delete();
            break;
        default:
            $controller->index();
    }
} catch(Exception $e){
    echo "Error en el index.php " .$e->getMessage();
}