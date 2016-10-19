<?php /* Smarty version Smarty-3.1.13, created on 2015-02-16 11:55:39
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212235371ccb9c02037-31902497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee036842f1073f71a0b0d878ea56beb04f1a2b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\main_page.tpl',
      1 => 1423606836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212235371ccb9c02037-31902497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5371ccb9da84e6_80593258',
  'variables' => 
  array (
    'language' => 0,
    'slider_block' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info' => 0,
    'news_block' => 0,
    'main_banner' => 0,
    'banner' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371ccb9da84e6_80593258')) {function content_5371ccb9da84e6_80593258($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['news'];?>
</h1>
<div class="news_container">
    <?php if ($_smarty_tpl->tpl_vars['slider_block']->value){?>
        <div id="video-gallery" class="royalSlider videoGallery rsDefault">
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                <div class="rsContent">
                    <div class="rsABlock sampleBlock">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
/">
                        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1><br />
                        <span class="date"><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</span></a>
                        <br />
                        <div class="description">
                        	<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['info']->value['description']);?>

                        	<a class="more" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
/">>>></a>
                        </div>
                    </div>
                    <a class="rsImg" href="images/slider/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
/">
                    <div class="rsTmb">
                        <img src="images/slider/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                    </div>
                    </a>
                </div>            
            <?php } ?>            
        </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['news_block']->value){?>
        <ul class="home_news">
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <li>
                <h1 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
/"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h1>
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
/" class="more">>>></a>
            </li>
            <?php } ?>
        </ul>
    <?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<ul class="main_banners">
	<li class="blue">
    	<h3><a><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[3]->title);?>
</a></h3>
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['main_banner']->value[3]->file;?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[3]->title);?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value){?>
        <span></span>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value[3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value->target;?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->title);?>
</a></li>
            <?php } ?>
        </ul>
        <?php }?>
    </li>
    <li class="gray">
   		<h3><a><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[4]->title);?>
</a></h3>
    	<img src="images/<?php echo $_smarty_tpl->tpl_vars['main_banner']->value[4]->file;?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[4]->title);?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value){?>
        <span></span>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value[4]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value->target;?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->title);?>
</a></li>
            <?php } ?>
        </ul>
        <?php }?>
    </li>
    <li class="green">
    	<h3><a><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[5]->title);?>
</a></h3>
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['main_banner']->value[5]->file;?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['main_banner']->value[5]->title);?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value){?>
        <span></span>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value[5]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value->target;?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->title);?>
</a></li>
            <?php } ?>
        </ul>
        <?php }?>
    </li>
</ul>

                    
                    <?php }} ?>