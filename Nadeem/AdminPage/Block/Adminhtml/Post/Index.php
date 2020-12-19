<?php
namespace Nadeem\AdminPage\Block\Adminhtml\Post;

use Magento\Framework\View\Element\Template\Context;

/**
 * Class Index
 */
class Index extends \Magento\Framework\View\Element\Template {
	/**
     * Index constructor.
     *
     * @param Context $context
     */
	public function __construct(
		Context $context
	) {
		parent::__construct($context);
	}

	public function showData() {
		return __('Hello World From Admin Page !');
	}
}