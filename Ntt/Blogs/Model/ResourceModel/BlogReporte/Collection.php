<?php
namespace Ntt\Blogs\Model\ResourceModel\BlogReporte;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Ntt\Blogs\Model\BlogReporte as Model;
use Ntt\Blogs\Model\ResourceModel\BlogReporte as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'blog_reporte_collection';
    protected $_eventObject = 'blog_reporte_collection';

    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
