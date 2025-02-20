<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto\RoomMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.RoomMessage.ExtraType</code>
 */
class ExtraType
{
    /**
     * Generated from protobuf enum <code>NO_EXTRA = 0;</code>
     */
    const NO_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>CHANNEL_EXTRA = 1;</code>
     */
    const CHANNEL_EXTRA = 1;

    private static $valueToName = [
        self::NO_EXTRA => 'NO_EXTRA',
        self::CHANNEL_EXTRA => 'CHANNEL_EXTRA',
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
class_alias(ExtraType::class, \Proto\RoomMessage_ExtraType::class);

