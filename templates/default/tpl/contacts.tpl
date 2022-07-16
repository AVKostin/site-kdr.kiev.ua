{*
    name: Шаблон контактов
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
            
			<div class="text{if $smarty.session.login} admin-editable" 
                    editurl="lang={$slang}&mod=contacts&speededit=text&update=.text&url={$url}{/if}">
                {$content.text}
                </div>

                {if $conf.Microformats}
                {section name=f loop=$mf}
                {if $mf[f].hname}<h3>{$mf[f].hname}</h3>{/if}
                <div class="vcard">
                <div class="fl" style="width:49%">
                  <p>{if $mf[f].contface}<h3>{$mf[f].contface}:</h3>{/if}
                  <span class="fn n">
                  {if $mf[f].given_name}
                  <span class="given-name">{$mf[f].given_name}</span>{/if}
                  {if $mf[f].additional_name}
                  <span class="additional-name">{$mf[f].additional_name}</span>{/if}
                  </p>
                  </span>
                                
                 <p>{if $mf[f].telname}<h3>{$mf[f].telname}:</h3>{/if}
                  {$tel=$mf[f].tel}
                  {section name=s loop=$tel}
                   {if $tel[s].name}<i>{$tel[s].name}:</i> {/if}<span class="tel">{$tel[s].tel}</span><br />
                  {/section}
                 </p>
                 </div>

                 <p>{if $mf[f].emails}<h3>{$mf[f].emails}:</h3>{/if}
                  {$email=$mf[f].email}
                  {section name=e loop=$email}
                   {$mail=$email[e].mail}
                   {if $email[e].name}<i>{$email[e].name}:</i> {/if}<a class="email" href="mailto:{$mail|escape:'hex'}">{mailto address="$mail" encode="javascript"}</a><br />
                  {/section}
                 </p>

                 <p>{if $mf[f].web}<h3>{$mf[f].web}:</h3>{/if}
                  {if $mf[f].icq}
                  <i>ICQ:</i> <a class="url" type="application/x-icq" 
                            href="http://www.icq.com/people/cmd.php?uin={$mf[f].icq}&action=message">{$mf[f].icq}</a><br />{/if}
                  {if $mf[f].skype}
                  <i>Skype:</i> <a class="url" href="skype:LOGIN?chat">{$mf[f].skype}</a><br />{/if}
                  {if $mf[f].jabber}
                  {$mail=$mf[f].jabber}
                  <i>Jabber:</i> <a class="url" href="xmpp:{$mail|escape:'hex'}">{mailto address="$mail" encode="javascript"}</a>{/if}
                 </p>
                </div>
                {/section}
                {/if}
                {if $conf.Feedback nocache}
                <h2 id="Feedback">{$content.FeedbackName}</h2>
                {if $FeedbackInfo}<p>{$FeedbackInfo}</p>{/if}
                    {if !$FeedbackHide}
                    <div class="forma" style="width:100%;">
                    {$co=0}
                    {section name=f loop=$form}
                        {if $form[f].type!='hidden'}
                        <div class="element f50{if $co%2} second{/if}{if $smarty.post.go && $form[f].invalid} invalid{/if}">
                            {if $form[f].name}<label for="{$form[f].rew}">{$form[f].name}:</label>
                                {if $form[f].desc} <span>({$form[f].desc})</span>{/if}<br />
                            {/if}
                            {$form[f].inp}
                        </div>
                        {$co=$co+1}
                        {else}
                        {$form[f].inp}
                        {/if}
                    {/section}
                    </div>
                    {/if}
                {/if}
		</div>
	</section>
</div>


{include file="footer.tpl"}