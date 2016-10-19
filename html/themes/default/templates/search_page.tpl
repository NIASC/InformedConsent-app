<div id="content" class="post-list">
	<div class="container">
		<h3>{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h3>
		<div class="col-md-9 page-content">
			<div class="input-group full-container">
				<form method="get" id="search-page-form" action="{$site_url}{$site_data.language}/search">
				<select class="form-control year" name="year">
					<option>{$language.year}</option>
					{foreach $years as $year}
					<option value="{$year}" {if $active_year == $year}selected="selected"{/if}>{$year}</option>
					{/foreach}
				</select>
				<select class="form-control" id="sel1" name="category">
					<option value="0">{$language.all_pages}</option>
					{foreach $categories as $page}
					<option value="{$page.id}" {if $current_category == $page.id}selected="selected"{/if}>{$page.name}</option>
					{/foreach}
				</select>
				<!-- forma dzebnis -->
				<input type="text" class="form-control" value="{$search_key}" name="que" placeholder="{$language.advenced_search}" />
				<span class="input-group-btn">
					<a class="btn btn-default submit-form"><i class="fa fa-search" aria-hidden="true"></i></a>
				</span>
				</form>
			</div>
			
			<ul class="search-results">
				{if is_array($info_content)}
				{foreach $info_content as $index => $cat_news}
				<li class="line"></li>
				{foreach $cat_news as $news}
				<li>
					<div class="title upper">
						<a href="{$site_url}{$site_data.language}/{$news.section_slug}/{$news.info_slug}">{$news.title}</a>
						<br/><span class="category">{$cat_news.0.section_name}</span>
					</div>
					<div class="text">{$news.description}</div>
				</li>
				{/foreach} 
				{/foreach}          
				{/if}
			</ul>    
		</div>            
		{include file = 'right_sidebar.tpl'}        
    </div>
</div>
<script type="text/javascript">

	jQuery(document).ready(function(e) {
		jQuery('.submit-form').click(function(){
			jQuery('#search-page-form').submit();
		});
	});
	
</script>