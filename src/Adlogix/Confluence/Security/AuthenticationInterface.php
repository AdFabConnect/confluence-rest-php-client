<?php
/*
 * This file is part of the Adlogix package.
 *
 * (c) Allan Segebarth <allan@adlogix.eu>
 * (c) Jean-Jacques Courtens <jjc@adlogix.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Adlogix\Confluence\Security;

/**
 * Interface AuthenticationInterface
 * @package Adlogix\Confluence\Security
 * @author Cedric Michaux <cedric@adlogix.eu>
 */
interface AuthenticationInterface
{

    /**
     * @return array
     */
    public function getHeaders();
}
