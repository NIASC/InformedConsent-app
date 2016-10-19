<?php /* Smarty version Smarty-3.1.13, created on 2016-01-08 17:18:09
         compiled from "C:\xampp\htdocs\event42\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184495667f4790d06f6-86721421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63d54f76cec6fcc7b0c258b74c6e37ad391476e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\main_page.tpl',
      1 => 1450872215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184495667f4790d06f6-86721421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5667f4796baec2_66217862',
  'variables' => 
  array (
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667f4796baec2_66217862')) {function content_5667f4796baec2_66217862($_smarty_tpl) {?><main role="main" id="main">
    <div class="images-container" id="images-container">
      <div class="col">
        <div class="image-1" style="padding-top: 20%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[1]->title;?>
"/>
          </a>
        </div>
        <div class="image-2" style="padding-top: 3%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[2]->title;?>
"/>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="image-3" style="padding-top: 10%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[3]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[3]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[3]->title;?>
"/>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="image-4" style="padding: 0 10% 0 10%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[4]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[4]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[4]->title;?>
"/>
          </a>
        </div>
        <div class="image-5" style="padding-top: 5%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[5]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[5]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[5]->title;?>
"/>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="image-6" style="padding-top: 40%">
          <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[6]->url;?>
">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value[6]->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value[6]->title;?>
"/>
          </a>
        </div>
      </div>
    </div>
</main>

<script type="text/javascript">
	$(document).ready(function(e) {
		var Height = $(document).height();
        $('#images-container').width(Height*0.4 * 9/4);
		$('#lamp').css({'bottom': Height/8, 'height':Height/2, 'width' : Height/2 * 5/4});
    });
</script>

<?php }} ?>