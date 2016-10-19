<div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}">{$site_data.section_name}</a></h1>
            <div class="content_top">
            	<h2 class="name">{$info_title}</h2>
                <p>{$job}</p>
            	{if $info_thumbnail}
                <a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$info_thumbnail}">
                    <img src="{$site_url}res/images/thumb/{$info_thumbnail}" class="standard_image" alt="{$info_title}"/>
                </a>
                {/if}
                {$info_content}
				
				{include file='widgets/social.tpl'}          
            </div>            
            {include file = 'right_sidebar.tpl'}            
        </div>        
    </div>
</div>