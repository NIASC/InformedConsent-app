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
			 	<div class="row publications">
				{if is_array($info_content)}
				{foreach $info_content as $index => $info_item}
					<div class="col-xl-2 col-lg-2 col-md-3  col-sm-4 col-xs-6 thumb">{if $info_item.file && $info_item.thumbnail}
						<a {if $info_item.file} href="{$site_url}res/docs/{$info_item.file}"{else if $url != ''} href="{$info_item.url}"{/if} target="_blank">
							<img src="res/images/thumb/{$info_item.thumbnail}" alt="" />
							<div><h6>{$info_item.title}</h6></div>
							{else if $info_item.file}
							<div><h6>{$info_item.title}</h6></div>
							{/if}
						</a>
					</div>
				{/foreach}	
				{/if}
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>