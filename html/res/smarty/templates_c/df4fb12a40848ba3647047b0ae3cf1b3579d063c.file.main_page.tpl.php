<?php /* Smarty version Smarty-3.1.13, created on 2016-05-24 11:38:27
         compiled from "C:\xampp\htdocs\moe\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31902571e383c435206-25473776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4fb12a40848ba3647047b0ae3cf1b3579d063c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\main_page.tpl',
      1 => 1464075503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31902571e383c435206-25473776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571e383c909de9_00487819',
  'variables' => 
  array (
    'language' => 0,
    'banner4' => 0,
    'banner' => 0,
    'news_1' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'item' => 0,
    'news_2' => 0,
    'news_3' => 0,
    'banner2' => 0,
    'banner3' => 0,
    'banner5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e383c909de9_00487819')) {function content_571e383c909de9_00487819($_smarty_tpl) {?><div id="content">
	<div class="partners">
		<div class="container">
			<h3><?php echo $_smarty_tpl->tpl_vars['language']->value['banner_1_title'];?>
</h3>
			<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<ul class="partner-list">
							<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
								<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['title']);?>
"/>
							</a></li>
							<?php if ($_smarty_tpl->tpl_vars['banner']->iteration%4==0){?>							
						</ul>
					</div>
							<?php if ($_smarty_tpl->tpl_vars['banner']->iteration!=count($_smarty_tpl->tpl_vars['banner4']->value)){?>
					<div class="item">
						<ul class="partner-list">
							<?php }?>
							<?php }elseif($_smarty_tpl->tpl_vars['banner']->iteration==count($_smarty_tpl->tpl_vars['banner4']->value)){?>					
						</ul>
					</div>
						<?php }?>
							<?php } ?>
					</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev"></a>
						<a class="right carousel-control" href="#carousel-example-generic2" data-slide="next"></a>
				</div>					
			</div>
		</div>

		
		<div class="container">
			<?php if ($_smarty_tpl->tpl_vars['news_1']->value){?>
			<h3 class="post-widget-title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news_1']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['news'];?>
</a></h3>
			<div class="col-md-9" style="padding: 0;">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div class="col-md-6" style="padding: 0;">
				    <div class="item news-item">
						<div class="inner-item">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['thumbnail']){?>
							<img src="uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
						<?php }else{ ?>
							<img src="images/no-image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
						<?php }?>
							<div class="hover-item">
								<ul>
									<li><a class="date" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</a></li>
								</ul>
							</div>
						</div>
						<h5><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h5>
						<p><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</a></p>
					</div>
				</div>
			<?php } ?>	
			<?php }?>		

			<div class="main-widget-full">
			<?php if ($_smarty_tpl->tpl_vars['news_2']->value){?>
			<h3 class="post-widget-title">
				<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news_2']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['announcements'];?>
</a>
			</h3>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="item">
				<h5><a class="date" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
">
					<i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>

					</a> | <a class="title" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
				</h5>
				<p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
			</div>
			<?php } ?>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['news_3']->value){?>
			<h3 class="post-widget-title">
				<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news_3']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['announcements'];?>
</a>
			</h3>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="item">
				<h5><a class="date" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
">
					<i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>

					</a> | <a class="title" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
				</h5>
				<p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
			</div>
			<?php } ?>
			<?php }?>
		</div>
	</div>
	
	<div class="col-md-3 shop-sidebar">
		<div class="sidebar-widgets">
			<div class="widget-item">
				<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
					<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
"/>
				</a>
				<?php } ?>
			</div>
			
			<div class="widget-item"><div class="calendar" id="calendar"></div></div>
			<div class="widget-item">
				<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
					<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
"/>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- End content -->
<div class="partners">
	<div class="container">
		<h3><?php echo $_smarty_tpl->tpl_vars['language']->value['main_projects'];?>
</h3>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<ul class="partner-list">
						<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
							<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
"/>
						</a></li>
						<?php if ($_smarty_tpl->tpl_vars['banner']->iteration%5==0){?>
															
					</ul>
				</div>
						<?php if ($_smarty_tpl->tpl_vars['banner']->iteration!=count($_smarty_tpl->tpl_vars['banner5']->value)){?>
				<div class="item">
					<ul class="partner-list">
						<?php }?>
						<?php }elseif($_smarty_tpl->tpl_vars['banner']->iteration==count($_smarty_tpl->tpl_vars['banner5']->value)){?>
															
					</ul>
				</div>
						<?php }?>
						<?php } ?>									
					</ul>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
		</div>					
	</div>
</div>

</div>
			
			
			
			
			
			
	
    	
    
    <script type="application/javascript" src="js/cal.js"></script>

	<script type="text/javascript">
        jQuery(document).ready(function(e) {
            var contentLANG = 'ka';
			var langURL = 'ajax/calendar.php?lang='+contentLANG;
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
        });
    </script>
    
    	
		
	<script>
		jQuery(function(){ 
			DevSolutionSkill.init('circle'); 
			DevSolutionSkill.init('circle2'); 
			DevSolutionSkill.init('circle3'); 
			DevSolutionSkill.init('circle4'); 
			DevSolutionSkill.init('circle5'); 
			DevSolutionSkill.init('circle6');
		});
	</script>
<?php }} ?>