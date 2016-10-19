<div class="content right">
	<div class="speakers-main-list gallery">
		<h1>{$site_data.section_name}</h1>
    {foreach $group as $album}
		<h2 class="title_desc upper">{$album.0.name}</h2>
		<ul class="left">
			{foreach $album as $g}
            <li {if $g@index%4 == 3}class="forth"{/if}>
            	<div class="image"><a href="{$site_url}{$site_data.language}/{$g.section_slug}?gallery_id={$g.id}">
                	<img src="images/thumbnail_{$g.file}" alt="{$g.title}"/>
                	</a>
                </div>
                <a href="{$site_url}{$site_data.language}/{$g.section_slug}?gallery_id={$g.id}">
                	<div class="name upper">{$g.title}</div>
				</a>
			</li>        
			{/foreach}
		</ul>
            
	<div class="clear"></div>    
    {/foreach}    
</div>
        
        	<div class="left central-banner">
            	<h1>Sponsors</h1>
                <ul>
                {foreach $banner6 as $banner}
                <li><a href="{$banner.url}" target="{$banner.target}"><img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/></a></li>
                {/foreach}
                </ul>
                <br />
                <div class="clear"></div>
                
                <h1>Partners</h1>
                <ul>
                {foreach $banner5 as $banner}
                <li><a href="{$banner.url}" target="{$banner.target}"><img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/></a></li>
                {/foreach}
                </ul>
                <br />
                <div class="clear"></div>
                
                <h1>Media Partners</h1>
                <ul>
                {foreach $banner7 as $banner}
                <li><a href="{$banner.url}" target="{$banner.target}"><img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/></a></li>
                {/foreach}
                </ul>
                <br />
                <div class="clear"></div>
                
            </div>

    </div>