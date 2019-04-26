<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace util;


class Url
{
    private $scheme, $host, $port, $username, $password, $path, $query, $fragment;

    public function __construct($uri)
    {
        $urlInfo = parse_url($uri);
        if(isset($urlInfo['scheme'])) {
            $this->scheme = $urlInfo['scheme'];
        }
        if(isset($urlInfo['host'])) {
            $this->host = $urlInfo['host'];
        }
        if(isset($urlInfo['port'])) {
            $this->port = $urlInfo['port'];
        }
        if(isset($urlInfo['user'])) {
            $this->username = $urlInfo['user'];
        }
        if(isset($urlInfo['pass'])) {
            $this->password = $urlInfo['pass'];
        }
        if(isset($urlInfo['path'])) {
            $this->path = $urlInfo['path'];
        }
        if(isset($urlInfo['query'])) {
            $this->query = $urlInfo['query'];
        }
        if(isset($urlInfo['scheme'])) {
            $this->scheme = $urlInfo['scheme'];
        }
        if(isset($urlInfo['fragment'])) {
            $this->fragment = $urlInfo['fragment'];
        }
    }

    /**
     * @return mixed
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @return mixed
     */
    public function getFragment()
    {
        return $this->fragment;
    }
}