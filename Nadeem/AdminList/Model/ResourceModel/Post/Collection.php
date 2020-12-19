<?php
namespace Nadeem\AdminList\Model\ResourceModel\Post;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
	protected $_idFieldName = 'entity_id';
	protected $_eventPrefix = 'nadeem_adminlist_post_collection';
	protected $_eventObject = 'attribute_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct() {
		$this->_init('Nadeem\AdminList\Model\Post', 'Nadeem\AdminList\Model\ResourceModel\Post');
	}

	protected function _initSelect() {
        parent::_initSelect();

        $this->addFieldToSelect(['message','comment']);
    }

}