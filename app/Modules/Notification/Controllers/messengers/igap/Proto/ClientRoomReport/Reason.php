<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientRoomReport.proto

namespace Proto\ClientRoomReport;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.ClientRoomReport.Reason</code>
 */
class Reason
{
    /**
     * Generated from protobuf enum <code>OTHER = 0;</code>
     */
    const OTHER = 0;
    /**
     * Generated from protobuf enum <code>SPAM = 1;</code>
     */
    const SPAM = 1;
    /**
     * Generated from protobuf enum <code>PORNOGRAPHY = 2;</code>
     */
    const PORNOGRAPHY = 2;
    /**
     * Generated from protobuf enum <code>VIOLENCE = 3;</code>
     */
    const VIOLENCE = 3;
    /**
     * Generated from protobuf enum <code>ABUSE = 4;</code>
     */
    const ABUSE = 4;

    private static $valueToName = [
        self::OTHER => 'OTHER',
        self::SPAM => 'SPAM',
        self::PORNOGRAPHY => 'PORNOGRAPHY',
        self::VIOLENCE => 'VIOLENCE',
        self::ABUSE => 'ABUSE',
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
class_alias(Reason::class, \Proto\ClientRoomReport_Reason::class);

