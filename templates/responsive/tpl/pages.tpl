{*
name: Статические страницы
tpl: main
*}
{include file="header.tpl"}

<div id="container" class="clearfix">
    {include file="left.tpl"}
    <section id="center">
        <div id="squeeze">

            {if $map}
                <div class="breadcrumb">{$map}</div>
            {/if}

            <h1>{$content.name}</h1>

            {capture name="reviews"}
            {if $reviews}
                <div class="content-reviews">
                    <a target="_blank" href="/reference/"><h3>Отзывы о нас</h3></a>
                    <div class="items">
                        {foreach from=$reviews item=item}
                            <div class="item">
                                <p>{$item.text|truncate:150}</p>
                                <div class="more">
                                    <span class="name">{$item.name}</span>
                                    <span class="date">{$item.date|date_format:"%d.%m.%Y"}</span>
<p style="text-align: center;"><a title="Отзывы на Google картах" href="https://www.google.com.ua/search?ei=TXkDXZvKCo_MrgTxuLn4BA&amp;q=%D0%A6%D0%B5%D0%BD%D1%82%D1%80+%D0%B2%D0%BE%D1%81%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F+%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8+kdr.kiev.ua&amp;oq=%D0%A6%D0%B5%D0%BD%D1%82%D1%80+%D0%B2%D0%BE%D1%81%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F+%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8+kdr.kiev.ua&amp;gs_l=psy-ab.3...264030.267533..267703...1.0..0.180.1737.1j11......0....1..gws-wiz.......35i39j33i160.NWs0UKxJGSo#lrd=0x40d4cef58de8fb4f:0xaea2a49aed387837,1,,,"><span><img title="Google Отзывы" src="/files/shared/google_ref.jpg" alt="Google Отзывы" width="180" height="199" /></span></a></p>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>
            {/if}
            {/capture}
            
            {$content.text|replace:'__reviews__':$smarty.capture.reviews}

        </div>
    </section>
</div>

{include file="footer.tpl"}