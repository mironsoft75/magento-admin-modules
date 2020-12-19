<?php
namespace Nadeem\AdminCrud\Controller\Adminhtml\Post;

/**
 * Class NewAction
 */
class NewAction extends \Magento\Backend\App\Action {
    const ACTIVE_MENU = 'Nadeem_AdminCrud::save';

    /**
     * @var \Magento\Backend\Model\View\Result\Forward
     */
    protected $resultForwardFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed() {
        return $this->_authorization->isAllowed(static::ACTIVE_MENU);
    }

    public function execute() {
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('edit');
    }
}