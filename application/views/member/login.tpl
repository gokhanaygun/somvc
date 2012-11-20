{include file="header/header.tpl"}
<div class="member_register">
	<h1>Giriş Yapın</h1>

	<h2>Test.com üyelerine özel, kampanyaları ve yenilikleri, bir tık yanınızda. </h2>
	<form action="" method="post">
	<ul class="member_field">
		<li>
			<div class="left strong w100 h30">E-posta</div>  
			<div class="left w15">:</div> <div class="left w200"><input value="{$email}" type="text" name="email" /></div>
			{if $email_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$email_r}</div></div>{/if}
		</li>
		<li>
			<div class="left strong w100 h30">Şifre</div>  
			<div class="left w15">:</div> <div class="left w200"><input type="password" name="password" /></div>
			{if $password_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$password_r}</div></div>{/if}
		</li>
		
		<li><input type="submit" class="submit_button" name="submit_button" value="Giriş" /></li>
                <li>{if $login_r ne ''}<div class="requirement"><div class="requirement_text">{$login_r}</div></div>{/if}</li>
	</ul>
	</form>
</div><!-- end member_register-->
{include file="footer/footer.tpl"}