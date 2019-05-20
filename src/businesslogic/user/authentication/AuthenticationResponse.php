<?php declare(strict_types=1);
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace businesslogic\user\authentication;

use businesslogic\user\User;

interface AuthenticationResponse
{
    /**
     * @return Session
     */
    public function getSession(): Session;

    /**
     * @param Session $session
     */
    public function setSession(Session $session): void;

    /**
     * @return User
     */
    public function getUser(): User;

    /**
     * @param User $user
     */
    public function setUser(User $user): void;
}