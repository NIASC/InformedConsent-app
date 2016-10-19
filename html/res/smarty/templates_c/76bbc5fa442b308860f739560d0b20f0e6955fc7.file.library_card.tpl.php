<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 18:51:28
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\library_card.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469154856b636c8434-38546120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76bbc5fa442b308860f739560d0b20f0e6955fc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\library_card.tpl',
      1 => 1421160652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469154856b636c8434-38546120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54856b63856367_90791315',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'info' => 0,
    'site_url' => 0,
    'library_lang' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54856b63856367_90791315')) {function content_54856b63856367_90791315($_smarty_tpl) {?><h1 class="headline"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

<div class="text_center">
	<div class="page"><?php echo $_smarty_tpl->tpl_vars['language']->value['catalogue'];?>
</div>
    <div class="library catalog">
        <h2 class="upper title"><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</h2>
        <div class="author upper"><span><?php echo $_smarty_tpl->tpl_vars['language']->value['author'];?>
</span>: <h3><?php echo $_smarty_tpl->tpl_vars['info']->value->author;?>
</h3></div>
        <?php if ($_smarty_tpl->tpl_vars['info']->value->photo){?>
    	<div class="cover">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info']->value->photo;?>
" width="280" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
"/>
        	<a class="view_file" href="#"><i></i><?php echo $_smarty_tpl->tpl_vars['language']->value['view'];?>
</a>
        </div>
        <?php }?>
    	<table class="table">
            <tbody>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['number'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->number;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['year'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->year;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['edition'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->edition;?>
<div class="line"></div></td>
					<td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['place'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->place;?>
<div class="line"></div></td>
					<td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['publisher'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->publisher;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                <td>ISBN/ISSN</td>
                	<td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->code;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['location'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->location;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['pages'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->pages;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['count'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->book_count;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['additional'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['info']->value->additional;?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['library_lang']->value[$_smarty_tpl->tpl_vars['info']->value->book_lang];?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['category'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['info']->value->category];?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['language']->value['sub_category'];?>
</td>
                    <td class="last"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['info']->value->sub_category];?>
<div class="line"></div></td>
                    <td></td>
				</tr>
                	<tr class="last">
                    <td><?php echo $_smarty_tpl->tpl_vars['language']->value['anotation'];?>
</td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['info']->value->anotation;?>
</td>
				</tr>
                <tbody>
			</table>
		</div>

                    <script>
                        $(window).ready(function() {
                            $("div.library form div.select-wrap label").click(function () {
                                var $this=$(this);
                                open($(this).next());
                            });

                            function open(elem) {
                                if (document.createEvent) {
                                    var e = document.createEvent("MouseEvents");
                                    e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                                    elem[0].dispatchEvent(e);
                                } else if (element.fireEvent) {
                                    elem[0].fireEvent("onmousedown");
                                }
                            }
							$('.view_file').click(function(){
								return false;	
							});
							
                        });
                    </script>
		
        <hr class="bottom_rule"/>
        <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>

</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>