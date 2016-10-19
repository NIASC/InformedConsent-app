<?php /* Smarty version Smarty-3.1.13, created on 2014-03-21 16:25:34
         compiled from "C:\xampp\htdocs\eeu.edu.ge\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1293452e113cf5302f0-02693920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a468b31eeb760df3519f0e775569e58b07823340' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eeu.edu.ge\\smarty\\templates\\main_page.tpl',
      1 => 1395404668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293452e113cf5302f0-02693920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e113cf6800a5_51607958',
  'variables' => 
  array (
    'slider_block' => 0,
    'info' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news_block' => 0,
    'post' => 0,
    'language' => 0,
    'gallery' => 0,
    'programs_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e113cf6800a5_51607958')) {function content_52e113cf6800a5_51607958($_smarty_tpl) {?>	
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
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
"/>
                    <span><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</span>
                </div>
                </a>
                <h1 class="rsABlock sampleBlock">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>

                    <br /><?php echo $_smarty_tpl->tpl_vars['info']->value->description;?>
</a>
                </h1>
			</div>
            
            <?php } ?>
            
        </div>
        <?php }?>
        
        <div id="post_1" class="home_content_wrapper">        
            <div class="news_block">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <div class="home_post">
                	<?php if ($_smarty_tpl->tpl_vars['post']->value['thumbnail']){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                    <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['post']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
"/>
                    </a>
                    <?php }?>
                    <h1 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h1>
                    <time datetime="<?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['start_date'];?>
</time><br />
                    <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>

                    <a class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><span></span></a>
                </div>
            <?php } ?>
            <a id="1" class="more_posts"><?php echo $_smarty_tpl->tpl_vars['language']->value['more_posts'];?>
</a>
        	</div>
            
            <div class="gallery_hot <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            	<img src="img/eeu_gallery.jpg" alt="eeu"/>
                <span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['gallery']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['gallery']->value->name;?>
</a></span>
            </div>
            
            <div class="program_wrapper">
            	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['programs_array']->value[0]['section_name'];?>
</span>
                <ul class="program_list">
                	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['programs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                	<li><h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h2></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<?php }} ?>