<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientRoomMemberSearch.proto

namespace Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.Role</code>
 */
class Role
{
    /**
     * Generated from protobuf enum <code>MEMBER = 0;</code>
     */
    const MEMBER = 0;
    /**
     * Generated from protobuf enum <code>MODERATOR = 1;</code>
     */
    const MODERATOR = 1;
    /**
     * Generated from protobuf enum <code>ADMIN = 2;</code>
     */
    const ADMIN = 2;
    /**
     * Generated from protobuf enum <code>OWNER = 3;</code>
     */
    const OWNER = 3;

    private static $valueToName = [
        self::MEMBER => 'MEMBER',
        self::MODERATOR => 'MODERATOR',
        self::ADMIN => 'ADMIN',
        self::OWNER => 'OWNER',
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

