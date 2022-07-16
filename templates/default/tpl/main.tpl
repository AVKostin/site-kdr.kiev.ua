{include file="header.tpl"}


<div id="container" class="clearfix">
    {include file="left.tpl"}
    <section id="center">

        <div id="squeeze">

            {* SLIDER*}
            <script src="{#jsDir#}jquery.bxslider.min.js"></script>
            <ul class="bxslider">
                <li><a href="/vosstanovlenie_dannyx/uslugi_vosstanovlenija_dannyx_s_fleshki.htm" 
                       title="Восстановление данных с флешеки"><img src="/files/modules/slider/1.jpg" alt="" /></a></li>
                <li><a href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_karty_pamjati.htm" 
                       title="Восстановление данных с карты памяти"><img src="/files/modules/slider/2.jpg" alt="" /></a></li>
<li><a href="/rabota_s_regionami.htm" title="Восстановление данных в регионах Украины"><img src="/files/modules/slider/4.jpg" alt="" /></a></li>
                <li><a href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_monolitnyx_fleshek.htm" 
                       title="Восстановление данных с монолитных флешек и карт памяти"><img src="/files/modules/slider/3.jpg" alt="" /></a></li>
					   
            </ul>
            {* /SLIDER*}

            {$content.main_about}
        </div>
    </section>
</div>


{include file="footer.tpl"}
