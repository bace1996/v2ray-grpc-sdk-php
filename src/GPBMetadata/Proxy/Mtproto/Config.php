<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/mtproto/config.proto

namespace Bluehead\V2ray\GPBMetadata\Proxy\Mtproto;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Bluehead\V2ray\GPBMetadata\Common\Protocol\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81020a1a70726f78792f6d7470726f746f2f636f6e6669672e70726f74" .
            "6f1221626c7565686561642e76327261792e636f72652e70726f78792e6d" .
            "7470726f746f22190a074163636f756e74120e0a06736563726574180120" .
            "01280c22470a0c536572766572436f6e66696712370a0475736572180120" .
            "03280b32292e626c7565686561642e76327261792e636f72652e636f6d6d" .
            "6f6e2e70726f746f636f6c2e55736572220e0a0c436c69656e74436f6e66" .
            "696742440a1c636f6d2e76327261792e636f72652e70726f78792e6d7470" .
            "726f746f50015a076d7470726f746faa021856325261792e436f72652e50" .
            "726f78792e4d7470726f746f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

