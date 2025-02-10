<?php /* Smarty version 2.6.34, created on 2025-02-07 16:20:27
         compiled from include/header_links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'include/header_links.tpl', 8, false),)), $this); ?>
<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<ul>
    
    <li class="act">
        <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&item=home.tpl" id="homelink" target="basefrm" class="rc">
            <b>
                <i class="fa-fw fa-solid fa-table-columns"></i>
                <?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_HOME'), $this);?>

            </b>
        </a>
    </li>
    <li class="sep">
        <a href="<?php echo $this->_tpl_vars['oConfig']->getShopURL(); ?>
" id="shopfrontlink" target="_blank" class="rc">
            <b>
                <i class="fa-fw fa-solid fa-home"></i>
                <?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_SHOPFRONT'), $this);?>

            </b>
        </a>
    </li>
    <li class="sep">
        <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&fnc=logout" id="logoutlink" target="_parent" class="rc">
            <b>
                <i class="fa-fw fa-solid fa-right-from-bracket"></i>
                <?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_LOGOUT'), $this);?>

            </b>
        </a>
    </li>
    
</ul>