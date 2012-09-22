{include file="header/header.tpl"}
<div class="member_register">
	<h1>İlan vermenin en hızlı yolunda, birinci adımdasınız.</h1>

	<h2>Üyelik formunu eksiksizce doldurarak üyelik hizmetlerinden hemen yararlanmaya başlayabilirsiniz.</h2>
	<form action="" method="post">
	<ul class="member_field">
		<li>
			<div class="left strong w100 h30">Kullanıcı Adı</div> 
			<div class="left w15">:</div> 
			<div class="left w200"><input value="{$username}" type="text" name="username" /></div>
			{if $username_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$username_r}</div></div>{/if}
		</li>
		<li>
			<div class="left strong w100 h30">Adınız</div>  
			<div class="left w15">:</div> 
			<div class="left w200"><input value="{$name}" type="text" name="name" /></div>
			{if $name_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$name_r}</div></div>{/if}
		</li>
		<li>
			<div class="left strong w100 h30">Soyadınız</div>  
			<div class="left w15">:</div> <div class="left w200"><input value="{$surname}" type="text" name="surname" /></div>
			{if $surname_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$surname_r}</div></div>{/if}
		</li>
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
		<li>
			<div class="left strong w100 h30">Şifre Tekrar</div>  
			<div class="left w15">:</div> <div class="left w200"><input type="password" name="password_confirm" /></div>
                        {if $password_confirm_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$password_confirm_r}</div></div>{/if}
		</li>
		<li>
		<div class="left strong w100 h30">Doğum Tarihi</div>  <div class="left w15">:</div> <div class="left w200">
			<select name="day">
				{html_options options=$dayOptions selected=$day}
			</select>		
			<select name="month">
				{html_options options=$monthOptions selected=$month}
			</select>	
			<select name="year">
				<option value="">Yıl</option>
				{html_options options=$yearOptions selected=$year}
			</select>	
		</div>
                 {if $birthday_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$birthday_r}</div></div>{/if}		       
		</li>
		<li>
		<div class="left strong w100 h30">Ülke</div>  <div class="left w15">:</div> <div class="left w200">
			<select name="country">
				<option value="">Seçiniz</option>
				{html_options options=$countryOptions selected=$country}
			</select>
		</div>
		{if $country_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$country_r}</div></div>{/if}
		</li>
		<li>
		<div class="left strong w100 h30">İl</div>  <div class="left w15">:</div> <div class="left w200">
			<select name="city">
				<option value="">Seçiniz</option>
				{html_options options=$cityOptions selected=$city}
			</select>		
			
		</div>
		{if $city_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$city_r}</div></div>{/if}
		</li>
		<li>
		<div class="left strong w100 h30">Cinsiyet</div>  <div class="left w15">:</div> <div class="left w200">
		{html_radios name='gender' values=$gender_ids output=$gender_names selected=$gender separator='&nbsp;'}	
		</div>
		{if $gender_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$gender_r}</div></div>{/if}
		</li>
		<li>
		 <div class="left">
                    {html_checkboxes name='contract' options=$contract_approved selected=$contract}	
		</div>
		{if $contract_r ne ''}<div class="requirement"><div class="requirement_top"></div><div class="requirement_text">{$contract_r}</div></div>{/if}
		</li>                
		<li><input type="submit" class="submit_button" name="submit_button" value="Kaydol" /></li>
	</ul>
	</form>
</div><!-- end member_register-->
{include file="footer/footer.tpl"}