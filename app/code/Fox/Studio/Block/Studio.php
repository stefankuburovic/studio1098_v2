<?php
namespace Fox\Studio\Block;
class Studio extends \Magento\Framework\View\Element\Template
{
	
	protected $_productCollectionFactory;
	protected $categoryFactory;
	
    public function __construct(
	\Magento\Catalog\Model\CategoryFactory $categoryFactory,
       \Magento\Backend\Block\Template\Context $context,
	   \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
	   
            array $data = []
)
{
	$this->categoryFactory = $categoryFactory;
	$this->_productCollectionFactory = $productCollectionFactory;
    parent::__construct($context, $data);
}

public function getCategory()
{
    $categoryId = $this->getCategoryId();
    $category = $this->categoryFactory->create()->load($categoryId);
    return $category;
}
  public function getProductCollection()
{
    return $this->getCategory()->getProductCollection()->addAttributeToSelect('*'); 
}
}
?>