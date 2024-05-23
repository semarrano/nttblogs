<?php
namespace Ntt\Blogs\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BlogReporte extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('blog_reporte', 'id');
    }
}
