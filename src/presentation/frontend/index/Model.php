<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace presentation\frontend\index;


use businesslogic\forum\overview\Overview;

class Model
{
    /** @var string */
    private $username = "";

    /** @var boolean */
    private $isLoggedIn = false;

    /** @var string|null */
    private $error;

    /** @var Overview */
    private $overview;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->isLoggedIn;
    }

    /**
     * @param bool $isLoggedIn
     */
    public function setIsLoggedIn(bool $isLoggedIn): void
    {
        $this->isLoggedIn = $isLoggedIn;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    /**
     * @return bool
     */
    public function hasError() {
        return isset($this->error);
    }

    public function getOverview(): Overview
    {
        return $this->overview;
    }

    public function setOverview(Overview $overview): void
    {
        $this->overview = $overview;
    }

}