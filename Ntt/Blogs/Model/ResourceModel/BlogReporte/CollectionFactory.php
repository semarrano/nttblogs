<?php

namespace Ntt\Blogs\Model\ResourceModel\BlogReporte;

class CollectionFactory extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    protected function _construct()
    {
        $this->_init('blog_reporte', 'id');
    }
     public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Ntt\\Blogs\\Model\\ResourceModel\\Blog\\Collection')
    {
        $this->objectManager = $objectManager;
        $this->instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Ntt\Blogs\Model\ResourceModel\Blog\Collection
     */
    public function create(array $data = [])
    {
        return $this->objectManager->create($this->instanceName, $data);
    }
}