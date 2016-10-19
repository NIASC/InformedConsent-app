<div id="content">
	<div class="container"> 
		<h3 class="page-title">{$site_data.section_name}</h3>
		<div class="col-md-9 page-content">
			<div class="col-md-12 page-content">
               	{if is_array($info_content)}  
				<div class="shop-widget">
					<ul class="category-shop-list">
                        {foreach $info_content as $index => $info_item}
						<li>
							<a class="accordion-link {if $info_item@iteration == 1}active{/if}" href="#">{if $site_data.section_style == 1}<i class="fa fa-clock-o"></i> {$info_item.start_date.0} - {$info_item.end_date.0} | {/if}{$info_item.title}</a>
							<ul class="accordion-list-content {if $info_item@iteration == 1}collapse in{/if}"><span >{$info_item.content}</span>
							</ul>
						</li>
                        {/foreach}
					</ul>
				</div>			
				{/if}
			</div>
			{include file='widgets/social.tpl'} 
		</div>
		<!-- End content -->				
		{include file = 'right_sidebar.tpl'}
	</div>
</div>