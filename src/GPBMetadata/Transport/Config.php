<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/config.proto

namespace Bluehead\V2ray\GPBMetadata\Transport;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Bluehead\V2ray\GPBMetadata\Transport\Internet\Config::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ade010a167472616e73706f72742f636f6e6669672e70726f746f121d62" .
            "6c7565686561642e76327261792e636f72652e7472616e73706f7274225d" .
            "0a06436f6e66696712530a127472616e73706f72745f73657474696e6773" .
            "18012003280b32372e626c7565686561642e76327261792e636f72652e74" .
            "72616e73706f72742e696e7465726e65742e5472616e73706f7274436f6e" .
            "666967423e0a18636f6d2e76327261792e636f72652e7472616e73706f72" .
            "7450015a097472616e73706f7274aa021456325261792e436f72652e5472" .
            "616e73706f7274620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

