<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/shadowsocks/config.proto

namespace Bluehead\V2ray\Core\Proxy\Shadowsocks;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.proxy.shadowsocks.ServerConfig</code>
 */
class ServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * UdpEnabled specified whether or not to enable UDP for Shadowsocks.
     * Deprecated. Use 'network' field.
     *
     * Generated from protobuf field <code>bool udp_enabled = 1 [deprecated = true];</code>
     */
    private $udp_enabled = false;
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 2;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Network network = 3;</code>
     */
    private $network;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $udp_enabled
     *           UdpEnabled specified whether or not to enable UDP for Shadowsocks.
     *           Deprecated. Use 'network' field.
     *     @type \Bluehead\V2ray\Core\Common\Protocol\User $user
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $network
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Proxy\Shadowsocks\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * UdpEnabled specified whether or not to enable UDP for Shadowsocks.
     * Deprecated. Use 'network' field.
     *
     * Generated from protobuf field <code>bool udp_enabled = 1 [deprecated = true];</code>
     * @return bool
     */
    public function getUdpEnabled()
    {
        return $this->udp_enabled;
    }

    /**
     * UdpEnabled specified whether or not to enable UDP for Shadowsocks.
     * Deprecated. Use 'network' field.
     *
     * Generated from protobuf field <code>bool udp_enabled = 1 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setUdpEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->udp_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 2;</code>
     * @return \Bluehead\V2ray\Core\Common\Protocol\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.protocol.User user = 2;</code>
     * @param \Bluehead\V2ray\Core\Common\Protocol\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Protocol\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Network network = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.net.Network network = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetwork($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Bluehead\V2ray\Core\Common\Net\Network::class);
        $this->network = $arr;

        return $this;
    }

}

