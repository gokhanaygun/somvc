{include file="header/header.tpl"}
<div class="list_leftbar">
<div class="cetegory">
	<h2>Kategoriler</h2>
	<ul class="cetagory_list">
		<li><a href="#">Emlak</a>
		<ul class="sub_category">
			<li><a href="#">Konut</a><span class="c_count"> (200)</span></li>
			<li><a href="#">İşyeri</a><span class="c_count"> (100)</span></li>
			<li><a href="#">Arsa</a><span class="c_count"> (100)</span></li>
		</ul>
		</li>
		<li><a href="#">Vasıta</a></li>
		<li><a href="#">Renk A Car</a></li>
	</ul>
</div><!-- end category-->
<div class="address">
	<p class="a_title">Adres</p>
	<select class="a_contry" name="country">
		<option value="">Tüm Ülkeler</option>
		<option selected value="1">Türkiye</option>
		<option value="1">Almanyaasdasdadadad</option>
		<option value="1">Fransa</option>
	</select>
	<select class="a_city" name="city">
		<option value="">Tüm İller</option>
		<option selected value="1">İstanbul</option>
		<option value="1">Almanyaaaaaaaaaaaaaaa</option>
		<option value="1">Fransa</option>
	</select>
	<select class="a_town" name="town">
		<option value="">Tüm İlçeler</option>
		<option selected value="1">Güngören</option>
		<option value="1">Almanyaaaaaaaaaaaaaaa</option>
		<option value="1">Fransa</option>
	</select>
	<select class="a_district" multiple="multiple" name="district">
		<option></option>
	</select>
</div><!-- end address-->

<div class="price_limit">
<p class="p_title">Fiyat</p>
	<input type="text" name="price_min" /> - 
	<input type="text" name="price_max" />
</div>

<div class="is_limit">
	<input type="checkbox" name="is_video" value="1" id="is_video" />
	<label for="is_video">Videolu ilanlar</label>	<br />
	<input type="checkbox" name="is_photo" value="1" id="is_photo" />
	<label for="is_photo">Fotoğraflı ilanlar</label>	<br />

</div>
<input type="submit" class="filter_button" value="Ara" />

