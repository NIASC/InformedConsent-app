<?php /* Smarty version Smarty-3.1.13, created on 2016-03-23 17:23:07
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2797156d5eb74be3294-29213325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f78f973c7ce5ca8d744a4cf661f518e10551905' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\main_page.tpl',
      1 => 1458730395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2797156d5eb74be3294-29213325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d5eb74c9e103_86326641',
  'variables' => 
  array (
    'slider' => 0,
    'slide' => 0,
    'about_info' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'team_page' => 0,
    'language' => 0,
    'projects_page' => 0,
    'news' => 0,
    'banner2' => 0,
    'banner' => 0,
    'banner3' => 0,
    'banner4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d5eb74c9e103_86326641')) {function content_56d5eb74c9e103_86326641($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['slider']->value){?>
<ul id="slider" class="slider">
	<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
    <li><img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['slide']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
"/></li>
    <?php } ?>
</ul>
<?php }?>

<div id="content">
    <div class="center">
            <div id="about_bridge">
                <h1><?php echo $_smarty_tpl->tpl_vars['about_info']->value[0]['title'];?>
</h1>
                <?php echo $_smarty_tpl->tpl_vars['about_info']->value[0]['description'];?>

            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['team_page']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['see_team'];?>
 <div class="arrow"></div></a><br/><br/><br/>
                <div id="see_our_projects">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['projects_page']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['see_projects'];?>

                    <div class="arrow_white"></div></a>
                
                </div>
            </div>
            <div id="right_top">
                <ul>
                    <li>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['info_slug'];?>
">
                        	<img src="uploads/files/slider/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['title'];?>
"/>
                        </a>
                        <div class="text_out">
                            <div class="text">
                                <div class="arrow_l"></div>
                                <h2 class="upper">
                                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['gaard_news'];?>
</a>
                                </h2>
                            </div>
                            <div class="inner_text">
                                <h3 class="upper">
                                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[1]['info_slug'];?>
">
                                    	<div class="arrow2"></div><?php echo $_smarty_tpl->tpl_vars['news']->value[1]['title'];?>

                                    </a>
                                </h3>
                                <?php echo $_smarty_tpl->tpl_vars['news']->value[1]['description'];?>

                            </div>
						</div>
                    </li>
                    <li>
                    	<div class="text_out">
                        	<div class="text">
                            	<h2 class="upper">
                                    <div class="arrow_r"></div>
                                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['sector_news'];?>
</a>
                            	</h2>
                    		</div>
                            <div class="inner_text">
                                <h3 class="upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['info_slug'];?>
">
                                        <div class="arrow2"></div><?php echo $_smarty_tpl->tpl_vars['news']->value[2]['title'];?>

                                    </a>
                                </h3>
                                <?php echo $_smarty_tpl->tpl_vars['news']->value[2]['description'];?>

                            </div>
                        </div>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['info_slug'];?>
">
                        	<img src="uploads/files/slider/<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value[2]['title'];?>
"/>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="recent_news">
            	<h1 class="upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['recent_posts'];?>
</h1>
                <div id="line"></div>
            </div>
            	
                <div id="left_bottom">
                <div class="triangle"></div>
                	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value[3]['title'];?>
</a></h2>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['info_slug'];?>
">
                    	<img src="uploads/files/slider/<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value[3]['title'];?>
"/>
                    </a>
                    <div class="left_bottom_text">
                    <date><?php echo $_smarty_tpl->tpl_vars['news']->value[3]['date'];?>
</date>
                    <?php echo $_smarty_tpl->tpl_vars['news']->value[3]['description'];?>

                    </div>
                </div>
                <div id="right_bottom">
                <div class="partners upper"><p><?php echo $_smarty_tpl->tpl_vars['language']->value['partners'];?>
</p></div>
                	<ul class="banner">
                    	<?php if (count($_smarty_tpl->tpl_vars['banner2']->value)>1){?>
						<li class="slider">
                        	<ul id="banner_slider_1">
                            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                                	<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                                	</a>
                                </li>
                                <?php } ?>
							</ul>
                            <script type="text/javascript">
							$(document).ready(function(e) {
								$('#banner_slider_1').height($('#banner_slider_1').width()*104/361);
							});
							$(window).load(function() {	 
								startRotator("#banner_slider_1", 2000, 4500);									
							});
							</script>
                        </li>
                        <?php }elseif(count($_smarty_tpl->tpl_vars['banner2']->value)==1){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner2']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner2']->value[0]['target'];?>
"><img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner2']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner2']->value[0]['description'];?>
"/></a></li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['banner3']->value)>1){?>
						<li class="slider">
                        	<ul id="banner_slider_3">
                            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                                	<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                                	</a>
                                </li>
                                <?php } ?>
							</ul>
                            <script type="text/javascript">
							$(document).ready(function(e) {
								$('#banner_slider_3').height($('#banner_slider_3').width()*104/361);
							});
							$(window).load(function() {	 
								startRotator("#banner_slider_3", 2000, 4500);									
							});
							</script>
                        </li>
                        <?php }elseif(count($_smarty_tpl->tpl_vars['banner2']->value)==1){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner3']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner3']->value[0]['target'];?>
"><img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner3']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner3']->value[0]['description'];?>
"/></a></li>
                        <?php }?>
                        
                        <?php if (count($_smarty_tpl->tpl_vars['banner4']->value)>1){?>
						<li class="slider">
                        	<ul id="banner_slider_4">
                            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                                	<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                                	</a>
                                </li>
                                <?php } ?>
							</ul>
                            <script type="text/javascript">
							$(document).ready(function(e) {
								$('#banner_slider_4').height($('#banner_slider_4').width()*104/361);
							});
							$(window).load(function() {	 
								startRotator("#banner_slider_4", 2000, 4500);									
							});
							</script>
                        </li>
                        <?php }elseif(count($_smarty_tpl->tpl_vars['banner4']->value)==1){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner4']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner4']->value[0]['target'];?>
"><img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner4']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner4']->value[0]['description'];?>
"/></a></li>
                        <?php }?>
                    </ul>
                </div>
    </div>
</div>

<script type="text/javascript">

	$(document).ready(function(e) {
		$('#slider').height($('#slider').width()*530/1493);
	});
	
	 $(window).load(function() {
		 
		startRotator("#slider", 2000, 4500);
			
	});	

</script>

<?php }} ?>