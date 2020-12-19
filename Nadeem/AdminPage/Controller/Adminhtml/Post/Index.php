<?php
namespace Nadeem\AdminPage\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 */
class Index extends \Magento\Backend\App\Action {

    const ACTIVE_MENU = 'Nadeem_AdminPage::nadeem_adminpage_post';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed() {
        return $this->_authorization->isAllowed(static::ACTIVE_MENU);
    }

    /**
     * Init actions
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function _initAction() {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(static::ACTIVE_MENU);
        $resultPage->getConfig()->getTitle()->prepend(__('Admin Page'));

        return $resultPage;
    }

    public function execute() {
        $resultPage = $this->_initAction();

        return $resultPage;
    }
}
