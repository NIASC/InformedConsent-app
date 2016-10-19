<?php /* Smarty version Smarty-3.1.13, created on 2013-12-05 18:30:13
         compiled from "C:\xampp\htdocs\aig\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319885295b952efc2c8-48222596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b29091c65b766c1a885f5db5face17e4a52b86dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\main_page.tpl',
      1 => 1386253690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319885295b952efc2c8-48222596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295b953145809_11100364',
  'variables' => 
  array (
    'slider_block' => 0,
    'info' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'left_banners' => 0,
    'banner' => 0,
    'language' => 0,
    'news_block' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295b953145809_11100364')) {function content_5295b953145809_11100364($_smarty_tpl) {?>
    	<?php if ($_smarty_tpl->tpl_vars['slider_block']->value){?>
        <div id="video-gallery" class="royalSlider videoGallery rsDefault">
        
      		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <div class="rsContent">
                <a class="rsImg" href="images/<?php echo $_smarty_tpl->tpl_vars['info']->value->thumbnail;?>
">
                <div class="rsTmb">
                  	<img src="images/small_<?php echo $_smarty_tpl->tpl_vars['info']->value->thumbnail;?>
"/>
                    <span><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</span>
                </div>
                </a>
                <h3 class="rsABlock sampleBlock">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</a>
                    <br /><?php echo $_smarty_tpl->tpl_vars['info']->value->description;?>

                </h3>
			</div>
            
            <?php } ?>
            
        </div>
        <?php }?>
        
        <div class="home_content_wrapper">
        	<section class="left_bar">
            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
                <?php } ?>
            </section>
            <section class="news_block">
            	<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['language']->value['news'];?>
</h1>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <article class="home_post">
                    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a></h2>
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>

                    <a class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
                </article>
            <?php } ?>
        	</section>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<?php }} ?>