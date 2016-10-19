<?php /* Smarty version Smarty-3.1.13, created on 2015-05-18 19:54:42
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27137555064e01f4f70-11796522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15275e7635cacf78cfbe92941b9b7396f9100453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\main_page.tpl',
      1 => 1431964270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27137555064e01f4f70-11796522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555064e073ed92_56594829',
  'variables' => 
  array (
    'news_block' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info' => 0,
    'next_event' => 0,
    'event' => 0,
    'banner2' => 0,
    'item' => 0,
    'banner1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555064e073ed92_56594829')) {function content_555064e073ed92_56594829($_smarty_tpl) {?><div class="center-wrap main second-font">
	<?php if ($_smarty_tpl->tpl_vars['news_block']->value){?>
    <div class="latest-news">
        <h1><?php echo $_smarty_tpl->tpl_vars['language']->value['latest_news'];?>
</h1>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['info']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['info']->index++;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['info']->index%2==0){?>first<?php }else{ ?>second<?php }?>">
                <div class="poster">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['thumbnail']){?>
                    <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                    <?php }else{ ?>
                    <img src="img/no_image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/>
                    <?php }?>
                    </a>
                </div>
                <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h2>

                <div class="desc"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div>
                <div class="more"><span class="date"><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</span> 
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
...</a>
				</div>
            </li>
			<?php } ?>
        </ul>
    </div>
    <?php }?>
    <div class="events">
        <h1><?php echo $_smarty_tpl->tpl_vars['language']->value['events'];?>
</h1>
        <ul class="event-list">
			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['next_event']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
            <li>
                <div class="date-wrap">
                    <div class="date">
                        <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['strip_month'];?>

                    </div>
                </div>
                <div class="description">
                    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></h2>

                    <div class="more"><span><?php echo $_smarty_tpl->tpl_vars['event']->value['date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['month'];?>
  <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['year'];?>
</span> <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['info_slug'];?>
"><i class="icon icon-more"></i></a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
        
        <div id="calendar" class="calendar">
        </div>
        <script type="text/javascript">
			$(document).ready(function(e) {
				$("#calendar").load('calendar.php?lang='+$('#contentLang').attr('title'));
			});
		</script>
    </div>
    <div class="clear"></div>
</div>
<div class="map-wrap">
    <div class="center-wrap">
        <div class="map second-font">
            <div class="name first-font">
                <div class="upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['map'];?>
</div>
            </div>
            <div class="flags">
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['item']->index%2==1){?> class="even"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="upper" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="cover" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
"/></a>
                        <?php if ($_smarty_tpl->tpl_vars['item']->index%2==1){?><div class="bullet"></div><?php }?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="map-image">
                <img src="img/map.png" alt=""/>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="center-wrap partners">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
"/></a>
    <?php } ?>
    
    <img class="last" src="img/EU.png" alt="">

    <div class="clear"></div>
</div>


                    
                    <?php }} ?>