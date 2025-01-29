<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CallRequest.proto

namespace Proto\CallRequestResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.CallRequestResponse.SwitchTransportProtocolEnum</code>
 */
class SwitchTransportProtocolEnum
{
    /**
     * Generated from protobuf enum <code>TCP = 0;</code>
     */
    const TCP = 0;
    /**
     * Generated from protobuf enum <code>UDP = 1;</code>
     */
    const UDP = 1;
    /**
     * Generated from protobuf enum <code>TLS = 2;</code>
     */
    const TLS = 2;

    private static $valueToName = [
        self::TCP => 'TCP',
        self::UDP => 'UDP',
        self::TLS => 'TLS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SwitchTransportProtocolEnum::class, \Proto\CallRequestResponse_SwitchTransportProtocolEnum::class);

