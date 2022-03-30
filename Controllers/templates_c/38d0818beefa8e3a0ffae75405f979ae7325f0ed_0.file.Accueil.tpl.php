<?php
/* Smarty version 4.1.0, created on 2022-03-30 14:25:58
  from 'C:\Users\pclau\IdeaProjects\Projetweb-final\Views\Accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62444c56820059_04959945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d0818beefa8e3a0ffae75405f979ae7325f0ed' => 
    array (
      0 => 'C:\\Users\\pclau\\IdeaProjects\\Projetweb-final\\Views\\Accueil.tpl',
      1 => 1648643156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:C:/Users/pclau/IdeaProjects/Projetweb-final/Controllers/tpl/header.tpl' => 1,
    'file:C:/www/smarty/tpl/footer.tpl' => 1,
  ),
),false)) {
function content_62444c56820059_04959945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/accueil.css" />
    <title>PROJET WEB, groupe 4</title>
</head>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141759085662444c56812776_75610424', 'body');
?>

</body>
</html><?php }
/* {block 'body'} */
class Block_141759085662444c56812776_75610424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_141759085662444c56812776_75610424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:C:/Users/pclau/IdeaProjects/Projetweb-final/Controllers/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>

<!-- Body -->


<body>
<div class="container">
    <div class="row">
        <!-- Image 1 -->
        <div id="image1" class="col-sm">
            <img src="/Public/file/ex.png" alt="image stage" title="Qu'est ce qu'il est beau quand même !"/>
        </div>
        <!-- texte -->
        <div class="col-sm">
            <div id="coltxt">
                <h1>  Entreprise ou étudiant? <br>Tout pout vous mettre en contact.</h1>

                <p>Lorem ipsum dolor sit amet. Aut modi maxime qui accusantium quis sit animi tempore et dolor tempora. Qui maxime libero qui harum minus et voluptatem amet rem voluptas dolor At facere dolore qui voluptatem quis ea consequatur illo. Id ullam voluptatem ut laborum modi sed provident illo quo porro nesciunt ab fugiat ipsam? Aut dolores saepe est suscipit enim vel voluptates nisi.Ut architecto dolorem quo quos itaque vel velit dolores ut reiciendis illo et voluptatem unde id provident earum? Et alias quos sed consectetur molestiae 33 porro illum. Ut facilis quia qui asperiores fugit est unde nesciunt. Qui quos magnam illum exercitationem est commodi iusto aut alias autem aut sint laudantium et sapiente libero.</p>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap Bundle with Popper -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
-->
<br><br><br>
</body>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:C:/www/smarty/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
}
