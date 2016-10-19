<main role="main">
		<div class="services-page-cover">
			<img src="img/services-cover.png"/>
    </div>
    <div class="services-wrapper">
			<h1>{$site_data.section_name}</h1>
			<ul class="services-list">
				{if is_array($info_content)}
					{foreach $info_content as $index => $info_item}
					<li {if $info_content|count == $index+1}class="last"{else if $index == 0}class="first"{/if}>
							<div class="wrap">
									{if $info_item.thumbnail}
									<div class="image left">
											<a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$info_item.info_slug}">
											<img src="images/thumb/{$info_item.thumbnail}" alt="{$info_item.title}" class="transparent"/>
											</a>
									</div>
									{/if}
									<div class="text-wrap">
											<div class="title">
													<h2>{$info_item.title}</h2>
											</div>
											{if $info_item.job}
											<div class="position">
												{$info_item.job}
											</div>
											{/if}
											<div class="desc">
												{$info_item.description}
											</div>
											<div class="details">
												<a href="{$site_url}{$site_data.language}/{$site_data.section_slug}/{$info_item.info_slug}">More...</a>
											</div>
									</div>
							</div>
					</li>
					{/foreach}
					{else}
					<p>
					{$info_content}
					</p>
					{/if}
			</ul>
    </div>
		<div class="cl-b"></div>
</main>
