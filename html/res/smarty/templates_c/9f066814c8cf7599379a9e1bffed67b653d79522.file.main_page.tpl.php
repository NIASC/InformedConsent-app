<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 12:30:17
         compiled from "C:\xampp\htdocs\idea\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:593651a32a70d8c866-00136925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f066814c8cf7599379a9e1bffed67b653d79522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\main_page.tpl',
      1 => 1372146763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '593651a32a70d8c866-00136925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a32a70e58ad9_75069097',
  'variables' => 
  array (
    'slider_block' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'slider_item' => 0,
    'language' => 0,
    'news_block' => 0,
    'news' => 0,
    'about_us' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a32a70e58ad9_75069097')) {function content_51a32a70e58ad9_75069097($_smarty_tpl) {?>
    <div class="full" align="center">
        <div class="demarker"></div>
        <div class="slider_container">
        	<div id="wrapper">

            <!-- MovingBoxes Slider -->
            <ul id="slider">
            
    			<?php  $_smarty_tpl->tpl_vars['slider_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider_item']->key => $_smarty_tpl->tpl_vars['slider_item']->value){
$_smarty_tpl->tpl_vars['slider_item']->_loop = true;
?>
                <li>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['slider_item']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['slider_item']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['slider_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider_item']->value['title'];?>
" />
                    <div class="slider_text">
                    	<div class="cont">
                    <h2></h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['slider_item']->value['description'];?>
</p>
                    	</div>
                        <div class="navs <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['slider_item']->value['title'];?>
</div>
                    </div>
                    </a>
                </li>
                <?php } ?>
    
            </ul><!-- end Slider #1 -->

            </div><!-- end wrapper -->
        </div>	
    </div>
    <div class="center">
        <div class="last_news">
        
            <div class="headline"><span class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['lastes_news'];?>
</span></div>
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
            <div class="news_item">
            	<div class="date text_shadow2 <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['day'];?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['month'];?>
</div>
            	<div class="news_desc">
                <?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="read_more"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
                <div class="full stroke"></div>
            </div>
            <?php } ?>
                    
        </div>
        <div class="home_about">
       		<div class="headline"><span class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['about_us'];?>
</span></div>
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/data.png" alt="idea design group" />
            
            <p><?php echo $_smarty_tpl->tpl_vars['about_us']->value['description'];?>
</p>
        </div>
        
    </div>
    <?php }} ?>