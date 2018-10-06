<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/freedom/config.proto

namespace Bluehead\V2ray\Core\Proxy\Freedom;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.proxy.freedom.DestinationOverride</code>
 */
class DestinationOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.ServerEndpoint server = 1;</code>
     */
    private $server = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Common\Protocol\ServerEndpoint $server
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Proxy\Freedom\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.ServerEndpoint server = 1;</code>
     * @return \Bluehead\V2ray\Core\Common\Protocol\ServerEndpoint
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.ServerEndpoint server = 1;</code>
     * @param \Bluehead\V2ray\Core\Common\Protocol\ServerEndpoint $var
     * @return $this
     */
    public function setServer($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Protocol\ServerEndpoint::class);
        $this->server = $var;

        return $this;
    }

}
