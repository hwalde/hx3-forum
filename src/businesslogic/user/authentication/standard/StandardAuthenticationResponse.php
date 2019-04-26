<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\user\authentication\standard;


use businesslogic\user\authentication\AuthenticationResponse;
use businesslogic\user\authentication\Session;
use businesslogic\user\User;

class StandardAuthenticationResponse implements AuthenticationResponse
{
    /** @var StandardSession */
    private $session;

    /** @var User */
    private $user;

    /**
     * @return StandardSession
     */
    public function getSession(): Session
    {
        return $this->session;
    }

    /**
     * @param StandardSession $session
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