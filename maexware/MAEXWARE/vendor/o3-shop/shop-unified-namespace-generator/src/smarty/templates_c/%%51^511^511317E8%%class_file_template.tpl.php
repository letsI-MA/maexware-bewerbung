<?php /* Smarty version 2.6.34, created on 2025-02-05 12:48:59
         compiled from class_file_template.tpl */ ?>
<?php echo '<?php'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_template.tpl", 'smarty_include_vars' => array('shopEdition' => $this->_tpl_vars['shopEdition'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

namespace <?php echo $this->_tpl_vars['namespace']; ?>
;

/**
 * Class <?php echo $this->_tpl_vars['class']['shortUnifiedClassName']; ?>

 *
 * IMPORTANT:
 * This class has been generated by a script and is not meant to be edited.
 * Any changes will get lost during the next script run.
 *
<?php if ($this->_tpl_vars['class']['isDeprecated']): ?>
 * @deprecated See parent class for details.
 *
<?php endif; ?>
 * @package <?php echo $this->_tpl_vars['namespace']; ?>

 */
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "class_template.tpl", 'smarty_include_vars' => array('class' => $this->_tpl_vars['class'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>