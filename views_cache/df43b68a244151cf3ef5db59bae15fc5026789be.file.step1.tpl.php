<?php /* Smarty version Smarty-3.0.8, created on 2012-09-11 16:23:20
         compiled from "application/views\product/step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27739504f3b48a92105-95621105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df43b68a244151cf3ef5db59bae15fc5026789be' => 
    array (
      0 => 'application/views\\product/step1.tpl',
      1 => 1346230221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27739504f3b48a92105-95621105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'D:\AppServ\www\kendinden.com\core\plugins\function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("header/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="step_list">
    <ul>
        <li class="select">
            <h2 class="step_number list1">1</h2>
            <p>Kategori Seçimi</p>
        </li>
        <li>
            <h2 class="step_number list2">2</h2>
            <p>İlan Detayı</p>
        </li>
        <li>
            <h2 class="step_number list3">3</h2>
            <p>Önizle</p>
        </li>
        <li>
            <h2 class="step_number list4">4</h2>
            <p>Kendinden Para</p>
        </li>
        <li>
            <h2 class="step_number list5">5</h2>
            <p>Tebrikler</p>
        </li>      
    </ul>
</div><!-- end step_list-->

<div class="step1_inner">
    <div class="select_box">
        <div class="select_box_in">
            <select class="category_list"  multiple="" id="unit_1">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('category_top')->value),$_smarty_tpl);?>

            </select>
            <div class="category_selected_ok"> 
                <img src="application/views/images/success_ok.png" />
                <h2>Kategori seçimi tamamlanmıştır</h2>
                <a href="#">Devam</a>
            </div>
        </div>
    </div>
    
</div>

<?php $_template = new Smarty_Internal_Template("footer/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>