<div class="main-wrap speakers">
    <div class="profile">
        <h1>Profile</h1>
        {if $notification}
        {foreach $notification as $item}
        <p class="notification success"><i></i>{$item}</p>
        {/foreach}
        {/if}
        {if !$reg_expire}
        <p class="notification success">Registration Process is completed!</p>
        {/if}
        {if $PROFILE.rejected == 'Y'}
        <p class="notification danger" style="color:#EC0202;text-align:center;">Limited access to forum events. B2B only (October 16, 13:30 Parliament building).</p>
        {/if}
        {if $error}
        <ul class="notification danger">
        {foreach $error as $item}
            <li>{$item}</li>
        {/foreach}
        </ul>
        {/if}
        {if $notification || $error || $warning}
        <script type="text/javascript">
        $(document).ready(function(e) {
            $('body,html').animate({
                        scrollTop: $('.profile > h1').offset().top-400
               }, 800);
                    
        });
        </script> 			 
        {/if}
        <div class="profile-wrap">
        	<form class="register-form" action="" method="post">
            <div class="profile-info-wrap">
                <div class="left">
                    <img src="img/logo2.png" alt=""/>
                </div>
                <div class="right">
                
                    <div class="left">
                        <div><span>Name:</span> {$PROFILE.firstname} {$PROFILE.lastname}</div>
                        <div><span>Position:</span> {$PROFILE.position}</div>
                        <div><span>Contact Tel*:</span> <input type="text" class="input-medium require number" name="tel" value="{if $post.tel}{$post.tel}{else}{$PROFILE.tel}{/if}"/></div>
                    </div>
                    <div class="right">
                        <div><span>Name of organization:</span>  {$PROFILE.organisation}</div>
                        <div><span>Country:</span>  {$user.country}</div>
                        {if $PROFILE.rejected == 'N'}
                        <div><span>Prime interests:</span>  {$PROFILE.interests_txt}</div>
                        {/if}
                    </div>
                    <div class="full">
                    	<span>Company Profile*:</span> 
                        <textarea name="profile" class="input-large">{$PROFILE.profile}</textarea>
					</div>
                </div>
                <div class="clear"></div>
            </div>
              
            <div class="register table-wrap">
                <div class="agenda print second-font right">
					<a href="{$site_url}pdf?id={$PROFILE.id}&var={$PROFILE.check_code}" target="_blank"><i class="icons print-icon"></i>
					<span><span>Print your schedule</span></span></a>
				</div>
                    <table class="table">
                        <tr class="upper">
                          <th>Company Name</th>
                          {foreach $slots as $slot}
                          <th>{$slot->name}</th>
                          {/foreach}
                      </tr>
                      {foreach $companies as $company}
                      <tr>
                          <td class="first">{$company->name}</td>
                          {foreach $slots as $slot}
                          	{if $rejected.{$company->id}}
                            	{if $slot->id == 1}
                          <td {if $rejected[$company->id]}class="full_td" colspan="{$rejected[$company->id].colspan}"{/if}>
                          	{$rejected.{$company->id}.fulltxt}
                          </td>
                          		{/if}
                          {else}                          
                          <td {if $rejected[$company->id]}colspan="{$rejected[$company->id].colspan}"{/if}>
                          	<i class="icons {$matrix.{$company->id}.{$slot->id}.icon}">
                            	{if $matrix.{$company->id}.{$slot->id}.txt}{$matrix.{$company->id}.{$slot->id}.txt}{/if}
                            </i>
                            <div class="checkbox-hide"><input type="checkbox" name="slot[{$slot->id}]" {if $matrix.{$company->id}.{$slot->id}.status == 'Y' || $matrix.{$company->id}.{$slot->id}.status == 'N'} checked="checked"{/if} value="{$company->id}" />
                            </div>
                          </td>
                          	{/if}
                          {/foreach}
                      </tr>
                      {/foreach}
                    </table>
                    
                    <div class="button-wrap">
					<div class="clear"></div><br /><br />
                    <input type="submit" name="action" value="Save">
				</div>
            </div>
        	<span style="color:#c00">*For any technical problems, during registration or profile management, please contact our support team <a href="mailto:support@tbilisisilkroad.ge">support@tbilisisilkroad.ge</a></span>
        </div>
        </form>
    </div>
    <div class="clear"></div>
</div>


<script src="js/register.js"></script>