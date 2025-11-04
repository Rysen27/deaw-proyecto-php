<?php
/**
 * Archivo de configuración global de la aplicación.
 *
 * Define constantes y parámetros básicos del sitio web,
 * incluyendo rutas, nombre, versión y menús de navegación.
 * 
 * También implementa la función `config()` para obtener
 * valores de configuración de forma centralizada.
 *
 * @package DEAWProyecto
 * @version 1.1
 * @author Diego González
 */

// Definir la constante PATH con la URL base del proyecto local
define("PATH", "http://localhost/deaw");


/**
 * Devuelve un valor de configuración del sitio web.
 *
 * Esta función almacena en un array asociativo los parámetros
 * principales del proyecto (rutas, menús, nombre del sitio, versión, etc.)
 * y permite acceder a ellos mediante una clave.
 *
 * @param string $key Clave del valor de configuración a obtener. 
 *                    Si no se indica, devuelve null.
 * @return mixed Valor de la configuración solicitado o null si no existe.
 */
function config($key = '')
{
    // Array de configuración principal del sitio
    $config = [
        'path' => PATH,
        'name' => 'Sitio Web realizado con PHP',
        'site_url' => PATH . '/run.php',
        'nav_menu' => [
            '' => 'Inicio',
            'about-us' => 'Acerca de',
            'products' => 'Productos',
            'contact' => 'Contacto',
        ],
        'template_path' => $_SERVER["DOCUMENT_ROOT"] . '/deaw/template',
        'content_path' => $_SERVER["DOCUMENT_ROOT"] . '/deaw/content',
        'version' => 'v3.1',
    ];

    // Comprobar si la clave existe y devolver el valor correspondiente
    $var = isset($config[$key]) ? $config[$key] : null;
    return $var;
}
