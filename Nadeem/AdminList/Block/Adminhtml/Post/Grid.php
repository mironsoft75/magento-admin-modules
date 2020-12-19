<?php
namespace Nadeem\AdminList\Block\Adminhtml\Post;

/**
 * Class Grid
 */
class Grid extends \Magento\Backend\Block\Widget\Grid\Container {

	protected function _construct() {
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Nadeem_AdminList';
		$this->_headerText = __('Admin List');
		parent::_construct();

		$this->removeButton('add');
	}
}