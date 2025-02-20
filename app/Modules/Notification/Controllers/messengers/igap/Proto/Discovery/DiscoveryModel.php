<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto\Discovery;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.Discovery.DiscoveryModel</code>
 */
class DiscoveryModel
{
    /**
     * Generated from protobuf enum <code>MODEL1 = 0;</code>
     */
    const MODEL1 = 0;
    /**
     * Generated from protobuf enum <code>MODEL2 = 1;</code>
     */
    const MODEL2 = 1;
    /**
     * Generated from protobuf enum <code>MODEL3 = 2;</code>
     */
    const MODEL3 = 2;
    /**
     * Generated from protobuf enum <code>MODEL4 = 3;</code>
     */
    const MODEL4 = 3;
    /**
     * Generated from protobuf enum <code>MODEL5 = 4;</code>
     */
    const MODEL5 = 4;
    /**
     * Generated from protobuf enum <code>MODEL6 = 5;</code>
     */
    const MODEL6 = 5;
    /**
     * Generated from protobuf enum <code>MODEL7 = 6;</code>
     */
    const MODEL7 = 6;
    /**
     * Generated from protobuf enum <code>MODEL8 = 7;</code>
     */
    const MODEL8 = 7;
    /**
     * Generated from protobuf enum <code>MODEL9 = 8;</code>
     */
    const MODEL9 = 8;
    /**
     * Generated from protobuf enum <code>MODEL10 = 9;</code>
     */
    const MODEL10 = 9;
    /**
     * Generated from protobuf enum <code>MODEL11 = 10;</code>
     */
    const MODEL11 = 10;

    private static $valueToName = [
        self::MODEL1 => 'MODEL1',
        self::MODEL2 => 'MODEL2',
        self::MODEL3 => 'MODEL3',
        self::MODEL4 => 'MODEL4',
        self::MODEL5 => 'MODEL5',
        self::MODEL6 => 'MODEL6',
        self::MODEL7 => 'MODEL7',
        self::MODEL8 => 'MODEL8',
        self::MODEL9 => 'MODEL9',
        self::MODEL10 => 'MODEL10',
        self::MODEL11 => 'MODEL11',
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
class_alias(DiscoveryModel::class, \Proto\Discovery_DiscoveryModel::class);

