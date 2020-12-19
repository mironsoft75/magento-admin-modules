<?php
namespace Nadeem\AdminCrud\Model;

/**
 * Class Post
 */
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface {
	const CACHE_TAG = 'nadeem_admincrud_post';

	protected $_cacheTag = 'nadeem_admincrud_post';

	protected $_eventPrefix = 'nadeem_admincrud_post';

	protected function _construct() {
		$this->_init('Nadeem\AdminCrud\Model\ResourceModel\Post');
	}

	public function getIdentities() {
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues() {
		$values = [];

		return $values;
	}
}