<?php /* Smarty version Smarty-3.1.13, created on 2013-12-10 16:56:31
         compiled from "C:\xampp\htdocs\aig\smarty\templates\members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3154252a58b05047c54-29490259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aed852eee09830d84c97572a1f496c15d645369' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\members.tpl',
      1 => 1386680189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3154252a58b05047c54-29490259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a58b053a0868_70501640',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'alphabet' => 0,
    'current_symbol' => 0,
    'char' => 0,
    'current_sort' => 0,
    'site_url' => 0,
    'members' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a58b053a0868_70501640')) {function content_52a58b053a0868_70501640($_smarty_tpl) {?>		
        <div class="content_wrapper contact">
			<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            
            <div class="alphabetical_search <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            	<span><?php echo $_smarty_tpl->tpl_vars['language']->value['search_alphabtically'];?>
:</span>
                <ul><?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alphabet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value){
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
                	<?php if ($_smarty_tpl->tpl_vars['current_symbol']->value==$_smarty_tpl->tpl_vars['char']->value){?>
                	<li class="active">
                    <?php }else{ ?>
                    <li>
                    <?php }?>
                    	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value){?>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=<?php echo $_smarty_tpl->tpl_vars['current_sort']->value;?>
&alpha=<?php echo $_smarty_tpl->tpl_vars['char']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['char']->value;?>
</a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?alpha=<?php echo $_smarty_tpl->tpl_vars['char']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['char']->value;?>
</a>
                        <?php }?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="sort_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            	<span><?php echo $_smarty_tpl->tpl_vars['language']->value['sort_by'];?>
:</span>
                <ul>
                <?php if ($_smarty_tpl->tpl_vars['current_symbol']->value){?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>                
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                    	<?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>

                    </a>
                </li>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname&alpha=<?php echo $_smarty_tpl->tpl_vars['current_symbol']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>

                    </a>
                </li>
                <?php }else{ ?>
                	<?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='name'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=name"><?php echo $_smarty_tpl->tpl_vars['language']->value['firstname'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['current_sort']->value=='lastname'){?>
                <li class="active">
                    <?php }else{ ?>
                <li>
                    <?php }?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?sort=lastname"><?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>
</a>
                </li>
                <?php }?>
                </ul>
            </div>
            <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
            <article class="member">
            	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
#<?php echo $_smarty_tpl->tpl_vars['member']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['member']->value->lastname;?>
</a></h1>
            </article>
            <?php } ?>
                
		</div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>