<?php /* Smarty version Smarty-3.1.13, created on 2016-03-07 18:37:16
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\category_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013756dd921c6a42f3-11918384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2eb3063594c0203452c61c2f606787102b4274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\category_list.tpl',
      1 => 1452864447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013756dd921c6a42f3-11918384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'index' => 0,
    'info_item' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56dd921cc01c69_21252776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dd921cc01c69_21252776')) {function content_56dd921cc01c69_21252776($_smarty_tpl) {?><main role="main">
		<div class="services-page-cover">
			<img src="img/services-cover.png"/>
    </div>
    <div class="services-wrapper">
			<h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
			<ul class="services-list">
				<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
					<li <?php if (count($_smarty_tpl->tpl_vars['info_content']->value)==$_smarty_tpl->tpl_vars['index']->value+1){?>class="last"<?php }elseif($_smarty_tpl->tpl_vars['index']->value==0){?>class="first"<?php }?>>
							<div class="wrap">
									<?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
									<div class="image left">
											<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
											<img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
" class="transparent"/>
											</a>
									</div>
									<?php }?>
									<div class="text-wrap">
											<div class="title">
													<h2><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h2>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['info_item']->value['job']){?>
											<div class="position">
												<?php echo $_smarty_tpl->tpl_vars['info_item']->value['job'];?>

											</div>
											<?php }?>
											<div class="desc">
												<?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

											</div>
											<div class="details">
												<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">More...</a>
											</div>
									</div>
							</div>
					</li>
					<?php } ?>
					<?php }else{ ?>
					<p>
					<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

					</p>
					<?php }?>
			</ul>
    </div>
		<div class="cl-b"></div>
</main>
<?php }} ?>