<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 18:46:05
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9936628965254f933962b67-12206381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca21664d0be69bd69f0b36bdc40b72810dee5ab' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/main_page.tpl',
      1 => 1382107544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9936628965254f933962b67-12206381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5254f933a99a33_48050709',
  'variables' => 
  array (
    'slider_block' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info' => 0,
    'language' => 0,
    'middle_news_block' => 0,
    'bottom_news_block' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254f933a99a33_48050709')) {function content_5254f933a99a33_48050709($_smarty_tpl) {?>    
    <div class="center_container">
    	<?php if ($_smarty_tpl->tpl_vars['slider_block']->value){?>
        <ul class="large_post">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        	<li>
            	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h1>
            	<img src="images/small_<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                <div class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
            </li>
        <?php } ?>
        </ul>
        <hr />
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['middle_news_block']->value){?>
        <ul class="small_post">
        <?php  $_smarty_tpl->tpl_vars["info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["info"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['middle_news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["post_name"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["info"]->key => $_smarty_tpl->tpl_vars["info"]->value){
$_smarty_tpl->tpl_vars["info"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["post_name"]['index']++;
?>
        	<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['post_name']['index'] / 1)){?>
        	<li class="even">
            <?php }else{ ?>
            <li>
            <?php }?>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['info']->value['thumbnail']){?>
            	<img src="images/small_thumb_<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                <?php }else{ ?>
                <img src="img/small_thumb_no_image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                <?php }?>
                </a>
                <div class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div>
                
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['info']->value['start_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['start_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['start_date']['year'];?>
</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
            </li>
        <?php } ?>
        </ul>
        <hr />
        <?php }?>        
        
        <?php if ($_smarty_tpl->tpl_vars['bottom_news_block']->value){?>
        <ul class="large_post2">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bottom_news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        	<li>
            	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h1>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['video']){?>                
                <div id="video_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="thumbnail">Loading the player...</div>
				<script type="text/javascript">
                    jwplayer("video_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
").setup({
                        file: "images/<?php echo $_smarty_tpl->tpl_vars['info']->value['video'];?>
",		
                        image: "images/small_<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
",
						width: "300px",
						height: "200px",
                        'autostart': 'false'
                    });
                </script>
                <?php }elseif($_smarty_tpl->tpl_vars['info']->value['url']){?>
                <div class="thumbnail">
                <h2 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['in_focus'];?>
</h2>
                <iframe src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
?wmode=transparent" frameborder="0" wmode="Opaque" allowfullscreen class="thumbnail"></iframe>
                </div>
                <?php }else{ ?>
                <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" class="thumbnail"/>
                <?php }?>
                
                <span class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
            </li>
        <?php } ?>
        </ul>
        <hr />
        <?php }?>
    
        
        
    </div>
    <?php }} ?>