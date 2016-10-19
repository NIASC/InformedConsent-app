<?php /* Smarty version Smarty-3.1.13, created on 2016-09-26 16:38:59
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174457951357bb101b73a494-15157774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4f24b4a5dfce00a4374df6a9d0009860a8ae0f' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/app.tpl',
      1 => 1474893458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174457951357bb101b73a494-15157774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57bb101b787549_19345614',
  'variables' => 
  array (
    'site_data' => 0,
    'success' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57bb101b787549_19345614')) {function content_57bb101b787549_19345614($_smarty_tpl) {?><section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
  <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)){?>
  <form method="post" class="windraw">
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" class="form-control" type="text">
          <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>
        </div>
      </div>
    </div>
    <input type="submit" value="Remove" class="btn btn-link">
  </form>
  <?php }else{ ?>
  <div class="alert alert-success">
    You've successfully windrawed consent.
  </div>
  <button class="btn btn-link" onclick="goBack()">Back</button>
  <?php }?>
</div>

</section>
<?php }} ?>