<?php /* Smarty version Smarty-3.1.13, created on 2013-10-16 13:26:52
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15982982315254fa9932d176-79365578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c0010dd4222a6872b323ead9c84a8e0dff6db65' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/news_page.tpl',
      1 => 1381915601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15982982315254fa9932d176-79365578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5254fa99467961_29516383',
  'variables' => 
  array (
    'navigator' => 0,
    'navigator_info' => 0,
    'site_data' => 0,
    'site_url' => 0,
    'nav_item' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'news' => 0,
    'language' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254fa99467961_29516383')) {function content_5254fa99467961_29516383($_smarty_tpl) {?><div class="center_container">
        
        <?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['navigator_info']->value)){?>
        <div class="crumb <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<ul>
        	<?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['nav_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_item']->key => $_smarty_tpl->tpl_vars['nav_item']->value){
$_smarty_tpl->tpl_vars['nav_item']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->language;?>
/<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['nav_item']->value->name;?>
</a></li>
                <?php } ?>
            <?php }elseif($_smarty_tpl->tpl_vars['navigator_info']->value){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['navigator']->value->language;?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
</a></li>
            <?php }?>
        	</ul>
        </div>
        <?php }?>
     
		<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
        <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value){
$_smarty_tpl->tpl_vars["news"]->_loop = true;
?>
        <article class="news_item">
        	
            <div class="thumbnail">
            	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['news']->value['start_date']['year'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
            	<img src="images/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }else{ ?>
                <img src="img/no_image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }?>
            </div>
            
            <h2 class="title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h2>
            
            <?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

                
			<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
           		<?php echo $_smarty_tpl->tpl_vars['language']->value['continue_reading'];?>
...
            </a>
		</article><hr />
        <?php } ?>
        <?php }?>
        
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
</div>
    <?php }} ?>