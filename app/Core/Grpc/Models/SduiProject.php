<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: enum.proto

namespace App\Core\Grpc\Models;

use UnexpectedValueException;

/**
 * Protobuf type <code>ir.kalabazzar.proto.SduiProject</code>
 */
class SduiProject
{
    /**
     * Generated from protobuf enum <code>CLIENT = 0;</code>
     */
    const CLIENT = 0;
    /**
     * Generated from protobuf enum <code>SELLER = 1;</code>
     */
    const SELLER = 1;
    /**
     * Generated from protobuf enum <code>ADMIN = 2;</code>
     */
    const ADMIN = 2;

    private static $valueToName = [
        self::CLIENT => 'CLIENT',
        self::SELLER => 'SELLER',
        self::ADMIN => 'ADMIN',
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

