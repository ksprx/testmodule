<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.RoomMessageReaction</code>
 */
class RoomMessageReaction
{
    /**
     * Generated from protobuf enum <code>THUMBS_UP = 0;</code>
     */
    const THUMBS_UP = 0;
    /**
     * Generated from protobuf enum <code>THUMBS_DOWN = 1;</code>
     */
    const THUMBS_DOWN = 1;

    private static $valueToName = [
        self::THUMBS_UP => 'THUMBS_UP',
        self::THUMBS_DOWN => 'THUMBS_DOWN',
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

