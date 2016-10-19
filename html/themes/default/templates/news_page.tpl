<section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$site_data.section_name}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid">
			  	{foreach $info_content as $item}
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
                  {if $item.thumbnail}
				  <a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$item.info_slug}">
				  <img src="res/images/thumb/{$item.thumbnail}" alt="{$item.title}" />
				  </a>
				  {else}
				  <a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$item.info_slug}">
				  <img src="themes/default/images/no-image.jpg" alt="{$item.title}" />
				  </a>
				  {/if}
                </div>
                <div class="col-xs-12 col-sm-9">
                  <div class="news-content">
                    <h3><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$item.info_slug}">{$item.title}</a></h3>
                    <span class="content-text">{$item.description}...</span>
                    <a class="content-text" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$item.info_slug}">{$language.read_more}</a>
                  </div>
                </div>
             	</div>
				{/foreach}
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
        </div>
      </div>
    </div>
</section>