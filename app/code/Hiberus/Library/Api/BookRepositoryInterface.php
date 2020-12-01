<?php
/**
 * @author: daniDLL
 * Date: 18/11/20
 * Time: 20:34
 */

namespace Hiberus\Library\Api;

use Hiberus\Library\Api\Data\BookInterface;
use Hiberus\Library\Api\Data\BookSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Interface BookRepositoryInterface
 * @package Hiberus\Library\Api
 */
interface BookRepositoryInterface
{
    /**
     * Save a Book
     *
     * @param \Hiberus\Library\Api\Data\BookInterface $book
     * @return \Hiberus\Library\Api\Data\BookInterface
     */
    public function save(\Hiberus\Library\Api\Data\BookInterface $book);

    /**
     * Get Book by an Id
     *
     * @param int $bookId
     * @return \Hiberus\Library\Api\Data\BookInterface
     */
    public function getById($bookId);

    /**
     * Retrieve books matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Hiberus\Library\Api\Data\BookSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete a Book
     *
     * @param \Hiberus\Library\Api\Data\BookInterface $book
     * @return bool
     */
    public function delete(\Hiberus\Library\Api\Data\BookInterface $book);

    /**
     * Delete a Book by an Id
     *
     * @param int $bookId
     * @return bool
     */
    public function deleteById($bookId);
}
