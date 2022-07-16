<aside id="sidebar-first">
    <!--Меню Восстановление данных 223-->		
    <nav id="left-menu-vosstanovlenie" class="block">
        <h2>Восстановление данных</h2>
        <ul class="menu">
            <li><a{if $url == '/vosstanovlenie_dannyx/uslugi_vosstanovlenija_dannyx_s_fleshki.htm'} class="active"{/if} href="/vosstanovlenie_dannyx/uslugi_vosstanovlenija_dannyx_s_fleshki.htm">С флешки</a></li>
            <li><a{if $url == '/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_karty_pamjati.htm'} class="active"{/if} href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_karty_pamjati.htm">С карт памяти</a></li>
            <li><a{if $url == '/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_monolitnyx_fleshek.htm'} class="active"{/if} href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_monolitnyx_fleshek.htm">С монолитных накопителей</a></li>
                {*<li><a{if $url == '/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_hdd.htm'} class="active"{/if} href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_hdd.htm">с HDD</a></li>*}
                {*<li><a{if $url == '/vosstanovlenie_dannyx/remont_hdd.htm'} class="active"{/if} href="/vosstanovlenie_dannyx/remont_hdd.htm">Ремонт HDD</a></li>*}
        </ul>
    </nav>  

    <nav id=left-menu-inform class="block">
        <h2>Информация</h2>
        <ul class="menu">
            <li class="first"><a href="/partners/">Работа с партнерами</a></li>
            <li><a href="/algoritm.htm">Алгоритм работы с клиентами</a></li>
            <li><a href="/tipy_korpusov_chipov_pamjati.htm">Типы корпусов чипов памяти</a></li>
            <li><a href="/konfidentsialnost.htm">Конфиденциальность данных</a></li>
            <li><a href="/polomki_nakopitelej_i_vozmozhnost_vosstanovlenija_dannyx.htm">Неисправности флешек</a></li>
            <li><a href="/neispravnosti_kart_pamjati.htm">Неисправности карт памяти</a></li>
            <li><a href="/udalennoe_vosstanovlenie_dannyx.htm">Удаленное восстановление данных</a></li>
            <li class="last"><a href="/faq.htm">Часто задаваемые вопросы (F.A.Q.)</a></li>

        </ul>
    </nav>

    {get_file dir=$smarty.config.php file="news.php"}

    <nav class="opros block">
        <h2>Мы в соц. сетях</h2>

        {literal}
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?97"></script>

            <!-- VK Widget -->
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 0, width: "257", height: "350", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 38771425);
            </script>
        {/literal}
        {literal}
            <script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/31c83d777102f128168d59d68a16ca14/connect" id="check-code-pozvonim" charset="UTF-8"></script>
        {/literal}
    </nav>

</aside>