<?php /* Smarty version Smarty-3.1.13, created on 2015-04-21 18:40:05
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30444550c386f3dd098-83753556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '604d8cdc2afc2bcd458b5d8f9de490c5afe69a07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\right_sidebar.tpl',
      1 => 1429627193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30444550c386f3dd098-83753556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c386f450949_27359485',
  'variables' => 
  array (
    'language' => 0,
    'recent_posts' => 0,
    'index' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'post' => 0,
    'right_banners' => 0,
    'banner' => 0,
    'year_group' => 0,
    'year' => 0,
    'month' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c386f450949_27359485')) {function content_550c386f450949_27359485($_smarty_tpl) {?><div class="right">

        <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['recent_posts'];?>
</h2>
        <ul class="resent-posts">
        	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['post']->key;
?>            
            <li <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>class="first"<?php }elseif($_smarty_tpl->tpl_vars['index']->value+1==count($_smarty_tpl->tpl_vars['recent_posts']->value)){?>class="last"<?php }?>>
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>
                <div class="date second-font upper"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</div>
            </li>
            <?php } ?>
        </ul>

        <ul class="about-banners">        	
            <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
            <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <li class="journal animate"><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
"/>
                <div class="name"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
</div>
            </a></li>
            <?php } ?>
            <?php }?>
        </ul>

        <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['archive'];?>
</h2>
        
        <div class="archive" id="accordian">
            <ul><?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['year_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['year']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['index']->value+1==count($_smarty_tpl->tpl_vars['year_group']->value)){?>class="last"<?php }?>>
                    <h3><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</h3>
                    <ul>
                    	<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language']->value['month_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
                        <li><a href="#<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <!-- we will keep this LI open by default -->
            </ul>
        </div>
    </div>
    
    
    
<script src="js/prefixfree-1.0.7.js" type="text/javascript"></script>

<!-- jQuery -->
<script type="text/javascript">
/*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
</script><?php }} ?>