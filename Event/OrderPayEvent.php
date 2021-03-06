<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\Event;

/**
 * Description of OrderPayEvent
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class OrderPayEvent extends OrderEvent
{

    protected $isPaid = false;

    public function paid()
    {
        $this->isPaid = true;
        $this->stopPropagation();
    }

    public function isPaid()
    {
        return $this->isPaid;
    }

}
