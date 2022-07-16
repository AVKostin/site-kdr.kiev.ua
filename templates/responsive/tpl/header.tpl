<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>{$title}</title>
        <meta name="description" content="{$description}" />
        <meta name="keywords" content="{$keywords}" />
        <meta name="generator" content="Visions CMS http://WebVisions.com.ua/" />
        <meta name="distribution" content="GLOBAL" />
        <meta name="revisit-after" content="15 Days" />
        <meta name="robots" content="ALL" />
        <meta name="rating" content="GENERAL" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" type="text/css" href="{#cssDir#}style.css?ver=1.006" />
        <link rel="icon" type="image/x-icon" href="{#imgDir#}favicon.ico" />
        <link rel="image_src" type="image/png" href="{#imgDir#}logo-big.png" />


        <!--[if lte IE 7]><link href="/themes/hb/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if lt IE 9]><script src="/themes/hb/scripts/ie.js"></script><![endif]-->

		{literal}
		<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '198611037587591');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=198611037587591&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
{/literal}
    </head>

    <body>

            {include "system/admin/design/tpl/admin.tpl"}

            <div id="show-hide-menu">
                <a href="/" class="logo"></a>
                <a href="#i" id="show" onclick="this.style.display = 'none';
                        document.getElementById('sidebar-first').style.display = 'block';
                        document.getElementById('hide').style.display = 'block'" title="Открыть меню"></a>
                <a href="#i" id="hide" onclick="this.style.display = 'none';
                        document.getElementById('sidebar-first').style.display = 'none';
                        document.getElementById('show').style.display = 'block'" title="Закрыть меню"></a>
            </div>

            <div id="wrapper">
                <header>
                    {if $url != '/'}<a href="/">{/if}<div id="logo">Восстановление данных Киев: с HDD, флешек в Киеве!</div>{if $url != '/'}</a>{/if}
                    <div id="head-flash">
                        <ul>
                            <li>Оплата только за результат</li>
                            <li>Конфидециальность Ваших данных</li>
                            <li>Профессиональное оборудование</li>
                            <li>Более 10 лет на рынке</li>
                        </ul>
                    </div>
                    <div class="contact-text" itemscope itemtype="http://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Восстановление данных Киеве с 2009 года">
                        <a class="hidden" itemprop="url" href="https://kdr.kiev.ua/">Главная</a>
                        <meta itemprop="image" content="https://kdr.kiev.ua{#imgDir#}logo-big.png">
                        <p span class="first-number" itemprop="tel">+38 (099) 095-14-04</span>
						 <p span class="first-number" itemprop="tel">+38 (063) 075-93-03</span>
                         <p class="first" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                          <span class="first-number" itemprop="streetAddress">г.Киев, ул.Бориспольская 12-В, офис 8</span>
						   <span class="first-number" itemprop="streetAddress"><p>С ПН по ПТ: с 9-00 до 18-00</span>
						  <meta itemprop="addressLocality" content="Украина, Киев">
                        </p>
                      
                                            </div>
                    <nav id="top-menu">
                        <ul class="menu">
                            
                            <li><a{if $url == '/vosstanovlenie_dannyx/'} class="active"{/if} href="{$url|link_format:'/vosstanovlenie_dannyx/'}">УСЛУГИ</a></li>
                            <li><a{if $url == '/rabota_s_regionami.htm'} class="active"{/if} href="{$url|link_format:'/rabota_s_regionami.htm'}">ДОСТАВКА</a></li>
                            <li><a{if $url == '/reference/'} class="active"{/if} href="{$url|link_format:'/reference/'}">ОТЗЫВЫ</a></li>
                            <li><a{if $url == '/price.htm'} class="active"{/if} href="{$url|link_format:'/price.htm'}">ЦЕНЫ</a></li>
                          <li><a{if $url == '/kredit.htm'} class="active"{/if} href="{$url|link_format:'/kredit.htm'}">КРЕДИТ</a></li>
                            <li class="last" id="i"><a{if $url == '/contacts/'} class="active"{/if} href="{$url|link_format:'/contacts/'}">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                </header>