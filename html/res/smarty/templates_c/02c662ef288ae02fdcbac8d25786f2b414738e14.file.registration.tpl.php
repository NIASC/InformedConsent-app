<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 11:55:40
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113093576755c0a06e9065b7-07426467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c662ef288ae02fdcbac8d25786f2b414738e14' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/registration.tpl',
      1 => 1444031006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113093576755c0a06e9065b7-07426467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55c0a06ea370f3_52653408',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'item' => 0,
    'error' => 0,
    'warning' => 0,
    'reg_expire' => 0,
    'post' => 0,
    'country_list' => 0,
    'index' => 0,
    'country' => 0,
    'how_hear_options' => 0,
    'key' => 0,
    'option' => 0,
    'slots' => 0,
    'slot' => 0,
    'companies' => 0,
    'company' => 0,
    'user_per_slot' => 0,
    'allowed_u2s' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0a06ea370f3_52653408')) {function content_55c0a06ea370f3_52653408($_smarty_tpl) {?><div class="main-wrap speakers">
	
    <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
  
  <div class="register">
  	<?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notification']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <p class="notification success"><i></i><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
    <?php } ?>
    
    
    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <script type="text/javascript">
	$(document).ready(function(e) {
		$('body,html').animate({
					scrollTop: $('.register').offset().top-100
				}, 800);
				
	});
	</script> 			 
    <?php }?>
    
    <?php }else{ ?>
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
    
    <?php if ($_smarty_tpl->tpl_vars['warning']->value){?>
    <ul class="notification warning">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warning']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
    <?php } ?>
    </ul>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['reg_expire']->value){?>
    <form class="register-form" method="post" autocomplete="off">
      <ul class="sections">
          <li class="general">
              <div class="input-wrap">
                  <div class="left">
                      <label>Title</label>
                  </div>
                  <div class="right">
                      <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>First Name*</label>
                  </div>
                  <div class="right">
                      <input type="text" class="required" autocomplete="off" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['firstname'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Last Name*</label>
                  </div>
                  <div class="right">
                      <input type="text" class="required" autocomplete="off" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['lastname'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Email*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="email" autocomplete="off" class="email" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Password*</label>
                  </div>
                  <div class="right">
                      <input type="password" name="password"  class="password required" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['password'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Repeat Password*</label>
                  </div>
                  <div class="right">
                      <input type="password" name="repeat" class="password required" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['repeat'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Position*</label>
                  </div>
                  <div class="right">
                      <input type="text" class="required" name="position" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['position'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Name of the Organization*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="organization" class="required" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['organisation'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>Country*</label>
                  </div>
                  <div class="right">
                      <div class="select">
                          <i class="icons select-icon"></i>
                          <select name="country" class="">
                          	<option></option>
                          	<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['country_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['post']->value['country']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</option>
                            <?php } ?>
                          </select>
                      </div>
                      <span class="warning">Travel Visa required, please contact Georgian Embassy in your country</span>
                  </div>
              </div>
              
              <div class="input-wrap left">
                  <div class="left">
                      <label>Please select a panel/panels you would like to attend</label>
                  </div>
                  <div class="right">
                      <ul class="primary-interest">
                          <li>
                              <i class="icons little-circle-icon">
                                  <i class="icons little-checkbox-icon" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][1]=='Y'){?>style="display: block;"<?php }?>></i>
                                  <div class="checkhide">
                                      <input type="checkbox" name="panel[1]" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][1]=='Y'){?>checked="checked"<?php }?> value="Y"/>
                                  </div>
                              </i>
                              <span>Revival of the Silk Road</span>
                          </li>
                          <li>
                              <i class="icons little-circle-icon">
                                  <i class="icons little-checkbox-icon" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][2]=='Y'){?>style="display: block;"<?php }?>></i>
                                  <div class="checkhide">
                                      <input type="checkbox" name="panel[2]" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][2]=='Y'){?>checked="checked"<?php }?> value="Y"/>
                                  </div>
                              </i>
                              <span>Transport, Communications and Infrastructure</span>
                          </li>
                          <li>
                              <i class="icons little-circle-icon">
                                  <i class="icons little-checkbox-icon" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][3]=='Y'){?>style="display: block;"<?php }?>></i>
                                  <div class="checkhide">
                                      <input type="checkbox" name="panel[3]" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][3]=='Y'){?>checked="checked"<?php }?> value="Y"/>
                                  </div>
                              </i>
                              <span>Trade Facilitation along the Silk Road</span>
                          </li>
                          <li>
                              <i class="icons little-circle-icon">
                                  <i class="icons little-checkbox-icon" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][4]=='Y'){?>style="display: block;"<?php }?>></i>
                                  <div class="checkhide">
                                      <input type="checkbox" name="panel[4]" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][4]=='Y'){?>checked="checked"<?php }?> value="Y"/>
                                  </div>
                              </i>
                              <span>The Energy Silk Road</span>
                          </li>
                          <li>
                              <i class="icons little-circle-icon">
                                  <i class="icons little-checkbox-icon" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][5]=='Y'){?>style="display: block;"<?php }?>></i>
                                  <div class="checkhide">
                                      <input type="checkbox" name="panel[5]" <?php if ($_smarty_tpl->tpl_vars['post']->value['panel'][5]=='Y'){?>checked="checked"<?php }?> value="Y"/>
                                  </div>
                              </i>
                              <span>Seizing investment Opportunities in Georgia</span>
                          </li>
                      </ul>
                      <div class="clear"></div>
                  </div>
              </div>
              <div class="input-wrap">
                  <div class="left">
                      <label>How did you learn about the Forum</label>
                  </div>
                  <div class="right">
                      <div class="select">
                          <i class="icons select-icon"></i>
                          <select name="from">
                              <option></option>
                              <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['how_hear_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['how_hear']==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                              <?php } ?>
                          </select>
                      </div>
                  </div>
              </div>              
              
              <div class="input-wrap">
                  <div class="left">
                      <label>Additional Comment</label>
                  </div>
                  <div class="right">
                      <textarea name="comment" class="input-xlarge"><?php if ($_smarty_tpl->tpl_vars['post']->value['comment']){?><?php echo $_smarty_tpl->tpl_vars['post']->value['comment'];?>
<?php }?></textarea>
                  </div>
              </div>
              <!---------------	b2b ---------------->
              <div class="b2b">              
                  <div class="question upper">
                      Would you like to meet companies participating in B2B session?<?php echo $_smarty_tpl->tpl_vars['post']->value['b2b'];?>

                      <div class="answers">
                          <span <?php if ($_smarty_tpl->tpl_vars['post']->value['b2b']=='Y'){?>class="checked"<?php }?>><i class="icons check-icon"></i> YES</span>
                          <span <?php if ($_smarty_tpl->tpl_vars['post']->value['b2b']!='Y'){?>class="checked"<?php }?>><i class="icons check-icon"></i> NO</span>
                          <div class="checkhide"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['post']->value['b2b']=='Y'){?>checked="checked"<?php }?> name="b2b" value="Y"/></div>
                      </div>
                  </div>
                  <div class="b2b-hidden" <?php if ($_smarty_tpl->tpl_vars['post']->value['b2b']=='Y'){?>style="display: block;"<?php }?>>
                  
                      <div class="input-wrap">
                          <div class="left">
                              <label>Contact Tel*</label>
                          </div>
                          <div class="right">
                              <input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['tel'];?>
