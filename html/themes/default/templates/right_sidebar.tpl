<div class="col-md-3 shop-sidebar">
	{if $post_by_year}
	<form method="get">
	<select class="sidebar-select" name="year">
		<option>{$language.year}</option>
		{foreach $post_by_year as $option}
		<option value="{$option.year}">{$option.year} ({$option.count})</option>
		{/foreach}
	</select>
	</form>
	{/if}
	{$right_menu}
    <div class="sidebar-widgets">
	
		<div class="widget-item">
			{foreach $banner2 as $banner}
			<a href="{$banner.url}" target="{$banner.target}"><img src="res/images/{$banner.file}" alt="{$banner.description}"/></a>
			{/foreach}
		</div>

		<div class="widget-item">
        	<div class="calendar" id="calendar"></div>							
		</div>
		
		<div class="widget-item">
			{foreach $banner3 as $banner}
			<a href="{$banner.url}" target="{$banner.target}"><img src="res/images/{$banner.file}" alt="{$banner.description}"/></a>
			{/foreach}								
		</div>
		
	</div>
</div>
<script type="application/javascript" src="scripts/js/cal.js"></script>
{literal}
<script type="text/javascript">
	jQuery(document).ready(function(e) {
        var contentLANG = jQuery('#language a.active').attr('title');
		var langURL = 'calendar.php?lang='+contentLANG;
		jQuery("#calendar").load(langURL, SetCalendarDayClick);
		jQuery('#calendar .row > a').click(function(){
		return false;
	});

    function SetCalendarDayClick(){
        jQuery("#calendar li.active").live('click', function(){
			
            var $this=jQuery(this);
            if(jQuery(this).is(".clicked")){
                return false;
            }
            jQuery("#calendar li.active.clicked").removeClass("clicked");
            $this.addClass("clicked");
            if(jQuery("ul.day-content").children().length>0){
                jQuery("ul.day-content").children().fadeOut(function(){
                    jQuery("ul.day-content li").remove();
                    jQuery("ul.day-content").append($this.find("li").clone().css("display","none"));
                    jQuery("ul.day-content li").fadeIn(400);
                });
            }
            else {
				
                jQuery("ul.day-content").append($this.find("li").clone().css("display","block"));
                jQuery("ul.day-content li").fadeIn(400);
            }
        });
    }
	
	jQuery('.popular-product li.active').parents('li').addClass('active');
	jQuery('.popular-product ul.drop-down').removeClass('drop-down');
	jQuery('.popular-product li.active > .drop-down-arrow .fa-angle-down').removeClass('fa-angle-down');
	jQuery('.popular-product .drop-down-arrow').click(function(){
		
		jQuery(this).children().toggleClass('fa-angle-down');
		jQuery(this).parent().toggleClass('active');
	});
	
	jQuery('.sidebar-select').change(function(){
		jQuery(this).parent().submit();
	});
	
	jQuery('html, body').animate({ scrollTop: jQuery('#content').offset().top-145 }, 1000);
    });
</script>
{/literal}