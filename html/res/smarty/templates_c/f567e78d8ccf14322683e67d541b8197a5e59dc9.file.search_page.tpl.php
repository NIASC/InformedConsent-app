<?php /* Smarty version Smarty-3.1.13, created on 2016-05-19 20:01:12
         compiled from "C:\xampp\htdocs\moe\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26803572b63846af4d2-96690038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f567e78d8ccf14322683e67d541b8197a5e59dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\search_page.tpl',
      1 => 1463673669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26803572b63846af4d2-96690038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_572b638479e190_85066412',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'site_url' => 0,
    'language' => 0,
    'years' => 0,
    'year' => 0,
    'active_year' => 0,
    'categories' => 0,
    'page' => 0,
    'current_category' => 0,
    'search_key' => 0,
    'info_content' => 0,
    'cat_news' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572b638479e190_85066412')) {function content_572b638479e190_85066412($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container">
		<h3><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
		<div class="col-md-9 page-content">
			<div class="input-group full-container">
				<form method="get" id="search-page-form" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
				<select class="form-control year" name="year">
					<option><?php echo $_smarty_tpl->tpl_vars['language']->value['year'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['active_year']->value==$_smarty_tpl->tpl_vars['year']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
					<?php } ?>
				</select>
				<select class="form-control" id="sel1" name="category">
					<option value="0"><?php echo $_smarty_tpl->tpl_vars['language']->value['all_pages'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['page']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</option>
					<?php } ?>
				</select>
				<!-- forma dzebnis -->
				<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['search_key']->value;?>
" name="que" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['advenced_search'];?>
" />
				<span class="input-group-btn">
					<a class="btn btn-default submit-form"><i class="fa fa-search" aria-hidden="true"></i></a>
				</span>
				</form>
			</div>
			
			<ul class="search-results">
				<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['cat_news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat_news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat_news']->key => $_smarty_tpl->tpl_vars['cat_news']->value){
$_smarty_tpl->tpl_vars['cat_news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cat_news']->key;
?>
				<li class="line"></li>
				<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
				<li>
					<div class="title upper">
						<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
						<br/><span class="category"><?php echo $_smarty_tpl->tpl_vars['cat_news']->value[0]['section_name'];?>
</span>
					</div>
					<div class="text"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
				</li>
				<?php } ?> 
				<?php } ?>          
				<?php }?>
			</ul>    
		</div>            
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </div>
</div>
<script type="text/javascript">

	$(document).ready(function(e) {
		$('.submit-form').click(function(){
			$('#search-page-form').submit();
		});
	});
	
</script><?php }} ?>