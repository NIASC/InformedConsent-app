<section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}">{$site_data.section_name}</a> | {$gall_title}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
					<p><i>{$start_date}</i></p>
					{$info_content}
					<ul class="post-gallery">
					{foreach $group as $g}
						<li class="col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="res/images/{$g.file}">
								<img class="img-responsive" src="res/images/thumb/{$g.file}" alt="{$g.title}" />
							</a>
						</li>
					{/foreach}
					</ul>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>