<div class="ad195x500">Reklam Alanı</div><!-- end ad195x500 -->
</div><!-- end list_leftbar-->
<div class="list_rightbar">
	<div class="list_header">
		<select name="list_popular">
		<optgroup label="Sırala">
			<option value="">Fiyat Artan</option>
			<option value="">Fiyat Azalan</option>
			<option value="">Yeni Tarih</option>
			<option value="">Eski Tarih</option>
		</optgroup>
		</select>
		<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Haritayı Kapat</a></div>
	</div><!-- end list_header-->
	
	<div class="list_map">
		<iframe width="790" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=Merter+%C4%B0%C5%9F+Merkez,+Istanbul,+T%C3%BCrkiye&amp;aq=3&amp;oq=merter+&amp;sll=37.0625,-95.677068&amp;sspn=37.188995,86.572266&amp;ie=UTF8&amp;hq=Merter+%C4%B0%C5%9F+Merkez,&amp;hnear=Istanbul,+T%C3%BCrkiye&amp;ll=41.015215,28.929682&amp;spn=0.027059,0.113467&amp;t=m&amp;output=embed"></iframe> 
	</div>
	
	<table class="list_table">
		<thead>
		<tr>
			<th width="114"></th>
			<th>Emlak</th>
			<th>Tip</th>
			<th width="300">Başlık</th>
			<th>Fiyat</th>
			<th>Tarih</th>
			<th>İl/ilçe</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
			<tr class="select" height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Kapat</a></div>
				</td>
			</tr>	
			<tr class="announcement_detail">
				<td class="vendor_profile">Satıcı Profili
					<div class="profile_image"></div>
					<p>Evkur ltd</p>
					<a class="messege_send" href="#">Mesaj Gönder</a>
					<p>(212) 978 5865</p>
					<p>İstanbul/Avcılar</p>
				</td>
				<td colspan="6">
				<div class="detail_left">
					<p class="announcement_id">İlan No : 2889687</p>
					<strong>Açıklama</strong>
					<div>
					En seçkin markaları aynı çatı altında toplayan Shop, giyimden dekorasyona, süpermarketten eczaneye kadar
						geniş bir alışveriş keyfini sizlerle buluşturuyor. Çarşının Esenyurt’taki merkezi konumu, Doğan Araslı Caddesi
						üzerindeki hareketli yapısı ve geniş iş hacmi sayesinde alışveriş yapmanın zevkini çıkarırken iş sahibi olmanın
						ve yatırım yapmanın da keyfini yaşayacaksınız.
					</div>
					<strong>Genel Özellikler</strong>
					<ul class="announcement_attr">
						<li> Yeşil Alan</li>
						<li> Çift wc</li>
						<li> Şehirden uzak</li>
						<li> Bim'e yakın</li>
					</ul>
				</div><!-- end detail_left -->
				<div class="detail_right">
					<ul>
						<li class="style1">Zürih Sigorta</li>
						<li class="style2">Krediye Uygun</li>
						<li class="style3">Krediye Uygun</li>
						<li class="style4">Krediye Uygun</li>
						<li class="style5">Krediye Uygun</li>
					</ul>
				</div><!-- end detail_right-->
				</td>
			</tr>	
						
			<tr  height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Aç</a></div>
				</td>
			</tr>	
	
			<tr class="select" height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Aç</a></div>
				</td>
			</tr>	
	
			<tr height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Aç</a></div>
				</td>
			</tr>	
	
			<tr class="select" height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Aç</a></div>
				</td>
			</tr>	
	
			<tr height="55">
				<td rowspan="2"><img src="photos/ev.png" width="114" height="80" /></td>
				<td>Satılık</td>
				<td>Villa</td>				
				<td><a href="">İhtiyaçtan Acil Satılık Uygun Fiyat</a></td>
				<td>350,000 TL</td>
				<td>09/01/2011</td>
				<td>İstanbul/G.O.P</td>
			</tr>
			<tr>
				<td class="sub_footer" colspan="6">
					<ul>
						<li><a class="map_link" href="#">Map Konumu</a></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Karşılaştırma listesine ekle</label></li>
						<li><input name="" id="" type="checkbox"/> <label for="">Takip listesine ekle</label></li>
					</ul>
					<div class="map_control"> <span class="nav_plus">-</span> <a  href="#">Özet Bilgi Kapat</a></div>
				</td>
			</tr>	
			<tr class="announcement_detail">
				<td class="vendor_profile">Satıcı Profili
					<div class="profile_image"></div>
					<p>Evkur ltd</p>
					<a class="messege_send" href="#">Mesaj Gönder</a>
					<p>(212) 978 5865</p>
					<p>İstanbul/Avcılar</p>
				</td>
				<td colspan="6">
				<div class="detail_left">
					<p class="announcement_id">İlan No : 2889687</p>
					<strong>Açıklama</strong>
					<div>
					En seçkin markaları aynı çatı altında toplayan Shop, giyimden dekorasyona, süpermarketten eczaneye kadar
						geniş bir alışveriş keyfini sizlerle buluşturuyor. Çarşının Esenyurt’taki merkezi konumu, Doğan Araslı Caddesi
						üzerindeki hareketli yapısı ve geniş iş hacmi sayesinde alışveriş yapmanın zevkini çıkarırken iş sahibi olmanın
						ve yatırım yapmanın da keyfini yaşayacaksınız.
					</div>
					<br />
					<strong>Genel Özellikler</strong>
					<br />
					<ul class="announcement_attr">
						<li> Yeşil Alan</li>
						<li> Çift wc</li>
						<li> Şehirden uzak</li>
						<li> Bim'e yakın</li>
					</ul>
				</div><!-- end detail_left -->
				<div class="detail_right">
					<ul>
						<li class="style1">Zürih Sigorta</li>
						<li class="style2">Krediye Uygun</li>
						<li class="style3">Krediye Uygun</li>
						<li class="style4">Krediye Uygun</li>
						<li class="style5">Krediye Uygun</li>
					</ul>
				</div><!-- end detail_right-->
				</td>
			</tr>					
			
		
		</tbody>
	</table><!-- end list_table-->
	
	<div class="pagination_bar">
		<a class="prev_next" href=""> < Geri</a>
		<ul class="pager">
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4</a></li>
			<li><a class="select" href="">5</a></li>
			<li><a href="">6</a></li>
			<li><a href="">7</a></li>
			<li><a href="">8</a></li>
			<li><a href="">9</a></li>
			<li><a href="">10</a></li>
			<li><a href="">11</a></li>
			<li><a href="">12</a></li>
			<li><a href="">13</a></li>
			<li><a href="">14</a></li>
			<li><a href="">15</a></li>
			<li><a href="">16</a></li>
		</ul>
		<a class="prev_next" href="">İleri ></a>
	</div><!-- end pagination_bar-->
	
</div><!-- end list_rightbar-->
{include file="footer/footer.tpl"}