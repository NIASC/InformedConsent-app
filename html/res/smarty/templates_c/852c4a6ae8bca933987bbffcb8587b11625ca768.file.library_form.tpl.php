<?php /* Smarty version Smarty-3.1.13, created on 2014-12-20 11:50:16
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\library_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22966547c58d7481530-09192032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852c4a6ae8bca933987bbffcb8587b11625ca768' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\library_form.tpl',
      1 => 1419061798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22966547c58d7481530-09192032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547c58d76d9b24_52917993',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'library_lang' => 0,
    'key' => 0,
    'value' => 0,
    'category_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c58d76d9b24_52917993')) {function content_547c58d76d9b24_52917993($_smarty_tpl) {?><h1 class="headline"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

<div class="text_center">
                    <div class="library_search_top">
                        <span class="second"><?php echo $_smarty_tpl->tpl_vars['language']->value['advenced_search'];?>
</span>
                    </div>
                    <div class="library">
                        <form class="library" method="get">
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</label>
                            <input type="text" name="title"/>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['author'];?>
</label>
                            <input type="text" name="author"/>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['anotation'];?>
</label>
                            <input type="text" name="anothation"/>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['year'];?>
</label>

                            <div class="year">
                                <div>
                                    <input type="text" name="yearfrom"/> <label>-<?php echo $_smarty_tpl->tpl_vars['language']->value['from'];?>
</label>
                                </div>
                                <div>
                                    <input type="text" name="yearto"/> <label>-<?php echo $_smarty_tpl->tpl_vars['language']->value['to'];?>
</label>
                                </div>
                            </div>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['publisher'];?>
</label>
                            <input type="text" name="publisher"/>
                            <label>ISBN / ISSN</label>
                            <input type="text" name="code"/>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
</label>

                            <div class="select-wrap">
                                <label for="select1"></label>
                                <select id="select1" name="language">
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['library_lang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                <?php } ?>
                                </select>
                            </div>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['category'];?>
</label>

                            <div class="select-wrap">
                                <label for="select2"></label>
                                <select id="select2" name="category">
                                    <option value="0"></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['sub_category'];?>
</label>

                            <div class="select-wrap last">
                                <label for="select3"></label>
                                <select id="select3" name="subcategory">
                                    <option></option>
                                </select>
                            </div>

                            <input type="submit" name="list" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
                            <input type="button" onclick="return false;" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['clear'];?>
"/>
                        </form>
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
							
							
							$('#select2').change(function(){
								
					  
								  var category = this.value;
								  
								$.post("ajax/get_categories.php",
								{
								  category: category,
								  key: 'asdsa'
								},
								function(data, status){
								  var subCategory = jQuery.parseJSON(data);
								  $('#select3').html('');
								  $.each(subCategory, function(row, val){
									 $('#select3').append( new Option(val['text'], val['value']) ) 
									  });
								});
							
						  	});
						  
                        });
                    </script>
                    <hr class="bottom_rule"/>
                    <a onclick="window.history.back()" class="back">← უკან</a>

                </div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>