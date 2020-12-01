<?php
/**
 * @author: daniDLL
 * Date: 18/11/20
 * Time: 20:34
 */

namespace Hiberus\Library\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface BookSearchResultsInterface
 * @package Hiberus\Library\Api\Data
 */
interface BookSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get book list.
     *
     * @return \Hiberus\Library\Api\Data\BookInterface[]
     */
    public function getItems();

    /**
     * Set book list.
     *
     * @param \Hiberus\Library\Api\Data\BookInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
