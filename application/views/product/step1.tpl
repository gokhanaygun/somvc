{include file="header/header.tpl"}
<div class="step_list">
    <ul>
        <li class="select">
            <h2 class="step_number">1</h2>
            Kategori Seçimi
        </li>
        <li>
            <h2 class="step_number">2</h2>
            İlan Detayı
        </li>
        <li>
            <h2 class="step_number">3</h2>
            Önizle
        </li>
        <li>
            <h2 class="step_number">4</h2>
            Kendinden Para
        </li>
        <li>
            <h2 class="step_number">5</h2>
            Tebrikler
        </li>      
    </ul>
</div><!-- end step_list-->

<div class="step1_inner">
    <select  multiple="">
    {html_options options=$category_top}
    </select>
</div>

{include file="footer/footer.tpl"}