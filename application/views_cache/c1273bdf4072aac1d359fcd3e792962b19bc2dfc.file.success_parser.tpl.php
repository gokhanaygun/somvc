<?php /* Smarty version Smarty-3.0.8, created on 2012-05-29 21:44:14
         compiled from ".\views\parser/success_parser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240584fc518fe000d06-13279532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1273bdf4072aac1d359fcd3e792962b19bc2dfc' => 
    array (
      0 => '.\\views\\parser/success_parser.tpl',
      1 => 1338317013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240584fc518fe000d06-13279532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<h1>Ýstanbul Hava Durumu En Düþük : <?php echo $_smarty_tpl->getVariable('data')->value['min_hava_sicakligi'];?>
</h1>
	<h1>Ýstanbul Hava Durumu En Yüksek : <?php echo $_smarty_tpl->getVariable('data')->value['max_hava_sicakligi'];?>
</h1>
