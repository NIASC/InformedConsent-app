<section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
				{if $info_img}
                <a class="fancybox" data-fancybox-group="gallery" href="{$site_url}res/images/{$info_img}">
                    <img src="{$site_url}res/images/thumb/{$info_img}" class="standard_image" alt="{$info_title}"/>
                </a>
                {/if}
                </div>
				{$info_content}
				{if $info_description}
                <iframe class="pdf_window" src="{$site_url}res/docs/{$info_description}"></iframe>
                {/if}
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>