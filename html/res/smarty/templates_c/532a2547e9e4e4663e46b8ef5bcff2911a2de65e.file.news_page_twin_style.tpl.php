<?php /* Smarty version Smarty-3.1.13, created on 2014-05-07 12:52:40
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\news_page_twin_style.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113075368dec5149ac1-47954799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532a2547e9e4e4663e46b8ef5bcff2911a2de65e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\news_page_twin_style.tpl',
      1 => 1399452738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113075368dec5149ac1-47954799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5368dec5609877_55032609',
  'variables' => 
  array (
    'top_info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news' => 0,
    'language' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'i' => 0,
    'j' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368dec5609877_55032609')) {function content_5368dec5609877_55032609($_smarty_tpl) {?>		<ul class="important_post">
        <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value){
$_smarty_tpl->tpl_vars["news"]->_loop = true;
?>
        	<li>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" width="276" height="187" class="thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }else{ ?>
                <img src="images/nothumb.png" width="276" height="187" class="thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }?>
				</a>
                <div class="exept">
                	<h1 class="title2 upper">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
					</h1>
                    <div class="cont"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
                    <div class="nav">
                    	<span class="date upper"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
" class="read_more upper">
                        	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
 >>
						</a>
					</div>
				</div>
			</li>
		<?php } ?>
		</ul>
                    
    	<div class="col_2 twin_style">
            <h2 class="col_title upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<ceil(count($_smarty_tpl->tpl_vars['info_content']->value)/2)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<ceil(count($_smarty_tpl->tpl_vars['info_content']->value)/2); $_smarty_tpl->tpl_vars['i']->value++){
?>
            <article>
                <h3 class="post_title upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</a></h3>
                
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['start_date'];?>
 / </span>
                <a class="read_more upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
            </article>
            <?php }} ?>
            <?php }?>
            
        </div>
        
        <div class="col_separator"></div>
        
        <div class="col_2 twin_style">
        	<br /><br />
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['info_content']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['info_content']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
            <article>
                <h3 class="post_title upper">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</a>
                </h3>                
                <a class="read_more upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['info_slug'];?>
">
                	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>

                </a>
            </article>
            <?php }} ?>
            <?php }?>            
        </div>
        
        <ul class="pagination">
        	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
           		<?php if ($_smarty_tpl->tpl_vars['page']->value=='<<'){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='>>'){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value['lastpage'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }elseif($_smarty_tpl->tpl_vars['pages']->value['current_page']==$_smarty_tpl->tpl_vars['page']->value){?>
			<li><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }else{ ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }?>
			<?php } ?>
		</ul>
        
    <?php }} ?>