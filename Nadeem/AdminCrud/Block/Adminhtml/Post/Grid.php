<?php
namespace Nadeem\AdminCrud\Block\Adminhtml\Post;

/**
 * Class Grid
 */
class Grid extends \Magento\Backend\Block\Widget\Grid\Container {

	protected function _construct() {
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Nadeem_AdminCrud';
		$this->_headerText = __('Admin Crud');
		parent::_construct();
	}
}