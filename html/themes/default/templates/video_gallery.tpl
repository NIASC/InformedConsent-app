<div id="content">
	<div class="container">		
		<h3 class="page-title"><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}">{$site_data.section_name}</a> / {$group.0.album_title}</h3>
		<div class="row">
			{foreach $group as $g}
			<div class="col-lg-4 col-md-6 col-xs-12 thumb">
				<iframe width="100%" height="300" src="http://www.youtube.com/embed/{$g.video_id}" frameborder="0" allowfullscreen></iframe><span>{$g.title}</span><div class="date"><date><i class="fa fa-clock-o"></i> {$g.date}</date></div>
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
		 {include file='widgets/social.tpl'}
    </div>
</div>