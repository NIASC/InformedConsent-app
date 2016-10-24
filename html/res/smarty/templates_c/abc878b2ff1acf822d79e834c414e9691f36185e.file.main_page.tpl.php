<?php /* Smarty version Smarty-3.1.13, created on 2016-10-20 18:45:55
         compiled from "/Applications/MAMP/htdocs/research/html/themes/default/templates/main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141353513258075ffaae2dd3-83480170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abc878b2ff1acf822d79e834c414e9691f36185e' => 
    array (
      0 => '/Applications/MAMP/htdocs/research/html/themes/default/templates/main_page.tpl',
      1 => 1476987104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141353513258075ffaae2dd3-83480170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58075ffac4d8a7_49908500',
  'variables' => 
  array (
    'middle_menu' => 0,
    'menu' => 0,
    'header_banner' => 0,
    'language' => 0,
    'about_study' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news_1' => 0,
    'item' => 0,
    'registration_page' => 0,
    'study_block' => 0,
    'block' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58075ffac4d8a7_49908500')) {function content_58075ffac4d8a7_49908500($_smarty_tpl) {?><nav id="section-navbar" class="navbar navbar-with-icons">
	<?php if ($_smarty_tpl->tpl_vars['middle_menu']->value){?>
    <ul class="nav navbar-nav">
    	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['middle_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
		<li>
        	<a href="#home_<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
">
            <div class="link-wrapper">
                <span class="icon <?php echo $_smarty_tpl->tpl_vars['menu']->value->icon;?>
"></span>
        		<span class="desc hidden-xs"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</span>
			</div>
        	</a>
		</li>
      	<?php } ?>
    </ul>
    <?php }?>
  </nav>


  <?php if ($_smarty_tpl->tpl_vars['header_banner']->value){?>
  <div class="container-fluid image-header">
    <div class="row">
      <div class="col-xs-12 background">
        <div class="row">
			<img src="res/images/<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
			<div class="col-xs-8 col-sm-4 col-md-3 col-sm-offset-1 banner-descrition">
				<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['title'];?>

			</div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['about_study']->value[1]){?>
<section id="home_<?php echo $_smarty_tpl->tpl_vars['about_study']->value[1][0]['section_id'];?>
" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-about pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['about_study']->value[1][0]['title'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text"><?php echo $_smarty_tpl->tpl_vars['about_study']->value[1][0]['description'];?>
</span>
            <a class="content-text" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['about_study']->value[1][0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
          </div>
        </div>
      </div>
    </div>
</section>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['news_1']->value){?>
  <section id="home_<?php echo $_smarty_tpl->tpl_vars['news_1']->value[0]['section_id'];?>
" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['latest_news'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid">
			  	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
                  <?php if ($_smarty_tpl->tpl_vars['item']->value['thumbnail']){?>
				  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
">
				  <img src="res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
				  </a>
				  <?php }else{ ?>
				  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
">
				  <img src="themes/default/images/no-image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
				  </a>
				  <?php }?>
                </div>
                <div class="col-xs-12 col-sm-9">
                  <div class="news-content">
                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
                    <span class="content-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
...</span>
                    <a class="content-text" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
                  </div>
                </div>
             	</div>
				<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['about_study']->value[2]){?>
  <section id="home_<?php echo $_smarty_tpl->tpl_vars['about_study']->value[2][0]['section_id'];?>
" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-how pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['about_study']->value[2][0]['title'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-lg-offset-1 col-lg-10">
        <div class="section-content">
          <div class="section-content-guide">
            <div class="container-fluid">
              <div class="row">
			  	<?php if ($_smarty_tpl->tpl_vars['about_study']->value[2][0]['thumbnail']){?>
                <div class="col-sm-7 animation-wrap">
                  <!-- <img src="res/images/<?php echo $_smarty_tpl->tpl_vars['about_study']->value[2][0]['thumbnail'];?>
"/> -->
                  <?php echo $_smarty_tpl->getSubTemplate ("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
				<?php }?>
                <div class="col-sm-5">
                  <div class="guide-content">
                    <span class="content-text"><?php echo $_smarty_tpl->tpl_vars['about_study']->value[2][0]['description'];?>
</span>
                    <a class="content-text" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['about_study']->value[2][0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
                    <span class="registration-link">
						<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['registration_page']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['registration'];?>
</a>
					</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-height">
                	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['study_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
                    <div class="col-xs-12 col-sm-height">
                        <div class="inside inside-full-height">
                          <div class="guide-desc">
                            <div class="icon <?php echo $_smarty_tpl->tpl_vars['block']->value['icon'];?>
"></div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['block']->value['name'];?>
</h3>
                            <div class="guide-desc-text"><?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>
</div>
                          </div>
                        </div>
                    </div>
                  	<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['about_study']->value[3]){?>
  <section id="home_<?php echo $_smarty_tpl->tpl_vars['about_study']->value[3][0]['section_id'];?>
" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-running pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['who_is_running'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text"><?php echo $_smarty_tpl->tpl_vars['language']->value['study_sponsored'];?>
</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section-content">
        <div class="section-content-carousel">
          <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
				<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_study']->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['info']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['info']->iteration++;
?>
              	<div class="item <?php if ($_smarty_tpl->tpl_vars['info']->iteration==1){?>active<?php }?>">
					<div class="carousel-content">
					  <div class="container-fluid">
						<div class="row">
							<?php if ($_smarty_tpl->tpl_vars['info']->value['thumbnail']){?>
						  <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
							<img src="res/images/slider/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
"/>
						  </div>
							<?php }?>
						  <div class="col-xs-12 col-sm-9">
							<h3><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h3>
							<span><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
						  </div>
						</div>
					  </div>
					</div>
				 </div>
			  	<?php } ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
              <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
              <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['language']->value['next'];?>
</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['about_study']->value[4]){?>
  <section id="home_<?php echo $_smarty_tpl->tpl_vars['about_study']->value[4][0]['section_id'];?>
" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-who pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['about_study']->value[4][0]['title'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-text">
            <span class="content-text"><?php echo $_smarty_tpl->tpl_vars['about_study']->value[4][0]['description'];?>
</span>
            <span class="registration-link"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['registration_page']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['registration'];?>
</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>
<!-- End content -->

</div>

</div>
<?php }} ?>