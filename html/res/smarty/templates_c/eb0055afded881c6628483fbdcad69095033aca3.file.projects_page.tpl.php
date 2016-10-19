<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 13:45:03
         compiled from "C:\xampp\htdocs\idea\smarty\templates\projects_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3050751b59a9b75ea30-91341693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0055afded881c6628483fbdcad69095033aca3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\projects_page.tpl',
      1 => 1372238296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3050751b59a9b75ea30-91341693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b59a9bc054c3_98888817',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'news' => 0,
    'site_url' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b59a9bc054c3_98888817')) {function content_51b59a9bc054c3_98888817($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>
    
<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1></div>
        <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["news_name"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value){
$_smarty_tpl->tpl_vars["news"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["news_name"]['index']++;
?>
        	<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['news_name']['index'] / 1)){?>
        <div class="news_item ">
        	<?php }else{ ?>
        <div class="news_item odd">
        	<?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
			<div class="list_img">
            	<span class="img_head"></span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                </a>
            </div>
            <?php }else{ ?>
            <div class="date text_shadow2 <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
            	<span><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['day'];?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['month'];?>

            </div>
            <?php }?>
			<div class="news_desc">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
                <?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

			</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="read_more"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
			<div class="full stroke"></div>
		</div>
        <?php } ?>
	</div>
</div>
    <?php }} ?>