<?php
namespace Fox\Studio\Block;
class Studio extends \Magento\Framework\View\Element\Template
{
	
	protected $_productCollectionFactory;
	
    public function __construct(
       \Magento\Backend\Block\Template\Context $context,
	   \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
            array $data = []
)
{
	$this->_productCollectionFactory = $productCollectionFactory;
    parent::__construct($context, $data);
}
    public function getProductCollection()
{
	$collection = $this->_productCollectionFactory->create();
	$collection->addAttributeToSelect('*');
	$collection->setPageSize(4);
	return $collection;
    //return 'Module Created Successfully by Fox! PRC :)';
}
}
?>