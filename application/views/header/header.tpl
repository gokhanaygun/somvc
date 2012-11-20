<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
    <head>
        <title>Kendinden.com</title>
        <base href="http://localhost/kendinden.com/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Language" content="tr"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
	<link rel="stylesheet" type="text/css" href="application/views/styles/jquery1.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="application/views/styles/screen.css"/>
        <script type="text/javascript" src="application/views/scripts/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="application/views/scripts/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="application/views/scripts/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="application/views/scripts/scroll-startstop.events.jquery.js"></script>        
        <script type="text/javascript" src="application/views/scripts/jquery.carouFredSel-5.6.2.js"></script>        
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div class="header_title">
                    <ul class="top_menu_list">
                        {if isset($smarty.session.member_info) eq TRUE }
                        <li><a href="member/register/" class="hello_title">Merhaba ; {$smarty.session.member_info->member_name}</a> </li>
                        <li><a href="#" class="special_me">Bana Özel</a></li>
                        <li><a href="product/" class="announcement_add">İlan Ekle</a></li>
                        <li><a href="member/logout/" class="account_close">Çıkış Yap</a></li>
                        <li><a href="#" class="sitemap">Site Haritası</a></li>
                        <li style="border:none"><a href="#" class="help">Yardım</a></li>
                        {else}
                         <li><a href="member/register/" class="member_reg">Yeni Üyelik</a> </li>
                         <li><a href="member/login/" class="member_log">Giriş Yap</a> </li>
                        <li><a href="product/" class="announcement_add">İlan Ekle</a></li>
                        
                        <li><a href="#" class="sitemap">Site Haritası</a></li>
                        <li style="border:none"><a href="#" class="help">Yardım</a></li>                       
                        {/if}
                    </ul>
                </div><!--end header_title -->
                <a href="#" class="logo"></a> <!-- end logo -->
                <div id="top_menu"> 
                    <div class="search_box">
                        <form action="" method="get">
                           <input type="text" name="word" class="search_input" />
                           <input type="submit" value="" class="search_button" name="search_button" />
                        </form>
                        <a href="#" class="detail_search_button"></a>
                    </div>  
                    <ul class="root_category">
                        <li><a href="list/">Emlak</a></li>
                        <li><a href="#">Vasıta</a></li>
                        <li><a href="#">Renk A Car</a></li>
                        <li><a href="#">Banka Gayrimenkulleri</a></li>
                        <li style="border:none"><a href="#">İcra</a></li>
                    </ul><!-- end rot_category-->
                    <a href="#" class="all_category_button"></a>
                </div> <!-- end top menu -->
                <div class="top_line"></div>
            </div><!-- end header-->
