<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Bluehead\V2ray\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config is the master config of V2Ray. V2Ray takes this config as input and functions accordingly.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Inbound handler configurations. Must have at least one item.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.InboundHandlerConfig inbound = 1;</code>
     */
    private $inbound;
    /**
     * Outbound handler configurations. Must have at least one item. The first item is used as default for routing.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.OutboundHandlerConfig outbound = 2;</code>
     */
    private $outbound;
    /**
     * App is for configurations of all features in V2Ray. A feature must implement the Feature interface, and its config type must be registered through common.RegisterConfig.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage app = 4;</code>
     */
    private $app;
    /**
     * Transport settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.Config transport = 5;</code>
     */
    private $transport = null;
    /**
     * Configuration for extensions. The config may not work if corresponding extension is not loaded into V2Ray.
     * V2Ray will ignore such config during initialization.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage extension = 6;</code>
     */
    private $extension;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\InboundHandlerConfig[]|\Google\Protobuf\Internal\RepeatedField $inbound
     *           Inbound handler configurations. Must have at least one item.
     *     @type \Bluehead\V2ray\Core\OutboundHandlerConfig[]|\Google\Protobuf\Internal\RepeatedField $outbound
     *           Outbound handler configurations. Must have at least one item. The first item is used as default for routing.
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage[]|\Google\Protobuf\Internal\RepeatedField $app
     *           App is for configurations of all features in V2Ray. A feature must implement the Feature interface, and its config type must be registered through common.RegisterConfig.
     *     @type \Bluehead\V2ray\Core\Transport\Config $transport
     *           Transport settings.
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage[]|\Google\Protobuf\Internal\RepeatedField $extension
     *           Configuration for extensions. The config may not work if corresponding extension is not loaded into V2Ray.
     *           V2Ray will ignore such config during initialization.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Inbound handler configurations. Must have at least one item.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.InboundHandlerConfig inbound = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInbound()
    {
        return $this->inbound;
    }

    /**
     * Inbound handler configurations. Must have at least one item.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.InboundHandlerConfig inbound = 1;</code>
     * @param \Bluehead\V2ray\Core\InboundHandlerConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInbound($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\InboundHandlerConfig::class);
        $this->inbound = $arr;

        return $this;
    }

    /**
     * Outbound handler configurations. Must have at least one item. The first item is used as default for routing.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.OutboundHandlerConfig outbound = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutbound()
    {
        return $this->outbound;
    }

    /**
     * Outbound handler configurations. Must have at least one item. The first item is used as default for routing.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.OutboundHandlerConfig outbound = 2;</code>
     * @param \Bluehead\V2ray\Core\OutboundHandlerConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutbound($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\OutboundHandlerConfig::class);
        $this->outbound = $arr;

        return $this;
    }

    /**
     * App is for configurations of all features in V2Ray. A feature must implement the Feature interface, and its config type must be registered through common.RegisterConfig.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage app = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * App is for configurations of all features in V2Ray. A feature must implement the Feature interface, and its config type must be registered through common.RegisterConfig.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage app = 4;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->app = $arr;

        return $this;
    }

    /**
     * Transport settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.Config transport = 5;</code>
     * @return \Bluehead\V2ray\Core\Transport\Config
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Transport settings.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.transport.Config transport = 5;</code>
     * @param \Bluehead\V2ray\Core\Transport\Config $var
     * @return $this
     */
    public function setTransport($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Transport\Config::class);
        $this->transport = $var;

        return $this;
    }

    /**
     * Configuration for extensions. The config may not work if corresponding extension is not loaded into V2Ray.
     * V2Ray will ignore such config during initialization.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage extension = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Configuration for extensions. The config may not work if corresponding extension is not loaded into V2Ray.
     * V2Ray will ignore such config during initialization.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.common.serial.TypedMessage extension = 6;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtension($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->extension = $arr;

        return $this;
    }

}

