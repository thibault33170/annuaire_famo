<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 29/06/17
 * Time: 09:05
 */

namespace Famo\AnnuaireFamo\Query;


class ContactSearch
{
    /**
     * @var string
     */
    private $terms;

    /**
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     * @return ContactSearch
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
        return $this;
    }



}