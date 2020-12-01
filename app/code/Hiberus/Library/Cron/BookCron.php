<?php

namespace Hiberus\Library\Cron;

use Hiberus\Library\Api\BookRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Psr\Log\LoggerInterface;

/**
 * Class BookCron
 * @package Hiberus\Library\Cron
 */
class BookCron
{
    /**
     * @var BookRepositoryInterface
     */
    protected $bookRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var LoggerInterface
     */
    protected $logger;


    /**
     * BookCron constructor.
     * @param BookRepositoryInterface $bookRepository
     */
    public function __construct(
        BookRepositoryInterface $bookRepository, 
        SearchCriteriaBuilder $searchCriteriaBuilder,
        LoggerInterface $logger
    ){
        $this->bookRepository = $bookRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->logger = $logger;
    }

    public function execute() {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $books = $this->bookRepository->getList($searchCriteria)->getItems();

        foreach ($books as $book) {
            $book->setRating(5);
            $this->bookRepository->save($book);
        }
        $this->logger->info('[Fran]: Books rating updated');
    }
}
