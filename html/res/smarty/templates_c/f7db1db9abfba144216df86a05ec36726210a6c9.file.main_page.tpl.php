<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 17:46:53
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13727550c386f070d49-58105633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7db1db9abfba144216df86a05ec36726210a6c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\main_page.tpl',
      1 => 1431006357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13727550c386f070d49-58105633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c386f31ea46_66250911',
  'variables' => 
  array (
    'about_info' => 0,
    'main_banner' => 0,
    'banner' => 0,
    'slider_block' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info' => 0,
    'mission_info' => 0,
    'board' => 0,
    'projects' => 0,
    'project' => 0,
    'publications' => 0,
    'publication' => 0,
    'gallery' => 0,
    'index' => 0,
    'album' => 0,
    'polls' => 0,
    'poll' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c386f31ea46_66250911')) {function content_550c386f31ea46_66250911($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['about_info']->value){?>
<div class="about main-font" id="<?php echo $_smarty_tpl->tpl_vars['about_info']->value[0]['section_slug'];?>
">
    <div class="left animate">
        <h1><?php echo $_smarty_tpl->tpl_vars['about_info']->value[0]['title'];?>
</h1>
        <div class="text-wrap"><?php echo $_smarty_tpl->tpl_vars['about_info']->value[0]['content'];?>
</div>
    </div>
    <div class="right">
        <ul><?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        	<li class="journal animate"><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value->url;?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value->target;?>
">
                <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value->title;?>
"/>
                <div class="name"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value->title);?>
</div>
            </a></li>
        	<?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['slider_block']->value){?>
<div id="news" class="news-slider-wrap">
    <div class="slider-container">
        <div class="slider">
            <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['latest_news'];?>
</h2>
            <div class="arrow-left"></div>
            <div class="slider-wrap animate">
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                    <li>
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a> </h3>

                        <div class="desc-wrap">
                            <div class="poster">
                                <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="">
                            </div>
                            <div class="desc"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
 <a class="upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
...</a></div>
                            <div class="clear">
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="arrow-right"></div>
        </div>
    </div>
</div>
<?php }?>

<section id="<?php echo $_smarty_tpl->tpl_vars['mission_info']->value[0]['section_slug'];?>
" class="mission" style="background-image: url('img/books.png'); background-color: rgba(0,0,0,.75)">
    <div class="mission-wrap transparent-black">
        <div class="wrap">
            <div class="left">
                <h2><?php echo $_smarty_tpl->tpl_vars['mission_info']->value[0]['title'];?>
</h2>

                <div class="text-wrap">
                    <div><?php echo $_smarty_tpl->tpl_vars['mission_info']->value[0]['content'];?>
</div>
                </div>
                <div class="down-arrow-icon"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>
<!-- staff-->
<?php if ($_smarty_tpl->tpl_vars['board']->value){?>
<div id="<?php echo $_smarty_tpl->tpl_vars['board']->value[0]['section_slug'];?>
" class="staff-section">
    <div class="wrap">
        <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['board_members'];?>
</h2>

        <div class="left">
            <ul>
            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['board']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int)2) == 0 ? 1 : (int)2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
                  <li class="animate">
                  	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['slug'];?>
">
                    <div class="image">
                    	<?php if ($_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['thumbnail']){?>
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
"/>
                        <?php }else{ ?>
                        <img src="img/no-picture.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
"/>
                        <?php }?>
                        <div class="staff-image-cover"></div>
                    </div>
                    </a>
                    <h3><?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['job'];?>
 </h3>

                    <div class="description">
                        <?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['description'];?>

                    </div>
                </li>
                <?php endfor; endif; ?>
            </ul>
            <div class="line"></div>
        </div>
        <div class="right">
            <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['board']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int)2) == 0 ? 1 : (int)2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
                  <li class="animate">
                  	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['slug'];?>
">
                    <div class="image">
                    	<?php if ($_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['thumbnail']){?>
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
"/>
                        <?php }else{ ?>
                        <img src="img/no-picture.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
"/>
                        <?php }?>
                        <div class="staff-image-cover"></div>
                    </div>
                    </a>
                    <h3><?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['job'];?>
</h3>

                    <div class="description">
                        <?php echo $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']]['description'];?>

                    </div>
                </li>
                <?php endfor; endif; ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php }?>
