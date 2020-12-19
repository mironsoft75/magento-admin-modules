<?php

namespace Nadeem\AdminCrud\Controller\Adminhtml\Post;

class Delete extends \Magento\Backend\App\Action
{
    /**
     * Delete action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('entity_id');

        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create('Nadeem\AdminCrud\Model\Post');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('The data has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['entity_id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find the item to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}