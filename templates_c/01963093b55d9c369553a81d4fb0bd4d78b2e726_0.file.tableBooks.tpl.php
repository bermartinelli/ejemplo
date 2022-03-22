<?php
/* Smarty version 3.1.39, created on 2022-03-18 22:51:43
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/ejemplo/templates/tableBooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6234feef043d60_42235532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01963093b55d9c369553a81d4fb0bd4d78b2e726' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/ejemplo/templates/tableBooks.tpl',
      1 => 1647640295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6234feef043d60_42235532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<table class="table">
    <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Genero</th>
          <th scope="col">Nombre del Autor</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->libro_nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['books']->value->genero;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['books']->value->autor_nombre;?>
</td>
        </tr> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>
</table>
<?php }
}
