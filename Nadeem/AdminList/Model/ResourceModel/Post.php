<?php
namespace Nadeem\AdminList\Model\ResourceModel;

/**
 * Class Post
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	) {
		parent::__construct($context);
	}
	
	protected function _construct() {
		$this->_init('nadeem_adminlist', 'entity_id');
	}
	
}