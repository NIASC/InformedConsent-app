<?php /* Smarty version Smarty-3.1.13, created on 2016-03-22 17:16:01
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1451956e67fbc874644-07161456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '203e452f82b2785bcf56bcab9784f6c73d8fae6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\list_page.tpl',
      1 => 1458652558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1451956e67fbc874644-07161456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56e67fbca48c52_30011921',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
    'language' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e67fbca48c52_30011921')) {function content_56e67fbca48c52_30011921($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>
<div id="content">
    <div class="center">
        <div class="top">
            <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        
        <div class="top">
            <div class="management">
                <ul>
                <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>                
                    <li class="line2"></li>
					<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
					<li><div class="container">  
                            <?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?> 
                            <img src="uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
"/>
                            <?php }else{ ?>
                            <?php }?>
                            <div class="management_text">
                                <p class="name"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</p>
                                <p><?php echo $_smarty_tpl->tpl_vars['info_item']->value['job'];?>
</p>
                                
                            </div>
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
                        <div class="more_info" data-more="<?php echo $_smarty_tpl->tpl_vars['language']->value['more_info'];?>
" data-less="<?php echo $_smarty_tpl->tpl_vars['language']->value['close'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['more_info'];?>
</div>
                        </a>
					</li>
                    <?php if ($_smarty_tpl->tpl_vars['index']->value%4==1){?>
                    <li class="line3"></li>
                    <?php }elseif($_smarty_tpl->tpl_vars['index']->value%4==3){?>
                    <li class="line2"></li>
                    <?php }?>
					<?php } ?>
				<?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>
/*	$(document).ready(function() {
		
        $('.management a').click(function(){
			$('.management > ul > li.active').removeClass('active');
			$(this).closest('li').toggleClass('active');
			var activeItem = $('.management > ul > li.active');
			$(activeItem).find('.container').animate({'height':$(activeItem).find('img').height()+$(activeItem).find('.management_text').height()}, 500);
			$(this).children('.more_info').html($(this).children('.more_info').data('less'));
			return false;
		}).blur(function(){
			$('.management > ul > li.active .container').animate({'height':'430'},500);
			$('.management > ul > li.active').removeClass('active');
			$(this).children('.more_info').html($(this).children('.more_info').data('more'));
		});
		
		
		
    });*/
</script>
<?php }} ?>