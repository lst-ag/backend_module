<?php

namespace CHF\BackendModule\Traits;

/***
 *
 * This file is part of the "Backend Module" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Christian Fries <hello@christian-fries.ch>, CF Webworks
 *
 ***/

trait PidAware
{
    /**
     * @var int
     */
    protected $pid;

    /**
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param int $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }
}