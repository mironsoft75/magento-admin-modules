<?php
namespace Nadeem\AdminCrud\Block\Adminhtml\Post\Edit;

/**
 * Class Tabs - Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('nadeem_admincrud_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Information'));
    }
}