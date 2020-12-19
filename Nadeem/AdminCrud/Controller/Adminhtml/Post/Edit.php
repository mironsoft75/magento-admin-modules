<?php

namespace Nadeem\AdminCrud\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

/**
 * Class Edit
 */
class Edit extends \Magento\Backend\App\Action {
    /**
    * @var _coreRegistry
    */
    protected $_coreRegistry = null;

    /**
    * @var resultPageFactory
    */
    protected $resultPageFactory;

    /**
    * Index constructor.
    *
    * @param Context $context
    * @param PageFactory $resultPageFactory
    * @param Registry $registry
    */
    public function __construct(
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_coreRegistry = $registry;
        parent::__construct($context);
    }

    /**
    * {@inheritdoc}
    */
    protected function _isAllowed() {
        return $this->_authorization->isAllowed('Nadeem_AdminCrud::save');
    }

    /**
    * Init actions
    *
    * @return \Magento\Backend\Model\View\Result\Page
    */
    protected function _initAction() {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Nadeem_AdminCrud::nadeem_admincrud_post');
        $resultPage->getConfig()->getTitle()->prepend(__('Form Data'));

        return $resultPage;
    }

    public function execute() {

        $id = $this->getRequest()->getParam('entity_id');
        
        $model = $this->_objectManager->create('Nadeem\AdminCrud\Model\Post');

        $pageTitle  = 'Add Data';

        if ($id) {
            $model = $model->load($id);

            $pageTitle  = 'Edit Data';
            
            if (!$model->getId()) {
                $this->messageManager->addError(__('This data no longer exists.'));
                $resultRedirect = $this->resultRedirectFactory->create();

                return $resultRedirect->setPath('*/*/');
            }
        }

        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getFormData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $modelData = $this->getRequest()->getParam('entity_id');
        if (!empty($modelData) && $id === null) {
            $model->addData($modelData);
        }

        $this->_coreRegistry->register('nadeem_admincrud', $model);
        
        $resultPage = $this->_initAction();
        
        $resultPage->getConfig()->getTitle()->prepend($pageTitle);

        return $resultPage;
    }
}