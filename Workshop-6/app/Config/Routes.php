<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Estudiante::index'); // pagina de inicio, lista de estudiantes

$routes->get('estudiantes/index', 'Estudiante::index'); // Lista de estudiantes
$routes->get('estudiantes/crear', 'Estudiante::crear'); // Formulario
$routes->post('estudiantes/guardar', 'Estudiante::guardar'); // Guardar

$routes->get('carreras/index', 'Carrera::index');
$routes->get('carreras/crear', 'Carrera::crear');
$routes->post('carreras/guardar', 'Carrera::guardar');
