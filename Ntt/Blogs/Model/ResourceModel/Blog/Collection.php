<?php

namespace Ntt\Blogs\Model\ResourceModel\Blog;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult
{
     /**
     * Override _initSelect to add custom columns
     *
     * @return void
     */
    protected function _initSelect()
    {
        $this->addFilterToMap('id', 'main_table.id');
        $this->getSelect()
            ->order('id ASC');
        parent::_initSelect();
    }
}
