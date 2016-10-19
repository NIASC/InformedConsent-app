<div id="content">
	<div class="container">		
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="row">
			{foreach $group as $g}
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/?gallery_id={$g.id}">
					<img class="img-responsive" src="res/images/thumb/small_{$g.thumbnail}" alt="{$g.title}">
					<span>{$g.title}</span>
					<div class="date"><date><i class="fa fa-clock-o"></i> {$g.date}</date></div> 
				</a>
			</div>
			{/foreach}
			{if $pages}
			<ul class="pagination-list">
			{foreach $pages as $page}
			{if $site_data.page == $page}
				<li><a class="shadow active" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?page={$page}">{$page}</a></li>
			{else}
				<li><a class="shadow" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?page={$page}">{$page}</a></li>
			{/if}
			{/foreach}
			</ul>
			{/if}
       	 </div>
    </div>
</div>