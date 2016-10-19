<div class="center-wrap main second-font">
    <div class="clear"></div>
</div>
<div class="center-wrap partners second-font">
    <h1 class="upper left">{$site_data.section_name}</h1>
    <div class="left-right-wrap">
    <div class="left">
        {if is_array($info_content)}
        <ul class="partners-list">
        	{foreach from=$info_content item=info_item name=info}
            <li>
                <div class="image"><img src="images/{$info_item.thumbnail}" alt="{$info_item.title}"/></div>
                <div class="right-desc">
                    <a href="{$info_item.url}" target="_blank" class="upper">{$info_item.title}</a> {$info_item.description}
                </div>
            </li>
            {/foreach}
        </ul> 
        {else}
        <p>
        {$info_content}
        </p>       
        {/if}
    </div>
    {include file = 'right_sidebar.tpl'}
    </div>
    <div class="clear"></div>
</div>
    
