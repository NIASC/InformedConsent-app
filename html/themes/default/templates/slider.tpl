<div class="slider">
  <div class="slide-content">
    <ul class="slides">
		{foreach $slider_banner as $banner}
		<li data-step="{$banner@iteration}" class="active">
			<div class="animation-text">
				<span></span>{$banner.title|strip_tags}
			</div>
			<a href="res/images/{$banner.file}" class="fancy"><img src="res/images/{$banner.file}" style="width:50%" alt=""></a>
		</li>
	  	{/foreach}
    </ul>
  </div>
  <button class="btn btn-link btn-slider-prev" disabled="">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link playbtn">
  	<span class="glyphicon glyphicon glyphicon-play" style="font-size:20px" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link btn-slider-next">
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
</div>
