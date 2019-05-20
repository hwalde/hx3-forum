<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\user\authentication\oauth;

use businesslogic\user\authentication\Session;
use businesslogic\user\User;

class OAuthAuthenticationResponse
{
    /** @var OAuthSession */
    private $session;

    /** @var User */
    private $user;

    /**
     * @return OAuthSession
     */
    public function getSession(): Session
    {
        return $this->session;
    }

    /**
     * @param OAuthSession $session
     */
    public function setSession(Session $session): void
    {
        $this->session = $session;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}