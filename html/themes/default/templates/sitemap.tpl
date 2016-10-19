<div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1>{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h1>
            <div class="content_top">
            	<div class="sitemap">
                	{$sitemap}
                </div>          
            </div>
            
            {include file = 'right_sidebar.tpl'}
            
        </div>
        
    </div>
</div>
