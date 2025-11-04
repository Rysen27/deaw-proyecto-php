<?php
/**
 * Funciones principales del sitio web.
 *
 * Este archivo contiene las funciones globales utilizadas para generar la información 
 * del sitio, los menús de navegación y el contenido dinámico de las páginas.
 * 
 * @package DEAWProyecto
 * @version 1.0
 * @author TuNombre
 */


/**
 * Muestra el nombre del sitio definido en la configuración.
 *
 * @return void
 */
function site_name()
{
    $var = config('name');
    echo $var;
}


/**
 * Muestra la URL base del sitio web.
 *
 * @return void
 */
function site_url()
{
    $var = config('site_url');
    echo $var;
}


/**
 * Muestra la ruta física del proyecto en el servidor.
 *
 * @return void
 */
function site_path()
{
    $var = config('path');
    echo $var;
}


/**
 * Muestra la versión del sitio web o aplicación.
 *
 * @return void
 */
function site_version()
{
    $var = config('version');
    echo $var;
}


/**
 * Genera el menú de navegación principal del sitio.
 *
 * Crea enlaces dinámicos basados en la configuración del menú 
 * y resalta la página actual con la clase "active".
 *
 * @param string $sep Separador entre los elementos del menú (por defecto " | ").
 * @return void
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');

    foreach ($nav_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' active' : '';
        $url = config('site_url') . '/' . ($uri == '' ? '' : '?page=') . $uri;
        
        // Construir el menú de navegación (concatenando elementos con .=)
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    echo trim($nav_menu, $sep);
}


/**
 * Muestra el título de la página actual.
 *
 * Determina el título en función del valor del parámetro 'page' en la URL.
 * Si no se indica, usa 'Home' por defecto.
 *
 * @return void
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    $titulo = [                             
        'Home' => '>>Inicio',                 
        'about-us' => '>>Acerca de',          
        'products' => '>>Productos',
        'contact' => '>>Contacto',
    ];  
    echo  $titulo[$page] ?? 'Página';
}


/**
 * Carga y muestra el contenido de la página solicitada.
 *
 * Busca el archivo .phtml correspondiente a la página actual dentro 
 * del directorio configurado como 'content_path'. Si no existe, 
 * muestra el contenido de la página 404.
 *
 * @return void
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path =  config('content_path') . '/' . $page . '.phtml';

    // Si el archivo no existe, cargar la página de error 404
    if (! file_exists($path)) {
        $path =  config('content_path') . '/404.phtml';
    }

    // Volcar contenido en pantalla
    echo file_get_contents($path);
}


/**
 * Inicializa la plantilla principal del sitio.
 *
 * Incluye el archivo template.php desde la ruta definida 
 * en la configuración ('template_path').
 *
 * @return void
 */
function init()
{
    require config('template_path') . '/template.php';
}