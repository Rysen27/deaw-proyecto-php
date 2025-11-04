<?php

/**
 * Punto de entrada principal de la aplicación web.
 *
 * Este archivo inicializa la configuración general del sitio, 
 * carga las funciones necesarias y ejecuta la plantilla principal.
 *
 * @package DEAWProyecto
 * @version 1.1
 * @author Diego González
 */

// Activar la visualización de todos los errores PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cargar la configuración general del sitio
require __DIR__ . '/includes/config.php';

// Cargar las funciones globales utilizadas en la aplicación
require __DIR__ . '/includes/functions.php';

// Inicializar la aplicación (cargar plantilla principal)
init();