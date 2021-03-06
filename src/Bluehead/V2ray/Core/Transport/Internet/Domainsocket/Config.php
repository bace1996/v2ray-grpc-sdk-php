<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/domainsocket/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Domainsocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.domainsocket.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Path of the domain socket. This overrides the IP/Port parameter from upstream caller.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';
    /**
     * Abstract speicifies whether to use abstract namespace or not.
     * Traditionally Unix domain socket is file system based. Abstract domain socket can be used without acquiring file lock. 
     *
     * Generated from protobuf field <code>bool abstract = 2;</code>
     */
    private $abstract = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Path of the domain socket. This overrides the IP/Port parameter from upstream caller.
     *     @type bool $abstract
     *           Abstract speicifies whether to use abstract namespace or not.
     *           Traditionally Unix domain socket is file system based. Abstract domain socket can be used without acquiring file lock. 
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Transport\Internet\Domainsocket\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Path of the domain socket. This overrides the IP/Port parameter from upstream caller.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path of the domain socket. This overrides the IP/Port parameter from upstream caller.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Abstract speicifies whether to use abstract namespace or not.
     * Traditionally Unix domain socket is file system based. Abstract domain socket can be used without acquiring file lock. 
     *
     * Generated from protobuf field <code>bool abstract = 2;</code>
     * @return bool
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Abstract speicifies whether to use abstract namespace or not.
     * Traditionally Unix domain socket is file system based. Abstract domain socket can be used without acquiring file lock. 
     *
     * Generated from protobuf field <code>bool abstract = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAbstract($var)
    {
        GPBUtil::checkBool($var);
        $this->abstract = $var;

        return $this;
    }

}

