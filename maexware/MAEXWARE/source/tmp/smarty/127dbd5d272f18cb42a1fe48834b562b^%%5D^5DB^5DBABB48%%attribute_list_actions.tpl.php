<?php /* Smarty version 2.6.34, created on 2025-02-06 15:43:35
         compiled from include/attribute_list_actions.tpl */ ?>
<?php if (! $this->_tpl_vars['readonly']): ?>
    <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxattribute__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
" title="" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
<?php endif; ?>