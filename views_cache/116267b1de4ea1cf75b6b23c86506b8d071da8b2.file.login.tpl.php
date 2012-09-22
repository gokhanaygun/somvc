<?php /* Smarty version Smarty-3.0.8, created on 2012-09-12 09:31:56
         compiled from "application/views\member/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2789050502c5c6a8a15-85866518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116267b1de4ea1cf75b6b23c86506b8d071da8b2' => 
    array (
      0 => 'application/views\\member/login.tpl',
      1 => 1344854505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2789050502c5c6a8a15-85866518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="member_register">
	<h1>Giriş Yapın</h1>

	<h2>Kendinden.com üyelerine özel, kampanyaları ve yenilikleri, bir tık yanınızda. </h2>
	<form action="" method="post">
	<ul class="member_field">
		<li>
			<div class="left strong w100 h30">E-posta</div>  
			<div class="left w15">:</div> <div class="left w200"><input value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" type="text" name="email" /></div>
			<?php if ($_smarty_tpl->getVariable('email_r')->value!=''){?><div class="requirement"><div class="requirement_top"></div><div class="requirement_text"><?php echo $_smarty_tpl->getVariable('email_r')->value;?>
</div></div><?php }?>
		</li>
		<li>
			<div class="left strong w100 h30">Şifre</div>  
			<div class="left w15">:</div> <div class="left w200"><input type="password" name="password" /></div>
			<?php if ($_smarty_tpl->getVariable('password_r')->value!=''){?><div class="requirement"><div class="requirement_top"></div><div class="requirement_text"><?php echo $_smarty_tpl->getVariable('password_r')->value;?>
</div></div><?php }?>
		</li>
		
		<li><input type="submit" class="submit_button" name="submit_button" value="Giriş" /></li>
                <li><?php if ($_smarty_tpl->getVariable('login_r')->value!=''){?><div class="requirement"><div class="requirement_text"><?php echo $_smarty_tpl->getVariable('login_r')->value;?>
</div></div><?php }?></li>
	</ul>
	</form>
</div><!-- end member_register-->
<?php $_template = new Smarty_Internal_Template("footer/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>