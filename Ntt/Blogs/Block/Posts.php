<?php

namespace Ntt\Blogs\Block;

use Magento\Framework\View\Element\Template;
use Ntt\Blogs\Model\ResourceModel\Blog\CollectionFactory;

class Posts extends Template
{
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getPosts()
    {
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('estado', 1); // Filtrar posts activos
        return $collection->getItems();
    }
}
