<?php
/* Smarty version 3.1.39, created on 2022-03-18 22:50:00
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/ejemplo/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6234fe88850d63_86344434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9acdbe283c4da5c9b65bd7be634fe8b3cb4a066' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/ejemplo/templates/header.tpl',
      1 => 1647635490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6234fe88850d63_86344434 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo '<?php ';?>
echo BASE_URL <?php echo '?>';?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/style.css">

    <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">                    
                        <a class="navbar-brand" href="<?php echo BASE_URL;?>
">Biblioteca Virtual</a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if ((isset($_SESSION['ADMIN_ID']))) {?> <!-- verifico el rol de el usuario ingresado -->
                           <div class="dropdown">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL;?>
" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Opciones de Administracion
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL;?>
agregarLibro">Agregar libro</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL;?>
EditarLibro">Editar libro</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL;?>
agregarAutor">Agregar autor</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL;?>
EditarAutor">Editar/Eliminar autor</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                         <li><a class="dropdown-item" href="<?php echo BASE_URL;?>
userManage">Administracion de usuarios</a></li>
                                   
                                    </ul>
                                </li>
                         </div>
                            
                            <?php }?>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
autores">Autores</a> </li>

                    </ul>
                    
                    <ul class="navbar-nav ml-auto">
                    
                    <?php if ((isset($_SESSION['ADMIN_ID'])) || (isset($_SESSION['USER_ID']))) {?>
                            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
logout"> <button type="button" class="btn btn-outline-secondary">Log Out </button></a> </li>   
                    <?php } else { ?> 
                        <li class="nav-item "> <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
login"><button type="button" class="btn btn-outline-secondary">Log In </button></a> </li>
                        <li class="nav-item "> <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
registerForm"><button type="button" class="btn btn-outline-secondary">Registrarse </button></a> </li>
                    <?php }?>
                            
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- inicio de contenido principal -->
    <div class="container">
<?php }
}
