<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 16:38:41
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29788526e1971a44680-74041233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef66fbb3c3496c3c23ee7949eeab4137c770ddb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\main_page.tpl',
      1 => 1385469518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29788526e1971a44680-74041233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e1971c62ba8_64951694',
  'variables' => 
  array (
    'slider_block' => 0,
    'site_data' => 0,
    'site_url' => 0,
    'gall_section' => 0,
    'language' => 0,
    'about_us' => 0,
    'partners' => 0,
    'partner' => 0,
    'services' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e1971c62ba8_64951694')) {function content_526e1971c62ba8_64951694($_smarty_tpl) {?><div class="center_container">
	<div class="center">
    	<?php if ($_smarty_tpl->tpl_vars['slider_block']->value){?>
        <ul class="slider_wrapper">
        	<li class="fade first">
            	<a class="fancybox" data-fancybox-group="gallery" href="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[0]['thumbnail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[0]['title'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[0]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[0]['album_title'];?>
"/>
                </a>
            </li>
            <li class="fade second">
            	<a class="fancybox" data-fancybox-group="gallery" href="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[1]['thumbnail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[1]['title'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[1]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[1]['album_title'];?>
"/>
                </a>
            </li>
            <li class="third">
            	<a class="fancybox" data-fancybox-group="gallery" href="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[2]['thumbnail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[2]['title'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[2]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[2]['album_title'];?>
" class="fade"/>
                </a>
                <h3 class="marker <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['gall_section']->value->slug;?>
">
                    <span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['photo_gallery'];?>

                </a>
                </h3>
            </li>
            <li class="fade fourth">
            	<a class="fancybox" data-fancybox-group="gallery" href="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[3]['thumbnail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[3]['title'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[3]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider_block']->value[3]['album_title'];?>
"/>
                </a>
            </li>
        </ul>
        <?php }?>
	</div>  
    <div class="home_content_wrapper">
    	<div class="center">
        
        	<div class="left_block">
            	<?php if ($_smarty_tpl->tpl_vars['about_us']->value){?>
                <h2 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['about_us']->value[0]['title'];?>
</h2>
                <?php echo $_smarty_tpl->tpl_vars['about_us']->value[0]['description'];?>

                <br /><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['about_us']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
                <?php }?>
                <ul class="partners">
                	<?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
$_smarty_tpl->tpl_vars['partner']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['partner']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['partner']->value['id'];?>
">
                    	<img src="images/<?php echo $_smarty_tpl->tpl_vars['partner']->value['thumbnail'];?>
"/>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            
            <div class="right_block">
            	<h2 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['services'];?>
</h2>
                <div class="block_body">
                	<span class="decorations"></span>
                    <ul>
                    	<?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                        <li>
                        	<h3 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><span class="cyrcle"></span>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['service']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</a></h3>
                            <?php echo $_smarty_tpl->tpl_vars['service']->value['description'];?>

                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
</div>
    <?php }} ?>