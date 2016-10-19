<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 17:47:06
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\library_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4629547c692b30d8a8-33775322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5e8d7f64cf7e1d7561b5eff834cbf41992a651' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\library_list.tpl',
      1 => 1421156808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4629547c692b30d8a8-33775322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547c692b472c50_82230337',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'numb' => 0,
    'books' => 0,
    'site_url' => 0,
    'item' => 0,
    'pages' => 0,
    'page' => 0,
    'search_params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c692b472c50_82230337')) {function content_547c692b472c50_82230337($_smarty_tpl) {?><h1 class="headline"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

<div class="text_center">
	<div class="page"><?php echo $_smarty_tpl->tpl_vars['language']->value['catalogue'];?>
</div>
	<div class="library catalog"><p class="result_info">ნაპოვნია <span><?php echo $_smarty_tpl->tpl_vars['numb']->value;?>
</span> ჩანაწერი</p>
		<table class="table2">
			<tr>
				<th><div><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</div></th>
                <th><div><?php echo $_smarty_tpl->tpl_vars['language']->value['author'];?>
</div></th>
                <th class="right-border"><div><?php echo $_smarty_tpl->tpl_vars['language']->value['publisher'];?>
</div></th>
                <th class="before-last" width="110"><div><?php echo $_smarty_tpl->tpl_vars['language']->value['year'];?>
</div></th>
                <th class="last"><div><?php echo $_smarty_tpl->tpl_vars['language']->value['count'];?>
</div></th>
			</tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
            	<td colspan="3" class="first"><div class="border"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
 -</span></a> <?php echo $_smarty_tpl->tpl_vars['item']->value->author;?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value->publisher;?>
</div></td>
                <td><div class="border"><?php echo $_smarty_tpl->tpl_vars['item']->value->year;?>
</td>
                <td class="last"><div class="border"><?php echo $_smarty_tpl->tpl_vars['item']->value->book_count;?>
</div></td>
			</tr>
			<?php } ?>
		</table>
	</div>
    
    <div class="paging">
    	<ul class="pagination">
        	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            	<?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
            <li><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['search_params']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            	<?php }else{ ?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['search_params']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            	<?php }?>
            <?php } ?>
		</ul>
	</div>
    
    <hr class="bottom_rule"/>
    <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>

</div> 
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>