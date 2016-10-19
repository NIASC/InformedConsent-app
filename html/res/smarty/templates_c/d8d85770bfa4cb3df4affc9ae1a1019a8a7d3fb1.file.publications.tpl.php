<?php /* Smarty version Smarty-3.1.13, created on 2015-04-21 17:31:00
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\publications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23921552e5d32512dc0-71627926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d85770bfa4cb3df4affc9ae1a1019a8a7d3fb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\publications.tpl',
      1 => 1429621161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23921552e5d32512dc0-71627926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_552e5d32658624_87291965',
  'variables' => 
  array (
    'site_data' => 0,
    'years' => 0,
    'year' => 0,
    'language' => 0,
    'key' => 0,
    'month' => 0,
    'info_content' => 0,
    'index' => 0,
    'news' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e5d32658624_87291965')) {function content_552e5d32658624_87291965($_smarty_tpl) {?><div class="container publications">
    <!-- LEFT -->
    <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left">
        <ul class="publication-selectors">
            <li>
                <select id="year" class="filter">
                <option disabled selected>Choose Year</option>
                <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['year']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['year']->value->year;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value->year;?>
</option>
                <?php } ?>
                </select>
            </li>
            <li class="even">
                <select id="month" class="filter lower">
                    <option disabled selected>Choose Month</option>
                    <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language']->value['month_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                    <?php } ?>
                </select>
            </li>
        </ul>
        <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        <ul class="publications" id="list">
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['index']->value%2==1){?>even<?php }?>">
            	<div class="poster">
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <a href="<?php if ($_smarty_tpl->tpl_vars['news']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/files/<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
<?php }?>" target="_blank">
                <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                </a>
				<?php }?>
                </div>
                <h3><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3>

                <div class="desc"><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</div>
            </li>
			<?php } ?>
        </ul>
        <?php }?>
    </div>

    <!-- END LEFT -->

    <!-- RIGHT-->    
    
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

    <!-- END RIGHT -->

    <div class="clear"></div>
</div>

<script type="text/javascript">

function is_equal(returnVal, first, second) {
	
	if(first == second) return returnVal[0];
	else return returnVal[1];
}

$(document).ready(function() {
    $('body,html').animate({
				scrollTop: $('.container.publications').offset().top-100
			}, 800);
			
	$('.filter').change(function(){
		$.post( "ajax/get_posts.php", 
				{ year: $('#year').val(), 
				month: $('#month').val(),
				type: <?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_type'];?>
, 
				language: $('#lang_wrapper a.active').attr('title') 
			})
		  .done(function( data ) {
			  obj = JSON.parse(data);
			  $('#list').html('');
			  if(obj != null)
			  $.each(obj, function (i, val) {
				   $('#list').append('<li class="'+is_equal(Array('even','odd'), i%2, 1)+'"><div class="poster"><a href="images/files/'+val.file+'" target="_blank"><img src="images/thumb/'+val.thumbnail+'" alt="'+val.title+'"/></a></div><h3>'+val.title+'</h3></li>');
				});
		  });
	});
			
});
</script> 
            
            
        
    <?php }} ?>