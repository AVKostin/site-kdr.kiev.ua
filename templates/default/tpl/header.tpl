<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>{$title}</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta name="description" content="{$description}" />
        <meta name="keywords" content="{$keywords}" />
        <meta name="generator" content="Visions CMS http://WebVisions.com.ua/" />
        <meta name="distribution" content="GLOBAL" />
        <meta name="revisit-after" content="15 Days" />
        <meta name="robots" content="ALL" />
        <meta name="rating" content="GENERAL" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <link rel="stylesheet" type="text/css" href="{#cssDir#}style.css?ver=1.006" />
        <link rel="icon" type="image/x-icon" href="{#imgDir#}favicon.ico" />
        <link rel="image_src" type="image/png" href="{#imgDir#}logo-big.png" />

        {*<script src="{#jsDir#}jquery.min.js"></script>*}
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/system/admin/design/js/site.js"></script>

        <!--[if lte IE 7]><link href="/themes/hb/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if lt IE 9]><script src="/themes/hb/scripts/ie.js"></script><![endif]-->

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="{#jsDir#}fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="{#jsDir#}fancybox/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="{#jsDir#}fancybox/jquery.mousewheel-3.0.6.pack.js"></script>


        <script src="{#jsDir#}main.js"></script>

        {if $smarty.session.login}
            <link rel="stylesheet" type="text/css" href="/system/admin/design/css/panel.css" />
            <script src="/system/admin/design/js/jquery.cookie.js"></script>
            <script src="/system/admin/design/js/panel.js"></script>
        {/if}

        <!-- Put this script tag to the <head> of your page -->
        {literal}<script type="text/javascript" src="//vk.com/js/api/openapi.js?112"></script>

            <script type="text/javascript">
                VK.init({apiId: 4342708, onlyWidgets: true});
            </script>{/literal}

            {$header_code}
        </head>


        <body>

            {include "system/admin/design/tpl/admin.tpl"}


            <div id="wrapper">
                <header>
                    <div id=logo>
                        {if $url != '/'}<a href="/">{/if}<img atl="{$SITE_NAME}" src="{#imgDir#}logo.png" />{if $url != '/'}</a>{/if}
                    </div>
                    <div id=head-flash><img src="{#imgDir#}hed_flash.png" alt="Восстановление данных с флешки, карт памяти, SSD"></div>
                    <div class=contact-text>                    
                        <p class=first><span class=first-number>+38(063)</span><span class=last-number> 075-93-03</span>
                            <p class=first><span class=first-number>+38(099)</span><span class=last-number> 095-14-04</span>  
                                        </div>
	                                        <nav id=top-menu>
                                            <ul class="menu">
                                                <li class="first"><a{if $url == '/equipment/'} class="active"{/if} href="/equipment/">ОБОРУДОВАНИЕ</a></li>
                                                <li><a{if $url == 'http://www.blog.kdr.kiev.ua/'} class="active"{/if} href="http://www.blog.kdr.kiev.ua/" rel="nofollow">БЛОГ</a></li>
                                                <li><a{if $url == '/rabota_s_regionami.htm'} class="active"{/if} href="/rabota_s_regionami.htm">РЕГИОНАМ</a></li>
                                                <li><a{if $url == '/reference/'} class="active"{/if} href="/reference/">ОТЗЫВЫ</a></li>
                                                <li><a{if $url == '/price.htm'} class="active"{/if} href="/price.htm">ЦЕНЫ</a></li>
                                                <li class="last"><a{if $url == '/contacts/'} class="active"{/if} href="/contacts/">КОНТАКТЫ</a></li>
                                            </ul>
                                        </nav>  
                                        </header>
