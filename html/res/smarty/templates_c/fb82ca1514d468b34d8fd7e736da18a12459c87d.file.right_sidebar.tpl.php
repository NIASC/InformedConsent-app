<?php /* Smarty version Smarty-3.1.13, created on 2016-08-15 17:51:34
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047557b1c8e6e6c548-80171302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb82ca1514d468b34d8fd7e736da18a12459c87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\right_sidebar.tpl',
      1 => 1467124712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047557b1c8e6e6c548-80171302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post_by_year' => 0,
    'language' => 0,
    'option' => 0,
    'right_menu' => 0,
    'banner2' => 0,
    'banner' => 0,
    'banner3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b1c8e7023716_83242771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b1c8e7023716_83242771')) {function content_57b1c8e7023716_83242771($_smarty_tpl) {?><div class="col-md-3 shop-sidebar">
	<?php if ($_smarty_tpl->tpl_vars['post_by_year']->value){?>
	<form method="get">
	<select class="sidebar-select" name="year">
		<option><?php echo $_smarty_tpl->tpl_vars['language']->value['year'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post_by_year']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['year'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['year'];?>
 (<?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
)</option>
		<?php } ?>
	</select>
	</form>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['right_menu']->value;?>

    <div class="sidebar-widgets">
	
		<div class="widget-item">
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
			<?php } ?>
		</div>

		<div class="widget-item">
        	<div class="calendar" id="calendar"></div>							
		</div>
		
		<div class="widget-item">
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
			<?php } ?>								
		</div>
		
	</div>
</div>
<script type="application/javascript" src="scripts/js/cal.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(e) {
        var contentLANG = jQuery('#language a.active').attr('title');
		var langURL = 'calendar.php?lang='+contentLANG;
		jQuery("#calendar").load(langURL, SetCalendarDayClick);
		jQuery('#calendar .row > a').click(function(){
		return false;
	});

    function SetCalendarDayClick(){
        jQuery("#calendar li.active").live('click', function(){
			
            var $this=jQuery(this);
            if(jQuery(this).is(".clicked")){
                return false;
            }
            jQuery("#calendar li.active.clicked").removeClass("clicked");
            $this.addClass("clicked");
            if(jQuery("ul.day-content").children().length>0){
                jQuery("ul.day-content").children().fadeOut(function(){
                    jQuery("ul.day-content li").remove();
                    jQuery("ul.day-content").append($this.find("li").clone().css("display","none"));
                    jQuery("ul.day-content li").fadeIn(400);
                });
            }
            else {
				
                jQuery("ul.day-content").append($this.find("li").clone().css("display","block"));
                jQuery("ul.day-content li").fadeIn(400);
            }
        });
    }
	
	jQuery('.popular-product li.active').parents('li').addClass('active');
	jQuery('.popular-product ul.drop-down').removeClass('drop-down');
	jQuery('.popular-product li.active > .drop-down-arrow .fa-angle-down').removeClass('fa-angle-down');
	jQuery('.popular-product .drop-down-arrow').click(function(){
		
		jQuery(this).children().toggleClass('fa-angle-down');
		jQuery(this).parent().toggleClass('active');
	});
	
	jQuery('.sidebar-select').change(function(){
		jQuery(this).parent().submit();
	});
	
	jQuery('html, body').animate({ scrollTop: jQuery('#content').offset().top-145 }, 1000);
    });
</script>
<?php }} ?>