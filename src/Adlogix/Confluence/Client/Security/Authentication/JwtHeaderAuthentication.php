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

namespace Adlogix\Confluence\Client\Security\Authentication;


class JwtHeaderAuthentication extends AbstractJwtAuthentication
{

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return [
            "Authorization" => sprintf('JWT %s', $this->token->sign())
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryParameters()
    {
        return [];
    }

}
