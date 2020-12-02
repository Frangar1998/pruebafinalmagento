<?php

namespace Hiberus\Garcia\Block;

class GarciaBlock extends \Magento\Framework\View\Element\Template {

    protected $_template = 'Hiberus_Garcia::examlist.phtml';

    protected $_examRepository;
    protected $_searchCriteriaBuilder;
    protected $_sortOrderBuilder;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Hiberus\Garcia\Api\ExamRepositoryInterface $examRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder,
        array $data=[]
        ){
            $this->_examRepository = $examRepository;
            $this->_searchCriteriaBuilder = $searchCriteriaBuilder;
            $this->_sortOrderBuilder = $sortOrderBuilder;
            parent::__construct($context, $data);
    }

    public function getExams(){
        return $this->_examRepository->getList($this->_searchCriteriaBuilder
        ->addSortOrder($this->_sortOrderBuilder->setField('mark')->setDirection('DESC')->create())
        ->create());
    }

    public function getNumberOfStudents(){
        return count($this->_examRepository->getList($this->_searchCriteriaBuilder->create()));
    }

    public function getMaxMark(){
        $exams = $this->_examRepository->getList($this->_searchCriteriaBuilder->create());
        $max = 0;
        foreach ($exams as $exam) {
            if ($exam->getMark() > $max) {
                $max = $exam->getMark();
            }
        }
        return $max;
    }

    public function getMarksAverage(){
        $exams = $this->_examRepository->getList($this->_searchCriteriaBuilder->create());
        $sum = 0;
        foreach ($exams as $exam) {
            $sum += $exam->getMark();
        }
        return $sum/count($exams);
    }

    public function getColor($exam){
        return $exam->getMark() < 5?'red':'green';
    }
}
