<?php /* Smarty version Smarty-3.0.8, created on 2012-09-13 18:30:44
         compiled from "application/views\product/step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253905051fc24484f98-43174347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fff34c1599b4f0f762861a4802d42ab39cb055c' => 
    array (
      0 => 'application/views\\product/step2.tpl',
      1 => 1347550226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253905051fc24484f98-43174347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'D:\AppServ\www\kendinden.com\core\plugins\function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("header/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script type="text/javascript" src="app_scripts/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="app_scripts/ckeditor/adapters/jquery.js"></script>

<link rel="stylesheet" href="app_styles/validation/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="app_styles/validation/template.css" type="text/css"/>
<script src="app_scripts/validation/languages/jquery.validationEngine-tr.js" type="text/javascript" charset="utf-8"></script>
<script src="app_scripts/validation/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $(".product_form1").validationEngine('attach',{
				onValidationComplete: function(form, status){
					if(status == false){
                                            $.ajax({
                                                type : "post",
                                                url    : "product/get_captcha/code/"+$("#secret_image").val()+"/x/"+Math.random()+"/",
                                                success : function(t){
                                                   if(t==1){
                                                        alert('post edelim');
                                                   } else {
                                                       alert('Güvenlik kodunu hatalı girdiniz.');
                                                   } 
                                                }                       
                                            });
                                        }
				}  
			});
          

        product.map();
        product.map.load();
        product.map.fill(1,0);  
        $('.secret_image_rewiew_button').click(function(){
        
            $('.secret_image').attr('src','captcha_product.png?x='+Math.random());
        });        
        $( 'textarea.description' ).ckeditor(function() { }, 
            {
                skin : 'office2003',
                toolbar: [
                            { name: 'document', items : [ 'Source','-','-','Templates' ] },
                            { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike' ] },                
                            { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord' ] },
                            { name: 'paragraph', items : [ 'JustifyLeft','JustifyCenter','JustifyRight' ] },
                            { name: 'links', items : [ 'Link','Unlink' ] },   
                            { name: 'styles', items : ['Font','FontSize' ] },
                            { name: 'colors', items : [ 'TextColor','BGColor' ] }
                        ],
                width : 870,
                height: 300,
                removePlugins : 'resize',
                extraPlugins : 'tableresize'
            }
        );
        $('.member_agreement_inner').animate({height:0});    
        $('a#member_agreement_button').click(function(){
          $('.member_agreement_inner').animate({height:300});  
        });
    });
</script>


<div class="step_list">
    <ul>
        <li class="select">
            <h2 class="step_number list1">1</h2>
            <p><a href="product/">Kategori Seçimi</a></p>
        </li>
        <li class="select">
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
<form action="" method="post" class="product_form" enctype="multipart/form-data">
<div class="step2_inner">

    <div id="error_message1"> 
  <ul></ul> 
</div> 
    
    <div class="section">
        <h2 id="sec1">İletişim Bilgileri</h2>
        <div class="section_content">  
            
            <ul class="clearb h170 ">
                <li class="w300 fleft">
                    <ul class="w300 clearb h100 ">
                        <li class="strong w100 fleft">Adı Soyadı</li>
                        <li class="fleft"><?php echo $_smarty_tpl->getVariable('member_info')->value->member_name;?>
 <?php echo $_smarty_tpl->getVariable('member_info')->value->member_surname;?>
</li>
                        <li class="clearb h10"></li>
                        <li class="strong w100 fleft">Ev Telefonu </li>
                        <li class="fleft"><?php echo $_smarty_tpl->getVariable('member_info')->value->member_home_phone;?>
 </li>
                        <li class="clearb h10"></li>
                        <li class="strong w100 fleft">İş Telefonu</li>
                        <li class="fleft"><?php echo $_smarty_tpl->getVariable('member_info')->value->member_work_phone;?>
 </li>
                        <li class="clearb h10"></li>
                        <li class="strong w100 fleft">Cep Telefonu</li>
                        <li class="fleft"><?php echo $_smarty_tpl->getVariable('member_info')->value->member_gsm;?>
 </li>
                        <li class="clearb h10"></li>
                        <li class="strong w100 fleft"> &nbsp;</li>
                        <li class="fleft"><a href="" class="sec1_update_button">Güncelle</a></li>                
                    </ul>                
                </li>
                <li class="w300 fleft">
                    <input id="phone_publish" type="checkbox" name="product[has_phone_publish]" value="1" />
                    <label for="phone_publish">Telefonların ilanımda yayınlansın</label>
                </li>
                <li class="w300 fleft">
                    <div class="set1_info">
                        <p class="set1_info_title">İlanınızda yer alacak olan sisteme kayıtlı iletişim bilgilerinizi</p>
                        <p class="set1_info_desc">
                            İlanınızda yer alacak olan sisteme kayıtlı iletişim bilgilerinizi

                            “Güncelle” butonuyla değiştirebilirsiniz.
                            Güncelleme yapmadığınız taktirde ilanda kayıtlı iletişim
                            bilgileriniz değiştirilmez                        
                        </p>
                    </div>
                </li>
                        
            </ul>  
        </div><!--end section_content-->
    </div><!--end section-->
    <div class="section">
        <h2 id="sec2">İlan Detayları</h2>
        <div class="section_content">  
            <ul class="w1000">
                <li class="strong w100 fleft">Kategori* </li>
                <li class="fleft">
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category_sub')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
                        <?php echo $_smarty_tpl->getVariable('category')->value->category_name;?>
 > 
                    <?php }} ?>  
                    <a href="product/" class="sec_change_button">Değiştir</a>
                </li>
                <li class="clearb h10"></li>
                <li class="strong w100 fleft">İlan Başlığı*</li>
                <li class="fleft"><input maxlength="80" class="w600 b_1px validate[required]" type="text" name="product[title]" title="İlan başlığını doldurun" /><br /><br />
                    <input value="1" type="checkbox" name="product[has_title_bold]" id="p_has_title_bold" />
                    <label for="p_has_title_bold"><span class="bold">İLANINIZ FARKLI GÖRÜNSÜN</span> Kalın Yazı ve Renkli Çerçeve(9,90 Kendinden Para)</label>
                </li>
                 <li class="clearb h10"></li>

                <li class="strong w100 fleft">Fiyat* </li>
                <li class="fleft">
                    <input maxlength="20" class="w200 b_1px validate[custom[integer]]" type="text" name="product[price]" title="Doğru bir fiyat girin" />
                    <select name="product[price2]">
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['name'] = 'price2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'] = ((int)10) == 0 ? 1 : (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop'] = is_array($_loop=100) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['price2']['total']);
?>    
                        <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['price2']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['price2']['index'];?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    &nbsp;
                    <select name="product[price_type]">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('price_type')->value),$_smarty_tpl);?>

                    </select>            
                </li>    
                <li class="clearb h10"></li>
                
                <li class="strong w100 fleft">Açıklama </li>
                <li class="fleft">
                    <textarea class="description" title="İlan açıklaması girmelisiniz" name="product[description]"></textarea>     
                </li>
                 <li class="clearb h10"></li>
                
            </ul>
           <ul class="h300">
           <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('detail')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
                <li class="strong w200 fleft"><?php echo $_smarty_tpl->tpl_vars['d']->value['detail_name'];?>
*</li>
                <li class="fleft w200">
                <?php if ($_smarty_tpl->tpl_vars['d']->value['detail_type']=='text'){?><input class="validate[required]" type="text" name="product[detail][<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_id'];?>
]" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['d']->value['detail_type']=='select'){?>
                    <select class="validate[required]" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_name'];?>
 bilgisini girmelisiniz" name="product[detail][<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_id'];?>
]">
                        <option value="">Seçiniz</option>
                    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
"><?php echo $_smarty_tpl->getVariable('o')->value->detail_option_name;?>
</option>
                    <?php }} ?>
                    </select>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['d']->value['detail_type']=='radio'){?>
                    
                    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
                        <input class="validate[required]" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_name'];?>
 bilgisini girmelisiniz" type="radio" id="detail_radio_<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
" name="product[detail][<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_id'];?>
]" value="<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
"><label for="detail_radio_<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
"><?php echo $_smarty_tpl->getVariable('o')->value->detail_option_name;?>
</label>
                    <?php }} ?>
                    
                <?php }?>   
                
                <?php if ($_smarty_tpl->tpl_vars['d']->value['detail_type']=='checkbox'){?>
                    
                    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
                        <input type="checkbox"   title="<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_name'];?>
 bilgisini girmelisiniz" id="detail_radio_<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
" name="product[detail][<?php echo $_smarty_tpl->tpl_vars['d']->value['detail_id'];?>
]" value="<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
"><label for="detail_radio_<?php echo $_smarty_tpl->getVariable('o')->value->detail_option_id;?>
"><?php echo $_smarty_tpl->getVariable('o')->value->detail_option_name;?>
</label>
                    <?php }} ?>
                    
                <?php }?>                 
                </li>
                 <?php if ($_smarty_tpl->tpl_vars['d']->value['detail_id']%2==0){?><li class="clearb h10"></li><?php }?>
                 <?php }} ?> 
                 
                <li class="strong w200 fleft">Takas</li>
                <li class="fleft w200">
                        <input type="checkbox" id="exchange" name="product[exchange]" value="1"><label for="exchange">Evet</label>
              
                </li>                 
              </ul>
        </div><!--end section_content-->
    </div><!--end section-->    
    <div class="section">
        <h2 id="sec3">Adres Bilgileri</h2>
        <div class="section_content">  

            <select id="city" class="w200 validate[required] fleft" title="İl seçmelisiniz"  name="product[city]" onchange="product.map.fill(2,document.getElementById('city').options[this.selectedIndex].value);">
            </select>     

            <select id="town" class="w200 validate[required] fleft" title="İlçe seçmelisiniz" name="product[town]" onchange="product.map.fill(3,document.getElementById('town').options[this.selectedIndex].value);">
            </select>  
            
            <select id="district" class="w200 validate[required] fleft" title="Mahalle seçmelisiniz" name="product[district]" onchange="product.map.fill(4,document.getElementById('district').options[this.selectedIndex].value);">
            </select>   
            
            <br /><br />
            
            Adresi daha kolay bulmak için&nbsp; <input id="autocomlete_area" class="w200 b_1px" name="geoword"/> &nbsp;&nbsp;
            Aradığınız semt, mahalle veya sokak yazınız.
            
            <br /><br />
            <div id="productMap" style="width:980px;height: 400px;"></div>
            <input type="hidden" name="product[map_lat]" id="lat" value="0.00" />
            <input type="hidden" name="product[map_lng]" id="lng" value="0.00" />  
        </div><!--end section_content-->
    </div><!--end section-->      
    <div class="section">
        <h2 id="sec4" class="color_white">Ürün Özellikleri</h2>
        <div class="section_content">  
             <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('feature')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
 $_smarty_tpl->tpl_vars['v']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
               <div class="clearb" style="margin-bottom:20px;">
               <h2 style="margin:0 0 10px -15px;" class="h20"><?php echo $_smarty_tpl->tpl_vars['f']->value['feature_name'];?>
</h2>
               <ul class="clearb bg_liveblue b_1px">
                <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>   
                    <li class="w200 fleft h30"><input type="checkbox" name="product[feature][<?php echo $_smarty_tpl->getVariable('o')->value->feature_id;?>
]" value="1" id="feature_<?php echo $_smarty_tpl->getVariable('o')->value->feature_id;?>
" /><label for="feature_<?php echo $_smarty_tpl->getVariable('o')->value->feature_id;?>
"><?php echo $_smarty_tpl->getVariable('o')->value->feature_name;?>
</label> </li>
               <?php }} ?>
                <br class="clearb" />
               </ul>
              
               </div>
             <?php }} ?>
         </div><!--end section_content-->
    </div><!--end section-->      
    <div class="section">
        <h2 id="sec5" class="color_white">Ürün Resimleri</h2>
        <div class="section_content"> 
                    <div class="set5_info">
                        <p class="set5_info_title">Resim</p>
                        <p class="set5_info_desc">
                           Yükleyeceğiniz her bir resim en falza 3 MB olabilir.                    
                        </p>
                    </div>             
            
            <div class="product_input_picture">
                <input type="file" name="picture[]" multiple="" />
            </div>    
            <br class="clearb" />
            <input value="1" type="checkbox" name="product[picture_display]" id="picture_display" /> <label for="picture_display">İlanım listelenirken küçük resim görünsün, daha çok tıklanma alsın</label> : <b>9,99 Kendindenpara</b>
         </div><!--end section_content-->
    </div><!--end section-->   
    <div class="section" class="color_white">
        <h2 id="sec6" class="color_white">Ürün Videosu</h2>
        <div class="section_content">  
               <input type="file" accept="image/*" name="video" /> 
                    <div class="set6_info">
                        <p class="set6_info_title">Video</p>
                        <p class="set6_info_desc">
                        Yükleyeceğiniz video en fazla 30 MB boyutunda ve 'mp4','mov','mpg','avi' türünde olmalıdır.                     
                        </p>
                    </div>  
            <br class="clearb" />
         </div><!--end section_content-->
    </div><!--end section-->  
    <div class="section">
        <h2 id="sec7">İlan Notu</h2>
        <div class="section_content">  
            <textarea class="b_1px w600 h100" name="product[note]"></textarea>            
         </div><!--end section_content-->
    </div><!--end section-->   
    <div class="section" class="color_white">
        <h2 id="sec8" class="color_white">Üyelik Sözleşmesi*</h2>
        <div class="section_content">  
            <input type="checkbox" value="1" name="product[member_agreement]" id="member_agreement_checkbox" class="validate[required]" title="Üyelik sözleşmesini, kabul etmelisiniz." /> <a href="javascript:;" id="member_agreement_button">İlan verme kuralları</a><label for="member_agreement_checkbox">'nı okudum ve kabul ediyorum </label>
            <div class="member_agreement_inner">
            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
            
            </div>
         </div><!--end section_content-->
    </div><!--end section-->     
    <div class="section" class="color_white">
        <h2 id="sec9" class="color_white">Güvenlik Kodu*</h2>
        <div class="section_content">  
            <p>Lütfen resimde gördüğünüz güvenlik kodunu oluşturan harfleri, aralarında boşluk bırakmadan, yanında bulunan kutucuğun içine yazınız.
Okuyamıyorsanız yenile butonuna basıp değiştiriniz. </p>
          <img src="captcha_product.png" class="secret_image" />  <img style="cursor:pointer"  class="secret_image_rewiew_button"  src="app_images/refresh_image.png" />   <input type="text" class="w200 b_1px validate[required]" title="Güvenlik kodunu girmelisiniz" id="secret_image" name="product[secret_image]" />        
         </div><!--end section_content-->
    </div><!--end section-->  
    <input class="product_form_submit" type="submit" value="Kaydet" />
    
   
</div><!-- step2 inner-->
</form>

<?php $_template = new Smarty_Internal_Template("footer/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>