"/>
                          </div>
                      </div>
                      <div class="input-wrap">
                          <div class="left">
                              <span>Your Company Profile*</span>
                          </div>
                          <div class="right">
                              <textarea name="profile" class="input-xlarge"><?php echo $_smarty_tpl->tpl_vars['post']->value['profile'];?>
</textarea>
                          </div>
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
                              <td class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['company']->value->name;?>
</a></td>
                              <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                              <td><i class="icons <?php if ($_smarty_tpl->tpl_vars['post']->value['slots'][$_smarty_tpl->tpl_vars['slot']->value->id]==$_smarty_tpl->tpl_vars['company']->value->id){?>check2-icon<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allowed_u2s']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['user_per_slot']->value[$_smarty_tpl->tpl_vars['company']->value->id][$_smarty_tpl->tpl_vars['slot']->value->id]>=$_tmp1){?>disabled-icon<?php }else{ ?>circle-icon<?php }}?>"></i>
                                  <div class="checkbox-hide"><input type="checkbox" name="slot[<?php echo $_smarty_tpl->tpl_vars['slot']->value->id;?>
]" <?php if ($_smarty_tpl->tpl_vars['post']->value['slots'][$_smarty_tpl->tpl_vars['slot']->value->id]==$_smarty_tpl->tpl_vars['company']->value->id){?> checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
" /></div>
                              </td>
                              <?php } ?>
                          </tr>
                          <?php } ?>
                      </table>
                  </div>
              </div>
          </li>
          
      </ul>
        <div class="button-wrap">
            <input type="submit" name="register" value="OK"/>
        </div>
        <span style="color:#c00">*For any technical problems, during registration or profile management, please contact our support team <a href="mailto:support@tbilisisilkroad.ge">support@tbilisisilkroad.ge</a></span>
    </form>
    <?php }else{ ?>
    <p class="notification success"><i></i>Registration Process is completed!</p>
    <?php }?>
    <?php }?>
    
  </div>
<div class="clear"></div>
</div>

<script src="js/register.js"></script><?php }} ?>