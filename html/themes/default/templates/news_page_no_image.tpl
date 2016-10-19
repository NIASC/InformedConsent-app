<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="col-md-9 page-content">
			
			
			
			
			{if is_array($info_content)}  
            {foreach $info_content as $index => $news}
			<div class="item">
				<h5><a class="date" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">
					<i class="fa fa-clock-o"></i> {$news.start_date}
					</a> | <a class="title" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$news.info_slug}">{$news.title}</a>
				</h5>
				<p>{$news.description}</p><br/>
			</div>
            {/foreach}        
            {/if}
		<div>		
			<ul class="pagination-list">
			{foreach $pages.pages as $page}
			{if $page == '<<'}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}">{$page}</a></li>
			{else if $page == '>>'}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$pages.lastpage}">{$page}</a></li>
			{else if $pages.current_page == $page}
			<li><a class="active" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$page}">{$page}</a></li>
			{else}
			<li><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}?{$pages.current_url}&page={$page}">{$page}</a></li>
			{/if}
			{/foreach}
			</ul>
		</div>
	</div>
	{include file = 'right_sidebar.tpl'}
</div>
</div>