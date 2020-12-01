<?php

namespace Hiberus\FranTheme\Block;

class MiBloque extends \Magento\Framework\View\Element\Template {

    protected $_template = 'Hiberus_FranTheme::mibloque.phtml';

    protected $_productRepository;
    protected $_searchCriteriaBuilder;
    protected $_sortOrderBuilder;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder,
        array $data=[]
        ){
            $this->_productRepository = $productRepository;
            $this->_searchCriteriaBuilder = $searchCriteriaBuilder;
            $this->_sortOrderBuilder = $sortOrderBuilder;
            parent::__construct($context, $data);
    }

    public function getLastProducts(){
        return $this->_productRepository->getList(
            $this->_searchCriteriaBuilder
            ->addFilter('type_id', 'configurable')
            ->addSortOrder($this->_sortOrderBuilder->setField('entity_id')->setDirection('DESC')->create())
            ->setPageSize(10)
            ->create()
        )->getItems();
    }
}


