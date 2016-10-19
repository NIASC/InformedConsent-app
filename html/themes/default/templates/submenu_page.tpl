<div class="center-wrap main second-font">
	<div class="clear"></div>
</div>
<div class="center-wrap about second-font">
    <h1 class="upper left">{$site_data.section_name}</h1>
    <div class="left-right-wrap">
    <div class="left">
    	{foreach from=$info key = index item=item}
        {if ($index + 1) % 3 == 0}
        <li class="extreme"><h2><a href="{$site_url}{$site_data.language}/{$item->slug}">{$item->name}</a></h2></li>
        {else}
        <li><h2><a href="{$site_url}{$site_data.language}/{$item->slug}">{$item->name}</a></h2></li>
        {/if}
        {/foreach}
    </div>   

    <!-- RIGHT-->
    
	{include file = 'right_sidebar.tpl'}

    <!-- END RIGHT -->
    </div>
    <div class="clear"></div>
</div>