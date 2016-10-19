<?php /* Smarty version Smarty-3.1.13, created on 2016-03-14 18:34:58
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618056e688ceed6a70-27970740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a827025c9c662a6bc35b9a31dd57326eb82ba0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\gallery_list.tpl',
      1 => 1457966091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618056e688ceed6a70-27970740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56e688cf156580_04608479',
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e688cf156580_04608479')) {function content_56e688cf156580_04608479($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>

<div id="content">
    <div class="center">
    	<div class="gallery"><h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1></div>
        <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->iteration++;
?>
            <?php if ($_smarty_tpl->tpl_vars['g']->iteration%4==1){?>
        <div class="albums">         
            <ul>
            <?php }?>
            <li>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
                <img src="uploads/files/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
"/>
                <div class="innovation"><span><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</span></div></a>
                <div class="date"><date><?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</date></div>                    
			</li>
            <?php if ($_smarty_tpl->tpl_vars['g']->iteration%4==0||$_smarty_tpl->tpl_vars['g']->iteration==count($_smarty_tpl->tpl_vars['group']->value)){?>           
            </ul>
         </div>
            <?php }?>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
            <ul class="pagination">
                <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
                <li><a class="shadow active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <?php }else{ ?>
                <li><a class="shadow" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <?php }?>
                <?php } ?>
            </ul>
		<?php }?>
    </div>
</div>
<?php }} ?>