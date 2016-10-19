<nav id="section-navbar" class="navbar navbar-with-icons">
    <ul class="nav navbar-nav">
      <li>
        <a href="#about">
          <div class="link-wrapper">
            <span class="icon icon-about"></span>
            <span class="desc hidden-xs">{$language.about_study}</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#how">
          <div class="link-wrapper">
            <span class="icon icon-how"></span>
            <span class="desc hidden-xs">{$language.how_works}</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#running">
          <div class="link-wrapper">
            <span class="icon icon-running"></span>
            <span class="desc hidden-xs">{$language.who_is_running}</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#who">
          <div class="link-wrapper">
            <span class="icon icon-who"></span>
            <span class="desc hidden-xs">{$language.participate}</span>
          </div>
        </a>
      </li>
    </ul>
  </nav>


  {if $header_banner}
  <div class="container-fluid image-header">
    <div class="row">
      <div class="col-xs-12 background">
        <div class="row">
			<img src="res/images/{$header_banner.0.file}" alt="{$language.website_title}"/>
			<div class="col-xs-8 col-sm-4 col-md-3 col-sm-offset-1 banner-descrition">
				{$header_banner.0.title}
			</div>
        </div>
      </div>
    </div>
  </div>
  {/if}

  {if $about_study.1}
<section id="about" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-about pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$about_study.1.0.title}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text">{$about_study.1.0.description}</span>
            <a class="content-text" href="{$site_url}{$site_data.language}/{$about_study.1.0.section_slug}">{$language.read_more}</a>
          </div>
        </div>
      </div>
    </div>
</section>
  {/if}

  {if $news_1}
  <section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$language.latest_news}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid">
			  	{foreach $news_1 as $item}
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
                  {if $item.thumbnail}
				  <a href="{$site_url}{$site_data.language}/{$item.section_slug}/{$item.info_slug}">
				  <img src="res/images/thumb/{$item.thumbnail}" alt="{$item.title}" />
				  </a>
				  {else}
				  <a href="{$site_url}{$site_data.language}/{$item.section_slug}/{$item.info_slug}">
				  <img src="themes/default/images/no-image.jpg" alt="{$item.title}" />
				  </a>
				  {/if}
                </div>
                <div class="col-xs-12 col-sm-9">
                  <div class="news-content">
                    <h3>{$item.title}</h3>
                    <span class="content-text">{$item.description}...</span>
                    <a class="content-text" href="{$site_url}{$site_data.language}/{$item.section_slug}/{$item.info_slug}">{$language.read_more}</a>
                  </div>
                </div>
             	</div>
				{/foreach}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/if}

  {if $about_study.2}
  <section id="how" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-how pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$about_study.2.0.title}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <div class="section-content">
          <div class="section-content-guide">
            <div class="container-fluid">
              <div class="row">
			  	{if $about_study.2.0.thumbnail}
                <div class="col-sm-7 animation-wrap">
                  <!-- <img src="res/images/{$about_study.2.0.thumbnail}"/> -->
                  {include file="slider.tpl"}
                </div>
				{/if}
                <div class="col-sm-5">
                  <div class="guide-content">
                    <span class="content-text">{$about_study.2.0.description}</span>
                    <a class="content-text" href="{$site_url}{$site_data.language}/{$about_study.2.0.section_slug}">{$language.read_more}</a>
                    <span class="registration-link">
						<a href="{$site_url}{$site_data.language}/{$registration_page.slug}">{$language.registration}</a>
					</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-height">
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-enroll"></div>
                        <h3>{$language.consent_enroll}</h3>
                        <div class="guide-desc-text">{$language.understand_risk}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-task"></div>
                        <h3>{$language.perform_tasks}</h3>
                        <div class="guide-desc-text">{$language.ask_tasks}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-health"></div>
                        <h3>{$language.track_health}</h3>
                        <div class="guide-desc-text">{$language.use_data}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-science"></div>
                        <h3>{$language.make_discoveries}</h3>
                        <div class="guide-desc-text">{$language.make_breakthroughs}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/if}

  {if $about_study.3}
  <section id="running" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-running pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$language.who_is_running}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text">{$language.study_sponsored}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section-content">
        <div class="section-content-carousel">
          <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
				{foreach $about_study.3 as $info}
              	<div class="item {if $info@iteration == 1}active{/if}">
					<div class="carousel-content">
					  <div class="container-fluid">
						<div class="row">
							{if $info.thumbnail}
						  <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
							<img src="res/images/slider/{$info.thumbnail}"/>
						  </div>
							{/if}
						  <div class="col-xs-12 col-sm-9">
							<h3>{$info.title}</h3>
							<span>{$info.description}</span>
						  </div>
						</div>
					  </div>
					</div>
				 </div>
              	<div class="item">
					<div class="carousel-content">
					  <div class="container-fluid">
						<div class="row">
							{if $info.thumbnail}
						  <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
							<img src="res/images/slider/{$info.thumbnail}"/>
						  </div>
							{/if}
						  <div class="col-xs-12 col-sm-9">
							<h3>{$info.title}</h3>
							<span>{$info.description}</span>
						  </div>
						</div>
					  </div>
					</div>
				 </div>
			  	{/foreach}
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
              <span class="sr-only">{$language.back}</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
              <span class="sr-only">{$language.next}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/if}

  {if $about_study.4}
  <section id="who" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-who pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$about_study.4.0.title}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text">{$about_study.4.0.description}</span>
            <span class="registration-link"><a href="{$site_url}{$site_data.language}/{$registration_page.slug}">{$language.registration}</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/if}
<!-- End content -->

</div>

</div>
