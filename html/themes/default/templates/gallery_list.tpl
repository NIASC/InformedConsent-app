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
            <div class="container-fluid inner-page">
			 	<div class="row gallery">
				
					{foreach $group as $g}
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a class="thumbnail" href="{$site_url}{$site_data.language}/{$site_data.section_slug}/?gallery_id={$g.id}">
							<img class="img-responsive" src="res/images/thumb/thumb_{$g.file}" alt="{$g.title}">
							<div class="description">
								<h3>{$g.title}</h3>
								<date><i class="fa fa-clock-o"></i> {$g.date}</date>
							</div> 
						</a>
					</div>
					{/foreach}
					{if $pages}
					<ul class="pagination-list">
					{foreach $pages as $page}
					{if $site_data.page == $page}
						<li>
							<a class="shadow active" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?page={$page}">
								{$page}
							</a>
						</li>
					{else}
						<li><a class="shadow" href="{$site_url}{$site_data.language}/{$site_data.section_slug}?page={$page}">{$page}</a></li>
					{/if}
					{/foreach}
					</ul>
					{/if}
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>