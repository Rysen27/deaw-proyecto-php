<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_path(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
    
</head>
<body>
//La funcion de utilizar "wrap" es la de agrupar toda la pagina, por ejemplo para editar estilos
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>//Muestra el nombre del sitio
        <nav class="menu">
            <?php nav_menu(); ?>//Es una funcion que genera el menu de navegacion
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>//Imprime el contenido concreto de esa pagina
    </article>

    <footer>
        <small><?php echo date('Y'); ?> <?php echo "DAW2V-0613" ?>.<br><?php site_version();//Muestra la version del proyecto ?></small>
    </footer>

</div>
</body>
</html>