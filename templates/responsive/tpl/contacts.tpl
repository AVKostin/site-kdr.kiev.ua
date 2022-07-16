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
<literal>
                 <p>{if $mf[f].web}<h3>{$mf[f].web}:</h3>{/if}
                  {if $mf[f].skype}
                  <i>Skype:</i> <a class="url" href="skype:LOGIN?chat">{$mf[f].skype}</a><br />{/if}
                  {if $mf[f].jabber}
                  {$mail=$mf[f].jabber}
                  <i>Jabber:</i> <a class="url" href="xmpp:{$mail|escape:'hex'}">{mailto address="$mail" encode="javascript"}</a>{/if}
                 </p>
                </div>
                {/section}
                {/if}
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.7323340715275!2d30.66545581598339!3d50.427458479472065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef58de8fb4f%3A0xaea2a49aed387837!2z0JLQvtGB0YHRgtCw0L3QvtCy0LvQtdC90LjQtSDQtNCw0L3QvdGL0YUgS2lldiBEYXRhIFJlY292ZXJ5!5e0!3m2!1sru!2sua!4v1497356689788" width="600" height="243" frameborder="0" style="border:0" allowfullscreen></iframe>
</literal>				
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