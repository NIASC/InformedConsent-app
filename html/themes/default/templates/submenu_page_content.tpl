<div class="content-long left">
        <h1>{$site_data.section_name}</h1>
        {foreach from=$info key = index item=item}
        
        <h2 class="page_category {if $index == 0}first{/if}"><a href="{$site_url}{$site_data.language}/{$item.section->slug}">{$item.section->name}</a></h2>
        
        <ul class="speakers-list">
        	{if is_array($item.content)}
            {foreach $item.content as $index => $info_item}
            <li {if $info_content|count == $index+1}class="last"{else if $index == 0}class="first"{/if}>
                <div class="wrap">
                    <div class="image left">
                        {if $info_item.thumbnail}
                        <a href="{$site_url}{$site_data.language}/{$item.section->slug}/{$info_item.info_slug}">
                        <img src="images/thumb/{$info_item.thumbnail}" alt="{$info_item.title}" class="transparent"/>
                        </a>
                        {/if}
                    </div>
                    <div class="text-wrap right">
                        <div class="name">
                            <span class="upper">
                            <a href="{$site_url}{$site_data.language}/{$item.section->slug}/{$info_item.info_slug}">{$info_item.title}</a>
                            </span>
                        </div>
                        <div class="position">
                        	<a href="{$site_url}{$site_data.language}/{$item.section->slug}/{$info_item.info_slug}">{$info_item.job}</a>
                        </div>
                        <div class="desc">
                        	<a href="{$site_url}{$site_data.language}/{$item.section->slug}/{$info_item.info_slug}">
                            {$info_item.description}
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>             
            {/foreach}
            {else}
            <p>
            {$info_content}
            </p>
            {/if}

        </ul>
        {/foreach}
        
        
    </div>

{include 'right_sidebar.tpl'}