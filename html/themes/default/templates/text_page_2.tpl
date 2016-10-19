<div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title">{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h3>
		<div class="row page-content">
			<div class="col-md-12">
			{if $thumbnail}
			<div class="col-md-3">
			<a class="zoom standard_image" href="{$site_url}res/images/{$thumbnail}">
				<img src="{$site_url}res/images/small_{$thumbnail}" alt="{$info_title}"/>
			</a>
			</div>
			<div class="col-md-9">
			{$info_content}
			</div>
			{else}
			{$info_content}
			{/if}
			</div>	
		</div>
		{include file='widgets/social.tpl'}
	</div>
</div>
