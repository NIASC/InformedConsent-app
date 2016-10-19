<div class="main-wrap speakers">
	<div class="register">
    
    {if $notification}
    {foreach $notification as $item}
    <p class="notification success"><i></i>{$item}</p>
    {/foreach}
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
					scrollTop: $('.register').offset().top-100
				}, 800);
				
	});
	</script> 			 
    {/if}
    
    {if $recovery}
    <form class="register-form" method="post">
    	<ul class="sections">
        	<li class="general">
              <div class="input-wrap">
                  <div class="left">
                      <label>Enter email*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="email" class="email" value="{$post.email}"/>
                  </div>
                  <div class="right button-wrap"><br /><br />
            			<input type="submit" name="action" value="Send"/>
                  </div>
              </div>
          </li>
      </ul>
    </form>
    {else}
	<form class="register-form" method="post">
    	<ul class="sections">
        	<li class="general">
          		<div class="error">{$error.please_activate}</div>
              <div class="input-wrap small">
                  <div class="left">
                      <label>Email*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="email" class="email" value="{$post.email}"/>
                  </div>
              </div>
              <div class="input-wrap small">
                  <div class="left">
                      <label>Password*</label>
                  </div>
                  <div class="right">
                      <input type="password" name="password"  class="password required" value="{$post.password}"/>
                  </div>
              </div>
              <div class="input-wrap small">
                  <div class="left">
                      <span style="margin-right:-5px"><a href="{$site_url}{$site_data.language}/{$reg->slug}" class="registration-btn">Register</a> |</span>
                  </div>
                  <div class="right">
                      <a href="{$site_url}{$site_data.language}/sign-in?recovery">Forgot your password?</a>
                  </div>
              </div>              
              <div class="input-wrap small">
                  <div class="left"></div>
                  <div class="right button-wrap">
                      <input type="submit" name="action" value="Sign in"/>
                  </div>
              </div>              
              
          </li>
      </ul>
    </form>
    {/if}
  </div>
<div class="clear"></div>
</div>