<?php /* Smarty version Smarty-3.1.13, created on 2016-10-18 20:12:52
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6032579a1173c4ede0-33713251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4db292cb5790a7319185b29ea109a3376f75ba0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\main_page.tpl',
      1 => 1476814361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6032579a1173c4ede0-33713251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_579a1174114b09_54419127',
  'variables' => 
  array (
    'language' => 0,
    'header_banner' => 0,
    'about_study' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news_1' => 0,
    'item' => 0,
    'registration_page' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579a1174114b09_54419127')) {function content_579a1174114b09_54419127($_smarty_tpl) {?><nav id="section-navbar" class="navbar navbar-with-icons">
    <ul class="nav navbar-nav">
      <li>
        <a href="#about">
          <div class="link-wrapper">
            <span class="icon icon-about"></span>
            <span class="desc hidden-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['about_study'];?>
</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#how">
          <div class="link-wrapper">
            <span class="icon icon-how"></span>
            <span class="desc hidden-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['how_works'];?>
</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#running">
          <div class="link-wrapper">
            <span class="icon icon-running"></span>
            <span class="desc hidden-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['who_is_running'];?>
</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#who">
          <div class="link-wrapper">
            <span class="icon icon-who"></span>
            <span class="desc hidden-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['participate'];?>
</span>
          </div>
        </a>
      </li>
    </ul>
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
<section id="about" class="container-fluid section">
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
  <section id="news" class="container-fluid section">
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
  <section id="how" class="container-fluid section">
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
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-enroll"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['consent_enroll'];?>
</h3>
                        <div class="guide-desc-text"><?php echo $_smarty_tpl->tpl_vars['language']->value['understand_risk'];?>
</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-task"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['perform_tasks'];?>
</h3>
                        <div class="guide-desc-text"><?php echo $_smarty_tpl->tpl_vars['language']->value['ask_tasks'];?>
</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-health"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['track_health'];?>
</h3>
                        <div class="guide-desc-text"><?php echo $_smarty_tpl->tpl_vars['language']->value['use_data'];?>
</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-height">
                    <div class="inside inside-full-height">
                      <div class="guide-desc">
                        <div class="icon icon-science"></div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['make_discoveries'];?>
</h3>
                        <div class="guide-desc-text"><?php echo $_smarty_tpl->tpl_vars['language']->value['make_breakthroughs'];?>
</div>
                      </div>
                    </div>
                  </div>
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
  <section id="running" class="container-fluid section">
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
              	<div class="item">
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
  <section id="who" class="container-fluid section">
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