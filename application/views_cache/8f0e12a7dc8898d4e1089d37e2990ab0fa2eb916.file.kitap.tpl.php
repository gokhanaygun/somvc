<?php /* Smarty version Smarty-3.0.8, created on 2012-05-29 20:59:37
         compiled from ".\views\kitap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267334fc50e89ecd422-51397598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0e12a7dc8898d4e1089d37e2990ab0fa2eb916' => 
    array (
      0 => '.\\views\\kitap.tpl',
      1 => 1338232376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267334fc50e89ecd422-51397598',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<title>adsdasd</title>

<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dil')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
       <?php echo $_smarty_tpl->getVariable('d')->value->ad;?>

<?php }} ?>

<script>

</script>
