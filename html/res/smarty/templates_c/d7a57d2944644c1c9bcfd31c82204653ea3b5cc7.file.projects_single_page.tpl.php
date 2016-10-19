<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 13:45:07
         compiled from "C:\xampp\htdocs\idea\smarty\templates\projects_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802251b826bea08996-30073370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a57d2944644c1c9bcfd31c82204653ea3b5cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\projects_single_page.tpl',
      1 => 1372238285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2802251b826bea08996-30073370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b826beae7408_91333975',
  'variables' => 
  array (
    'site_data' => 0,
    'navigator' => 0,
    'language' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_title' => 0,
    'related_gall' => 0,
    'img' => 0,
    'start_date' => 0,
    'end_date' => 0,
    'info_description' => 0,
    'related_infos' => 0,
    'related_info' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b826beae7408_91333975')) {function content_51b826beae7408_91333975($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>
    
<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
</h1></div>
        
        <p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
        <div class="single_page">
        <table><tr>
        	<td class="img_section">
            <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
            <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['related_gall']->value){?>
            <ul class="related_gall">
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_gall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tile']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tile']['index']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tile']['index']==0){?>
            <li class="main_img">
            	<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
">
            		<img id="myImg" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
" /></a></li>
            <?php }?>
            <?php } ?>
            <li>
            <ul id="gall" class="related_gall">
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_gall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tile']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tile']['index']++;
?>
            	<li><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
"/></li>
            <?php } ?>
            </ul>
            </li>
            </ul>
            <?php }?>
            </td>
            <td>
            <ul class="info_body"><li>
            <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h5>
            <span class="date"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
</span>
            	</li>
                <li><?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
</li>
                <li>
            
            <?php if ($_smarty_tpl->tpl_vars['related_infos']->value){?>
            <div class="relations projects">
            	<ul>
                	<li class="title"><?php echo $_smarty_tpl->tpl_vars['language']->value['related_services'];?>
: </li>
                    <?php  $_smarty_tpl->tpl_vars['related_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['related_info']->key => $_smarty_tpl->tpl_vars['related_info']->value){
$_smarty_tpl->tpl_vars['related_info']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']++;
?>
                    
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['related_info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['related_info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['related_info']->value['title'];?>
</a><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['info']['index']==(count($_smarty_tpl->tpl_vars['related_infos']->value)-1)){?><?php }else{ ?>,<?php }?> </li>
                    <?php } ?>
                </ul>
            </div>
            <?php }?>
            	</li>
                <li>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            	</li>
            </ul>
            </td>
            </tr>
            </table>
            
            
		</div>
        
	</div>
</div>
    <?php }} ?>