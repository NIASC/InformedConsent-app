<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="{$site_url}" />


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!-- Bootstrap -->
<link href="scripts/css/bootstrap.min.css" rel="stylesheet" />
<link href="scripts/photoswipe/photoswipe.css" rel="stylesheet" />
<link href="scripts/photoswipe/default-skin/default-skin.css" rel="stylesheet" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" href="scripts/css/style.css?v1" type="text/css" />



<meta name="keywords" content="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}" />
<meta name="description" content="{if $og_array.description}{$og_array.description}{else if $site_data.description}{$site_data.description}{else}{$language.website_title}{/if}" />
<meta name="author" content="{$language.website_title}" />
<meta property="og:title" content="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}" />
<meta property="og:image" content="{if $og_array.thumbnail}{$site_url}res/images/{$og_array.thumbnail}{else}{$site_url}themes/default/images/image.jpg{/if}" />
<meta property="og:description" content="{if $og_array.description}{$og_array.description}{else if $site_data.description}{$site_data.description}{else}{$language.website_title}{/if}" />


<!-- scrolls social -->
<link rel="icon" href="themes/default/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="themes/default/images/favicon.ico" type="image/x-icon" />

<link rel="alternate" hreflang="{$site_data.language}" href="{$site_url}{$site_data.language}/{$site_data.section_slug}{if $site_data.slug_END}/{$site_data.slug_END}{/if}{$site_data.dirty_url}" />

<link rel="canonical" href="{$site_url}{$site_data.language}/{$site_data.section_slug}{if $site_data.slug_END}/{$site_data.slug_END}{/if}{$site_data.dirty_url}" />



<title>{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}</title>
</head>

<body data-spy="scroll" data-target="#section-navbar" data-offset="100" class="{$site_data.language}">

<header class="header">
    <nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header pull-right">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="row">
				<div class="col-xs-9 col-sm-5">
					<div class="logo">
					<a href="{$site_url}{$site_data.language}">
					{if $setting_data.logo_url}
					<img src="{$setting_data.logo_url}" alt="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}"/>
					{else}
					<img src="themes/default/images/logo.png" alt="{if $og_array.title}{$og_array.title}{else}{$language.website_title}{/if}"/>
					{/if}
					</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="collapse navbar-collapse" id="header-navbar">
						<div class="container-fluid">
							<div class="row">
								{$top_menu}
                                <ul id="language-dd">
                                	{foreach $language_array as $key => $value}
                                    <li {if $site_data.language == $key}class="active"{/if}>
                                    <a {if $site_data.language != $key} href="{$site_url}{$key}/{$site_data.section_slug_by_language.$key}{if $sectionData.info_slug}/{$sectionData.info_slug.$key}{/if}{$site_data.dirty_url}"{/if} title="{$key}">
                                    {$value}
                                    </a>
                                    </li>
                                    {/foreach}
                                </ul>
							</div>
							<div class="row">
								{$main_menu}
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
	</nav>
</header>

{if $site_data.section_type != 1 && $header_banner}
<div class="container-fluid image-header">
	<div class="row">
		<div class="col-xs-12 background">
			<div class="row">
				<a href="{$header_banner.0.url}" target="{$header_banner.0.target}">
				<img src="res/images/{$header_banner.0.file}" id="main-banner" alt="{$header_banner.0.title|strip_tags}"/>
				</a>
				<div class="col-xs-8 col-sm-4 col-md-3 col-sm-offset-1 banner-descrition">
					{$header_banner.0.title}
				</div>
        	</div>
    	</div>
	</div>
</div>
{/if}

	<!-- Container -->
	{include file = $content_file}


  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

      <!-- Background of PhotoSwipe.
           It's a separate element, as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>

      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">

          <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
          <div class="pswp__container">
              <!-- don't modify these 3 pswp__item elements, data is added later on -->
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
          <div class="pswp__ui pswp__ui--hidden">

              <div class="pswp__top-bar">

                  <!--  Controls are self-explanatory. Order can be changed. -->

                  <div class="pswp__counter"></div>

                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                  <button class="pswp__button pswp__button--share" title="Share"></button>

                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                  <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                  <!-- element will get class pswp__preloader--active when preloader is running -->
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div>
              </div>

              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>

              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>

              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>

            </div>

          </div>

  </div>
	<footer class="container-fluid footer {if $banner_full}full-banner{/if}">
	<div class="row">

		{if $banner_full}
		<a href="{$banner_full.0.url}" target="{$banner_full.0.target}">
			<img src="res/images/{$banner_full.0.file}" alt="{$banner_full.0.description}"/>
		</a>
		{else}
		<div class="col-xs-3 col-sm-3">
			{if $banner_left}
			{foreach $banner_left as $banner}
			<a href="{$banner.url}" target="{$banner.target}"><img src="res/images/{$banner.file}" alt="{$banner.description}"/></a>
			{/foreach}
			{/if}
		</div>


		<div class="col-xs-6 col-sm-6">
			{if $banner_center}
			{foreach $banner_center as $banner}
			<a href="{$banner.url}" target="{$banner.target}"><img src="res/images/{$banner.file}" alt="{$banner.description}"/></a>
			{/foreach}
			{/if}
		</div>

		<div class="col-xs-3 col-sm-3 pull-right">
			{if $banner_right}
			{foreach $banner_right as $banner}
			<a href="{$banner.url}" target="{$banner.target}"><img src="res/images/{$banner.file}" alt="{$banner.description}"/></a>
			{/foreach}
			{/if}
		</div>

		{/if}

    </div>
</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/jquery.mobile.custom.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="scripts/js/bootstrap.min.js"></script>
  <script src="scripts/js/jquery.fancybox.js"></script>

  {* {if $site_data.section_type == 1} *}
  <script src="scripts/photoswipe/photoswipe.min.js"></script>
  <script src="scripts/photoswipe/photoswipe-ui-default.min.js"></script>
  {literal}
    <script>
      $('.fancy').click(function(e){
        var pswpElement = document.querySelectorAll('.pswp')[0]
        e.preventDefault();
        var items = [];
        items.push({
          src: $(this).attr('href'),
          w: parseInt($(this).find('img')[0].naturalWidth),
          h: parseInt($(this).find('img')[0].naturalHeight)
        });
        $('.fancy').not($(this)).each(function(){
          items.push({
            src: $(this).attr('href'),
            w: parseInt($(this).find('img')[0].naturalWidth),
            h: parseInt($(this).find('img')[0].naturalHeight)
          });
        });

        var options = {
             // history & focus options are disabled on CodePen
        history: false,
        focus: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0

    };
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
      });

// document.getElementById('btn').onclick = openPhotoSwipe;
    </script>
  {/literal}
  {* {/if} *}

  {if $site_data.section_type == 96}
  <script src="scripts/js/bootstrap-combobox.js"></script>
  <script src="scripts/js/jquery.maskedinput.min.js"></script>
  <script src="scripts/js/registration.js"></script>
  <script src="scripts/js/animation.slider.js"></script>
  {elseif $site_data.section_type == 95}
  <script src="scripts/js/windraw.js"></script>
  {else}
  <script src="scripts/js/site.js"></script>
  <script src="scripts/js/animation.slider.js"></script>
  {/if}
  <script src="scripts/js/scripts.js"></script>
</body>

</html>
