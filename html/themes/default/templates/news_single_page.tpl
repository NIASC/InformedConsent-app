<section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><a href="{$site_url}{$site_data.language}/{$site_data.section_slug}">{$site_data.section_name}</a> | {$info_title}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
					<p><i>{$start_date}</i></p>
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
				{if $info_img && $info_files < 2}
					<a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$info_img}">
						<img src="{$site_url}res/images/thumb/{$info_img}" class="standard_image" alt="{$info_title}"/>
					</a>
				{/if}
                </div>
				{$info_content}
                <ul class="post-gallery">
					{if $info_files}
						<li class="active col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$info_img}">
								<img src="{$site_url}res/images/thumb/{$info_img}" alt="{$image->name}"/>
							</a>
						</li>
					{/if}
					{foreach $info_files as $image}
						{if $info_img != $image->file}
						<li class="col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$image->file}">
								<img src="{$site_url}res/images/thumb/{$image->file}" alt="{$image->name}"/>
							</a>
						</li>
						{/if}
					{/foreach}
					</ul>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>