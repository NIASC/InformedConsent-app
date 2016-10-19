<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="{$site_url}js/shape.js"></script>
<script type="text/javascript" src="{$site_url}js/map.js"></script>
<script type="text/javascript">
// This example creates a simple polygon representing the Bermuda Triangle.
var points = [
  {$points}
];

</script>
        
<h1 class="headline {$site_data.language} upper">{$site_data.section_name}</h1>

<div class="text_center single">
    <ul class="map_layers">
    	<li><i><img src="img/4.png" alt="{$language.supreme}"/></i>{$language.supreme}</li>
        <li><i><img src="img/2.png" alt="{$language.appeal}"/></i>{$language.appeal}</li>
        <li><i><img src="img/3.png" alt="{$language.city}"/></i>{$language.city}</li>
        <li><i><img src="img/1.png" alt="{$language.magistrates}"/></i>{$language.magistrates}</li>
    </ul>
    <div id="map-canvas" class="large_map"></div>
    <ul class="hidden">
    	{foreach $info_content as $item}
    	<li id="item_{$item->id}">
        	<div class="info_window">
        	<h2 class="point_title">{$item->title}</h2>
            {if $item->thumbnail}
            <img src="images/small_{$item->thumbnail}" alt="{$item->title}" class="point_thumb"/>
            {/if}
        	{$item->description}
            </div>
        </li>
        {/foreach}
    </ul>
    <hr class="bottom_rule" />
    <a class="back" onclick="window.history.back()">{$language.back}</a>
    <ul class="social_action">
        <li class="fb"><div class="fb-like" data-href="{$site_url}{$site_data.language}/{$site_data.section_slug}" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
	</ul>

</div>
    
{include file = 'right_sidebar.tpl'}





