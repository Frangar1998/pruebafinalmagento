<?php

namespace Hiberus\Garcia\Api;

use Hiberus\Garcia\Api\Data\ExamInterface;
use Hiberus\Garcia\Api\Data\ExamSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Interface ExamRepositoryInterface
 * @package Hiberus\Garcia\Api
 */
interface ExamRepositoryInterface
{
    /**
     * Save an Exam
     *
     * @param ExamInterface $exam
     * @return ExamInterface
     */
    public function save(ExamInterface $exam);

    /**
     * Get Exam by an Id
     *
     * @param int $examId
     * @return ExamInterface
     */
    public function getById($examId);

    /**
     * Retrieve exams matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Hiberus\Garcia\Api\Data\ExamSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Delete an Exam
     *
     * @param ExamInterface $exam
     * @return bool
     */
    public function delete(ExamInterface $exam);

    /**
     * Delete an Exam by an Id
     *
     * @param int $examId
     * @return bool
     */
    public function deleteById($examId);
}