<!-- End Of Staff -->
<!-- PROJECTS -->
<?php if ($_smarty_tpl->tpl_vars['projects']->value){?>
<div class="projects" id="<?php echo $_smarty_tpl->tpl_vars['projects']->value[0][0]['section_slug'];?>
">
    <div class="wrap">
        <h2><?php echo $_smarty_tpl->tpl_vars['projects']->value[0][0]['section_name'];?>
</h2>
        <div class="left">
            <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['current'];?>
</h3>
            <ul>
            	<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
                <li>
                    <i class="icon"></i>
                    <div class="desc">
                        <h4><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a></h4>
                        <div class="date">
                            <span class="from second-font"><?php echo $_smarty_tpl->tpl_vars['language']->value['start_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['year'];?>
</span> <span class="end second-font"><?php echo $_smarty_tpl->tpl_vars['language']->value['end_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['year'];?>
</span>
                            <div class="clear"></div>
                        </div>
                    </div>
                </li>
				<?php } ?>
            </ul>
        </div>
        <div class="right">
            <h3><?php echo $_smarty_tpl->tpl_vars['language']->value['complited'];?>
</h3>
            <ul>
            	<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
                <li>
                    <i class="icon"></i>
                    <div class="desc">
                        <h4><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a></h4>
                        <div class="date">
                            <span class="from second-font"><?php echo $_smarty_tpl->tpl_vars['language']->value['start_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['start_date']['year'];?>
</span> <span class="end second-font"><?php echo $_smarty_tpl->tpl_vars['language']->value['end_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['end_date']['year'];?>
</span>
                            <div class="clear"></div>
                        </div>
                    </div>
                </li>
				<?php } ?>
            </ul>
        </div>
        <a class="more-projects upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['more_projects'];?>
</a>
        <div class="clear"></div>
    </div>
</div>
<?php }?>
<!-- END OF PROJECTS -->
<!-- PUBLICATIONS -->

<div id="<?php echo $_smarty_tpl->tpl_vars['publications']->value[0]['section_slug'];?>
" class="publication">
    <div class="publication-wrap animate">
        <h2><?php echo $_smarty_tpl->tpl_vars['publications']->value[0]['section_name'];?>
</h2>

        <div class="slider">
            <div class="arrow-left"></div>
            <div class="slider-wrap">
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['publication'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['publication']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['publications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['publication']->key => $_smarty_tpl->tpl_vars['publication']->value){
$_smarty_tpl->tpl_vars['publication']->_loop = true;
?>
                    <li>
                        <div class="poster">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/files/<?php echo $_smarty_tpl->tpl_vars['publication']->value['file'];?>
" target="_blank">
                            <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['publication']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['publication']->value['title'];?>
"></a>
                        </div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['publication']->value['title'];?>
</h3>

                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['publication']->value['content'];?>

                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="arrow-right"></div>
        </div>
    </div>
</div>

<!-- End Of PUBLICATIONS -->

<!-- PHOTO AND VIDEO GALLERY -->
<?php if ($_smarty_tpl->tpl_vars['gallery']->value){?>
<div id="<?php echo $_smarty_tpl->tpl_vars['gallery']->value[0]['section_slug'];?>
" class="video-photo-gallery">
    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['gallery']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['gallery']->value[0]['section_name'];?>
</a></h2>
    <ul class="animate">
    	<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['album']->key;
?>
        <li <?php if (($_smarty_tpl->tpl_vars['index']->value+1)%4==0||($_smarty_tpl->tpl_vars['index']->value+1)%4==3){?> class="rev"<?php }?>>
            <div class="wrap">
                <div class="image"><img src="images/small_<?php echo $_smarty_tpl->tpl_vars['album']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
"/> </div>
                <div class="description-wrap <?php echo $_smarty_tpl->tpl_vars['album']->value['class'][$_smarty_tpl->tpl_vars['index']->value];?>
">
                    <div class="description">
                        <div><?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
</div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" class="upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['more_images'];?>
</a>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
    <div class="clear"></div>
</div>
<?php }?>
<!-- END OF PHOTO VIDEO GALLERY -->

<!-- POLL -->

<div class="poll">
    <h2><?php echo $_smarty_tpl->tpl_vars['language']->value['poll_voting'];?>
</h2>

    <div class="poll-wrap">
    	<?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
        <form class="poll_form" name="<?php echo $_smarty_tpl->tpl_vars['poll']->value['id'];?>
">
            <h3><?php echo $_smarty_tpl->tpl_vars['poll']->value['title'];?>
</h3>
            <ul class="poll-items">
            	<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['poll']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['index']->value+1==count($_smarty_tpl->tpl_vars['poll']->value['options'])){?>class="last"<?php }?>>
                    <div class="checkbox">
                        <div class="checkbox-hide"><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['option']->value->id;?>
" name="answer"/></div>
                    </div>
                    <div class="progress-answer">
                        <div class="answer"><?php echo $_smarty_tpl->tpl_vars['option']->value->text;?>
</div>
                        <div class="progressbar <?php echo $_smarty_tpl->tpl_vars['poll']->value['bg_class'][$_smarty_tpl->tpl_vars['index']->value];?>
" style="width: 0%"></div>
                        <div class="vote-count second-font"><span class="vote_val"><?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
</span> - <span class="vote_total"><?php echo $_smarty_tpl->tpl_vars['poll']->value['total'];?>
</span> <span class="vote_word"><?php echo $_smarty_tpl->tpl_vars['language']->value['votes'];?>
</span></div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="clear"></div>
            <input type="submit" class="submit_poll upper" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['click'];?>
"/>

            <div class="clear"></div>
        </form>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	
	$('.poll_form').submit(function(){
		var form = $(this), voteWord = $('span.vote_word:first').html();
		
		$.post( "ajax/vote.php", 
				{pollID: form.attr('name'), 
				option: $('input[name=answer]:checked').val(), 
				language: $('#lang_wrapper a.active').attr('title') 
			})
		  .done(function( data ) {
			  obj = JSON.parse(data);
			  if(obj != null) {
				  form.children('.poll-items').html('');
			  $.each(obj.data, function (i, val) {
				   form.children('.poll-items').append('<li><div class="progress-answer"><div class="answer">'+val.text+'</div><div class="progressbar '+val.bg+'" style="width: 0%"></div><div class="vote-count second-font"><span class="vote_val">'+val.value+'</span> - <span class="vote_total">'+obj.total+'</span> '+voteWord+'</div></div></li>');
				});
			  /*
			  $('#list').html('');*/
			
			$("div.poll .poll-wrap form ul.poll-items li .progress-answer").each(function(){		
                $(this).children('.progressbar').animate({
                        width: $(this).children('.vote-count').children('.vote_val').html()/obj.total*100+'%'
                    }, 0.5
                )
        	});
			
			$.cookie('poll_id', form.attr('name'), {expires: 365});
			$(".poll_form[name="+form.attr('name')+"] input").remove();
		}
		
	  });return false;
	});
	
	if ($.cookie('poll_id')) {
		pollID = $.cookie('poll_id');		
		$(".poll_form[name="+pollID+"] input").remove();
		$(".poll_form[name="+pollID+"] .checkbox").remove();
	  }
	  
});
</script>

<!-- END OF POLL-->


<!-- PARTNERS -->

<div class="partners animate" id="Donors-Partners">
    <div class="partners-wrap">
        <div class="slider">

            <div class="slider-wrap">
                <ul>
                    <li><img src="images/partner1.png" alt=""/>
                    </li>
                    <li><img src="images/partner2.png" alt=""/>
                    </li>
                    <li><img src="images/partner3.png" alt=""/>
                    </li>
                </ul>
                <a href="#" class="see-all">SEE ALL PARTNERS</a>
                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>

<!-- END OF PARTNERS -->
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
        $("div.publication-wrap .slider .slider-wrap").Slider({
            left: $("div.publication-wrap .slider .arrow-left"),
            right: $("div.publication-wrap .slider .arrow-right")
        }, 3);

        $("div.news-slider-wrap .slider-container .slider .slider-wrap").Slider({
            left: $("div.news-slider-wrap .slider .arrow-left"),
            right: $("div.news-slider-wrap .slider .arrow-right")
        }, 1);
		
		$("div.poll .poll-wrap form ul.poll-items li div.checkbox").click(function () {
            if (!$(this).is('checked')) {
                $("div.poll .poll-wrap form ul.poll-items li div.checkbox.checked").removeClass("checked");
                $("div.poll .poll-wrap form ul.poll-items li div.checkbox input").prop("checked", false);
                $(this).find("input").prop("checked", true);
                $(this).addClass("checked");
            }
        });
		
    });
</script>


                    
                    <?php }} ?>