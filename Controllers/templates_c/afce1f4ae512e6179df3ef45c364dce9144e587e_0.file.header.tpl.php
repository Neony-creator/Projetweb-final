<?php
/* Smarty version 4.1.0, created on 2022-03-30 14:25:58
  from 'C:\Users\pclau\IdeaProjects\Projetweb-final\Controllers\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62444c569ce850_39207092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afce1f4ae512e6179df3ef45c364dce9144e587e' => 
    array (
      0 => 'C:\\Users\\pclau\\IdeaProjects\\Projetweb-final\\Controllers\\tpl\\header.tpl',
      1 => 1648633149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62444c569ce850_39207092 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="top">
    <!-- Logo -->
    <div id="logo">
        <p> <img src="<?php echo $_smarty_tpl->tpl_vars['urls']->value['img_url'];?>
../web/img/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même ! "/> </p>
    </div>

    <!-- Bouton Wish-list -->
    <div id="WL">

        <a href ="#">
            <button type="button" class="btn btn-lg btn-dark">Wish-list</button>
        </a>
    </div>

    <!-- Titre -->

    <div id="title">
        <h1>CESI-TON-STAGE</h1>
    </div>


</section>

<header  class="sticky-top">
    <!-- Barre de navigation -->
    <div id="navigbar">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse btn-lg " id="mynavbar">
                    <ul class="navbar-nav ">
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item " style="padding-right : 2em;">
                            <a class="nav-link" href="#">Connection</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Entreprise</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Stage</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Candidature</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gestion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Gestion entreprise</a></li>
                                <li><a class="dropdown-item" href="#">Gestion stage</a></li>
                                <li><a class="dropdown-item" href="#">Gestion utilisateur</a></li>

                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php }
}
