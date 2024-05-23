<?php

namespace Ntt\Blogs\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Ntt_Blogs::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Ntt Blogs - Administración de los Posts'));
        return $resultPage;
        
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ntt_Blogs::manage_blogs');
    }
}
