<?php

$q = mysql_query('SELECT p.desctext, r.url, r.name 
		FROM `module_public` p, core_route r WHERE r.id=p.route_id AND `virtualmod` = \'news\' 
		ORDER BY `p`.`date` DESC LIMIT 4');
echo '<nav id="left-menu-vosstanovlenie" class=block>
        <a href="/news/"><h2>Новости</h2></a>
        <ul class="menu">' . PHP_EOL;
while ($r = mysql_fetch_assoc($q))
    echo '<li><a' . ($r['url'] == $_SERVER['REQUEST_URI'] ? ' class="active"' : '') . ' href="' . $r['url'] . '">' . htmlspecialchars($r['name']) . '</a></li>' . PHP_EOL;
echo '</ul>
        </nav>' . PHP_EOL;
