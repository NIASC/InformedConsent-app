<?php /* Smarty version Smarty-3.1.13, created on 2014-04-30 16:56:31
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27446535a1618201902-50062062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdddc4b9bd42cbdada838bf7e7df584cbb51ea14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\contact_page.tpl',
      1 => 1398862587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27446535a1618201902-50062062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535a1618324bf6_91698617',
  'variables' => 
  array (
    'navigator' => 0,
    'info' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'nav_item' => 0,
    'info_title' => 0,
    'notification' => 0,
    'error' => 0,
    'info_content' => 0,
    'name' => 0,
    'email' => 0,
    'message' => 0,
    'map_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a1618324bf6_91698617')) {function content_535a1618324bf6_91698617($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['info']->value['title'])){?>
	<ul class="crumb upper">
    	<li><a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></li>
		<?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['nav_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_item']->key => $_smarty_tpl->tpl_vars['nav_item']->value){
$_smarty_tpl->tpl_vars['nav_item']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['nav_item']->value->name;?>
</a></li>
		<?php } ?>
		<?php }elseif($_smarty_tpl->tpl_vars['navigator']->value){?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['title']){?>
		<li><h1><a><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h1></li>
		<?php }?>
	</ul>
<?php }else{ ?>
	<ul class="crumb upper">  
    	<li><a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></li>      	
		<li><h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1></li>
	</ul>
<?php }?>

<div class="content_wrapper">
	<h1 class="info_title upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>
    
    <div class="contact_text upper"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</div>
    <div class="contact_form_container">
    	<form class="form-horizontal" method="post">
        	<div class="control-group">
            	<div class="controls">
                	<label for="name"><?php echo $_smarty_tpl->tpl_vars['language']->value['name_lastname'];?>
<span>*</span></label><br />
                    <input type="text" id="name" name="name" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                    <p class="help-block"></p>
				</div>
                
            	<div class="controls">
                	<label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span>*</span></label><br />
                    <input type="text" id="email" name="email" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                    <p class="help-block"></p>
				</div>
			</div>    
                        
            <div class="control-group message">                
                <div class="controls">
                	<div class="textarea">
                    	<label for="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
<span>*</span></label><br />
                        <textarea name="message" id="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
					</div>
				</div>
			</div>
            
            <div class="control-group message">
            	<div class="controls">
                	<button class="btn btn-info upper" name="action"><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
</button>
				</div>
			</div>
                        
		</form>
	</div>
    
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript">
            
            function initialize() {
              var myLatlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['map_info']->value['lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['map_info']->value['lng'];?>
);
              var mapOptions = {
                zoom: 13,
                center: myLatlng
              };
            
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            
              var contentString = $('.contact_text').html();
            
              var infowindow = new google.maps.InfoWindow({
                  content: contentString,
				  maxWidth: 300
              });
            
              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: '<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
'
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
            
	</script>
    <div id="map-canvas"></div>
</div>     <?php }} ?>