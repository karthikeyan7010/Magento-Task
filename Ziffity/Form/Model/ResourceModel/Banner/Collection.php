<?php

namespace Ziffity\Form\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ziffity\Form\Model\Banner', 'Ziffity\Form\Model\ResourceModel\Banner');
    }
}
