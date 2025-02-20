<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.PrivacyLevel</code>
 */
class PrivacyLevel
{
    /**
     * Generated from protobuf enum <code>ALLOW_ALL = 0;</code>
     */
    const ALLOW_ALL = 0;
    /**
     * Generated from protobuf enum <code>DENY_ALL = 1;</code>
     */
    const DENY_ALL = 1;
    /**
     * Generated from protobuf enum <code>ALLOW_CONTACTS = 2;</code>
     */
    const ALLOW_CONTACTS = 2;

    private static $valueToName = [
        self::ALLOW_ALL => 'ALLOW_ALL',
        self::DENY_ALL => 'DENY_ALL',
        self::ALLOW_CONTACTS => 'ALLOW_CONTACTS',
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

