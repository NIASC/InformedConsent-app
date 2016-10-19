<div class="slider">
  <img src="res/images/3988fake-video.png" class="play" style="width:100%;" alt="">
  <div class="slide-content" style="display:none">
    <ul class="slides">
		{foreach $slider_banner as $banner}
		<li data-step="{$banner@iteration}" class="active">
			<div class="animation-text">
				<span></span>{$banner.title|strip_tags}
			</div>
			<img src="res/images/{$banner.file}" style="width:50%" alt="">
		</li>
	  	{/foreach}
    </ul>
  </div>
  <button class="btn btn-link btn-slider-prev" disabled="" style="display:none">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 
  </button>
  <button class="btn btn-link btn-slider-next" style="display:none"> 
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
</div>
