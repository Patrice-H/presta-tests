<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:02
  from 'C:\wamp64\www\presta-tests\modules\ybc_newsletter\views\templates\hook\template9.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652406366cc3b1_26899819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e364956a1bd4af03b130628fe630901691df8403' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_newsletter\\views\\templates\\hook\\template9.tpl',
      1 => 1696857765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652406366cc3b1_26899819 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ybc-newsletter-popup<?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_MOBILE_HIDE']->value) {?> ynp-mobile-hide<?php }?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-mail-wrapper">
    <div class="ynp-div-l2 ybc_animation">
        <div class="ynp-div-l3" >
            <div class="ybc_nlt_content ybc_animation">
                <span id="ynp-close" class="ynp-close button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close popup','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
"></span>
                <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value != '') {?>
                    <div class="img_bg"><img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" /></div>
                <?php }?>
                <form class="ynp-form ynp-form-popup" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_ACTION']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOADING_IMG']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                        </div>                            
                        <div class="ynp-inner-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value) {?>
                                <div class="header_logo_center">
                                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />                                    
                                </div>
                            <?php }?>
                            <div class="line_sub"><i class="fa fa-diamond" aria-hidden="true"></i></div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value != '') {?>
                                <h4><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_CONTENT']->value;?>

                            <div class="ynp-input-row">
                                <label for="ynp-email-input"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: ','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" id="ynp-email-input" class="ynp-email-input" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                                <input class="button ynp-submit" type="submit" name="ynpSubmit" id="ynp-submit" value="Subscribe" />
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_rss_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_rss_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_li_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_li_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_youtb_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_youtb_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_in_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_in_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_vimeo_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_vimeo_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_pin_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_pin_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_gg_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_gg_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_fb_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_fb_url']->value != '' || (isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_tw_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_tw_url']->value != '') {?>
                                <div class="section_social">
                                    <ul>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_fb_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_fb_url']->value != '') {?>
                                			<li class="facebook">
                                				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_fb_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                					<span><i class="icon-facebook"></i></span>
                                                    <span class="icon_hover"><i class="icon-facebook"></i></span>
                                				</a>
                                			</li>
                                		<?php }?>
                                		<?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_tw_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_tw_url']->value != '') {?>
                                			<li class="twitter">
                                				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_tw_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                					<span><i class="icon-twitter"></i></span>
                                                            <span class="icon_hover"><i class="icon-twitter"></i></span>
                                        				
                                				</a>
                                			</li>
                                		<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_gg_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_gg_url']->value != '') {?>
                                        	<li class="google-plus">
                                        		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_gg_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="publisher">
                                        			<span><i class="fa fa-google"></i></span>
                                                            <span class="icon_hover"><i class="fa fa-google"></i></span>
                                                		
                                        		</a>
                                        	</li>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_pin_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_pin_url']->value != '') {?>
                                        	<li class="pinterest">
                                        		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_pin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        			<span><i class="icon-pinterest-p"></i></span>
                                                            <span class="icon_hover"><i class="icon-pinterest-p"></i></span>
                                                		
                                        		</a>
                                        	</li>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_vimeo_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_vimeo_url']->value != '') {?>
                                        	<li class="vimeo">
                                        		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_vimeo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        			<span><i class="fa fa-vimeo"></i></span>
                                                            <span class="icon_hover"><i class="fa fa-vimeo"></i></span>
                                                		
                                        		</a>
                                        	</li>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_in_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_in_url']->value != '') {?>
                                        	<li class="instagram">
                                        		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_in_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                <span><i class="icon-instagram"></i></span>
                                                            <span class="icon_hover"><i class="icon-instagram"></i></span>
                                                </a>
                                        	</li>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_youtb_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_youtb_url']->value != '') {?>
                                        	<li class="youtube">
                                        		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_youtb_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        			<span><i class="fa fa-youtube-play"></i></span>
                                                            <span class="icon_hover"><i class="fa fa-youtube-play"></i></span>
                                                </a>
                                        	</li>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_li_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_li_url']->value != '') {?>
                                			<li class="linkedin">
                                				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_li_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                					<span><i class="icon-linkedin"></i></span>
                                                    <span class="icon_hover"><i class="icon-linkedin"></i></span>
                                        		</a>
                                			</li>
                                		<?php }?>
                                		<?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_rss_url']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_rss_url']->value != '') {?>
                                			<li class="rss">
                                				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_rss_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                                    <span><i class="fa fa-rss"></i></span>
                                					<span class="icon_hover"><i class="fa fa-rss"></i></span>
                                				</a>
                                			</li>
                                		<?php }?>
                                    </ul>
                                </div>
                            <?php }?>
                            <div class="ynp-input-checkbox">
                                <div class="box_input">
                                    <input type="checkbox" id="ynp-input-dont-show" class="ynp-input-dont-show" name="ynpcheckbox" />
                                    <span></span>
                                </div>
                                <label for="ynp-input-dont-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this again','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</label>
                            </div>               
                        </div>
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div><?php }
}
