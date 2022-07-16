{$s_tpl = 'main'}
{$zone = 'content.right'}
{$types = $site.$s_tpl.content.right.types}
{$found=0}{foreach $blocks.$zone as $k=>$v}
{$key=$v.key}

    {if $v.type == 'blocks' && in_array('blocks', $types) && (in_array($module, $v.modules) OR $v.all_mod)}
        {if !$v.nocache}
            {include "`$smarty.config.tpl``$v.file`"}
        {else}
            {include "`$smarty.config.tpl``$v.file`" nocache}
        {/if}{$found=$found+1}
    {elseif $v.type == 'element' && in_array('element', $types) && (in_array($module, $v.modules) OR $v.all_mod)}
        {if !$v.nocache}
            {include "`$smarty.config.element``$v.file`"}
        {else}
            {include "`$smarty.config.element``$v.file`" nocache}
        {/if}{$found=$found+1}
    {elseif $v.type == 'php' && in_array('php', $types) && (in_array($module, $v.modules) OR $v.all_mod)}
        {if !$v.nocache}
            {get_file dir=$smarty.config.php file=$v.file}
        {else}
            {get_file dir=#php# file=$v.file nocache}
        {/if}{$found=$found+1}
    {elseif $v.type == 'html' && in_array('html', $types) && (in_array($module, $v.modules) OR $v.all_mod)}
        {$v.text}{$found=$found+1}
    {elseif $v.type == 'banners' && in_array('banners', $types) && (in_array($module, $v.modules) OR $v.all_mod)}
        {$v.text}{$found=$found+1}
    {/if}

{if $found && $site.$s_tpl.$zone.$key.elements && $site.$s_tpl.$zone.$key.elements == $found}
    {break}
{/if}
{/foreach}