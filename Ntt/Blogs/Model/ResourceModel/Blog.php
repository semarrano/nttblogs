<?php

namespace Ntt\Blogs\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('ntt_blogs', 'id');
    }
}
