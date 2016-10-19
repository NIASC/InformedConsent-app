<?php /* Smarty version Smarty-3.1.13, created on 2015-10-08 20:49:30
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3080556169d8983cb49-62409631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1e16ee365bd206ccae87ee1ba45d3172736660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\profile.tpl',
      1 => 1444322967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3080556169d8983cb49-62409631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56169d89af33b2_25156182',
  'variables' => 
  array (
    'notification' => 0,
    'item' => 0,
    'reg_expire' => 0,
    'PROFILE' => 0,
    'error' => 0,
    'warning' => 0,
    'post' => 0,
    'user' => 0,
    'site_url' => 0,
    'slots' => 0,
    'slot' => 0,
    'companies' => 0,
    'company' => 0,
    'rejected' => 0,
    'matrix' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56169d89af33b2_25156182')) {function content_56169d89af33b2_25156182($_smarty_tpl) {?><div class="main-wrap speakers">
    <div class="profile">
        <h1>Profile</h1>
        <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notification']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <p class="notification success"><i></i><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
        <?php } ?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['reg_expire']->value){?>
        <p class="notification success">Registration Process is completed!</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PROFILE']->value['rejected']=='Y'){?>
        <p class="notification danger" style="color:#EC0202;text-align:center;">Limited access to forum events. B2B only (October 16, 13:30 Parliament building).</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
        <ul class="notification danger">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
        <?php } ?>
        </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['notification']->value||$_smarty_tpl->tpl_vars['error']->value||$_smarty_tpl->tpl_vars['warning']->value){?>
        <script type="text/javascript">
        $(document).ready(function(e) {
            $('body,html').animate({
                        scrollTop: $('.profile > h1').offset().top-400
               }, 800);
                    
        });
        </script> 			 
        <?php }?>
        <div class="profile-wrap">
        	<form class="register-form" action="" method="post">
            <div class="profile-info-wrap">
                <div class="left">
                    <img src="img/logo2.png" alt=""/>
                </div>
                <div class="right">
                
                    <div class="left">
                        <div><span>Name:</span> <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['lastname'];?>
</div>
                        <div><span>Position:</span> <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['position'];?>
</div>
                        <div><span>Contact Tel*:</span> <input type="text" class="input-medium require number" name="tel" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['tel']){?><?php echo $_smarty_tpl->tpl_vars['post']->value['tel'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['tel'];?>
<?php }?>"/></div>
                    </div>
                    <div class="right">
                        <div><span>Name of organization:</span>  <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['organisation'];?>
</div>
                        <div><span>Country:</span>  <?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['PROFILE']->value['rejected']=='N'){?>
                        <div><span>Prime interests:</span>  <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['interests_txt'];?>
</div>
                        <?php }?>
                    </div>
                    <div class="full">
                    	<span>Company Profile*:</span> 
                        <textarea name="profile" class="input-large"><?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['profile'];?>
</textarea>
					</div>
                </div>
                <div class="clear"></div>
            </div>
              
            <div class="register table-wrap">
                <div class="agenda print second-font right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
pdf?id=<?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['id'];?>
&var=<?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['check_code'];?>
" target="_blank"><i class="icons print-icon"></i>
					<span><span>Print your schedule</span></span></a>
				</div>
                    <table class="table">
                        <tr class="upper">
                          <th>Company Name</th>
                          <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                          <th><?php echo $_smarty_tpl->tpl_vars['slot']->value->name;?>
</th>
                          <?php } ?>
                      </tr>
                      <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
                      <tr>
                          <td class="first"><?php echo $_smarty_tpl->tpl_vars['company']->value->name;?>
</td>
                          <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                          	<?php if ($_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]){?>
                            	<?php if ($_smarty_tpl->tpl_vars['slot']->value->id==1){?>
                          <td <?php if ($_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]){?>class="full_td" colspan="<?php echo $_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]['colspan'];?>
"<?php }?>>
                          	<?php echo $_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]['fulltxt'];?>

                          </td>
                          		<?php }?>
                          <?php }else{ ?>                          
                          <td <?php if ($_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]){?>colspan="<?php echo $_smarty_tpl->tpl_vars['rejected']->value[$_smarty_tpl->tpl_vars['company']->value->id]['colspan'];?>
"<?php }?>>
                          	<i class="icons <?php echo $_smarty_tpl->tpl_vars['matrix']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]['icon'];?>
">
                            	<?php if ($_smarty_tpl->tpl_vars['matrix']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]['txt']){?><?php echo $_smarty_tpl->tpl_vars['matrix']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]['txt'];?>
<?php }?>
                            </i>
                            <div class="checkbox-hide"><input type="checkbox" name="slot[<?php echo $_smarty_tpl->tpl_vars['slot']->value->id;?>
]" <?php if ($_smarty_tpl->tpl_vars['matrix']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]['status']=='Y'||$_smarty_tpl->tpl_vars['matrix']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]['status']=='N'){?> checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
" />
                            </div>
                          </td>
                          	<?php }?>
                          <?php } ?>
                      </tr>
                      <?php } ?>
                    </table>
                    
                    <div class="button-wrap">
					<div class="clear"></div><br /><br />
                    <input type="submit" name="action" value="Save">
				</div>
            </div>
        	<span style="color:#c00">*For any technical problems, during registration or profile management, please contact our support team <a href="mailto:support@tbilisisilkroad.ge">support@tbilisisilkroad.ge</a></span>
        </div>
        </form>
    </div>
    <div class="clear"></div>
</div>


<script src="js/register.js"></script><?php }} ?>