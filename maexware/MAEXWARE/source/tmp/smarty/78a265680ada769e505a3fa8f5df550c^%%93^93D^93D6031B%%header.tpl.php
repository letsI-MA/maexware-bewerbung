<?php /* Smarty version 2.6.34, created on 2025-02-07 16:19:54
         compiled from layout/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'layout/header.tpl', 2, false),array('function', 'oxid_include_dynamic', 'layout/header.tpl', 73, false),array('insert', 'oxid_newbasketitem', 'layout/header.tpl', 72, false),)), $this); ?>
<?php if ($this->_tpl_vars['oViewConf']->getTopActionClassName() != 'clearcookies' && $this->_tpl_vars['oViewConf']->getTopActionClassName() != 'mallstart'): ?>
    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCookieNote','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

<?php endif; ?>

    <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>
<div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container-fluid<?php else: ?>container<?php endif; ?>">
    <header id="header" class="header">
            <div class="header-box">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 order-lg-0 logo-col">
                            
                                <?php $this->assign('slogoImg', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoFile')); ?>
                                <?php $this->assign('sLogoWidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoWidth')); ?>
                                <?php $this->assign('sLogoHeight', $this->_tpl_vars['oViewConf']->getViewThemeParam('sLogoHeight')); ?>
                                <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" title="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
" class="logo-link">
                                    <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['slogoImg']); ?>
" alt="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
" style="<?php if ($this->_tpl_vars['sLogoWidth']): ?>width:auto;max-width:<?php echo $this->_tpl_vars['sLogoWidth']; ?>
px;<?php endif; ?><?php if ($this->_tpl_vars['sLogoHeight']): ?>height:auto;max-height:<?php echo $this->_tpl_vars['sLogoHeight']; ?>
px;<?php endif; ?>" class="logo-img">
                                </a>
                            
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-lg-3 menus-col">
                            
                                <div class="menu-dropdowns">
                                    
                                                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwLanguageList','lang' => $this->_tpl_vars['oViewConf']->getActLanguageId(),'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

                                    
                                    
                                                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCurrencyList','cur' => $this->_tpl_vars['oViewConf']->getActCurrency(),'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

                                    

                                    
                                        <?php if ($this->_tpl_vars['oxcmp_user'] || $this->_tpl_vars['oView']->getCompareItemCount() || $this->_tpl_vars['Errors']['loginBoxErrors']): ?>
                                            <?php $this->assign('blAnon', 0); ?>
                                            <?php $this->assign('force_sid', $this->_tpl_vars['oViewConf']->getSessionId()); ?>
                                        <?php else: ?>
                                            <?php $this->assign('blAnon', 1); ?>
                                        <?php endif; ?>
                                                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwServiceMenu','_parent' => $this->_tpl_vars['oView']->getClassName(),'force_sid' => $this->_tpl_vars['force_sid'],'nocookie' => $this->_tpl_vars['blAnon'],'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

                                    

                                    
                                                                                <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                            <?php $this->assign('blAnon', 0); ?>
                                            <?php $this->assign('force_sid', $this->_tpl_vars['oViewConf']->getSessionId()); ?>
                                        <?php else: ?>
                                            <?php $this->assign('blAnon', 1); ?>
                                        <?php endif; ?>
                                        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwMiniBasket','nocookie' => $this->_tpl_vars['blAnon'],'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                    
                                </div>
                            
                        </div>
                        <div class="col-12 col-lg-4 order-lg-2 search-col">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </div>
            </div>

            
                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','cnid' => $this->_tpl_vars['oView']->getCategoryId(),'sWidgetType' => 'header','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

            

    </header>
</div>


<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_newbasketitem', 'tpl' => "widget/minibasket/newbasketitemmsg.tpl", 'type' => 'message')), $this); ?>

<?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/minibasket/minibasketmodal.tpl"), $this);?>