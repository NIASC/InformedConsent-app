<div class="sidebar left">
        <div class="member-wrap">
            <div class="slider">
                <h1>Welcome</h1>

                <ul>
                	{foreach $welcomers as $post}
                    <li>
                        <div class="image relative">
                            <img src="images/thumb/{$post->thumbnail}" alt="{$post->title}"/>

                            <div class="name absolute">
                                {$post->job}
                            </div>
                        </div>
                        <div class="text">
                            {$post->description}
                        </div>
                        <a href="{$site_url}{$site_data.language}/{$post->slug}/{$post->info_slug}" class="more right">More...</a>

                        <div class="clear"></div>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <br/><br/>
        <a href="http://tbilisisilkroad.ge/uploads/Tbilisi-JointDeclaration.pdf" target="_blank">
        	<img src="img/declaration.jpg" alt="JOINT DECLARATION OF THE TBILISI SILK ROAD FORUM"/>
        </a><br /><br />
        <a href="http://tbilisisilkroad.ge/uploads/FORUM-2015-last.pdf" target="_blank">
        	<img src="images/investment-catalogue.jpg" alt="investment catalogue"/>
		</a><br /><br />
        <a href="http://tbilisisilkroad.ge/uploads/Georgia-Business-Perspectives.pdf" target="_blank">
        	<img src="img/Investment-Climate-Georgia.jpg" alt="Investment Climate Georgia"/>
		</a>

            {if !$site_data.section_type|in_array:[1,7,10,22]}
        <div class="organizer-supporter-wrap">
        
            <h1>Organizer</h1>
            <div class="wrap">
            	{foreach $banner2 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
        
            <h1>Co Organizer</h1>
            <div class="wrap">
            	{foreach $banner8 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
            
            <h1>Supporters</h1>
            <div class="wrap">
                {foreach $banner3 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
            
            <h1>Partners</h1>
            <div class="wrap">
                {foreach $banner5 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
            
            
            <h1>Sponsors</h1>
            <div class="wrap">
                {foreach $banner6 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
            
            
            <h1>Media Partners</h1>
            <div class="wrap">
                {foreach $banner7 as $banner}
                <a href="{$banner.url}" target="{$banner.target}">
                	<img src="images/{$banner.file}" alt="{$banner.description}" title="{$banner.description}"/>
                </a>
                {/foreach}
            </div>
            
            
        </div>
            {/if}
    </div>