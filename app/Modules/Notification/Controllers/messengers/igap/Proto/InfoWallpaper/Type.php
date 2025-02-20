<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoWallpaper.proto

namespace Proto\InfoWallpaper;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.InfoWallpaper.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>CHAT_BACKGROUND = 0;</code>
     */
    const CHAT_BACKGROUND = 0;
    /**
     * Generated from protobuf enum <code>PROFILE_WALLPAPER = 1;</code>
     */
    const PROFILE_WALLPAPER = 1;

    private static $valueToName = [
        self::CHAT_BACKGROUND => 'CHAT_BACKGROUND',
        self::PROFILE_WALLPAPER => 'PROFILE_WALLPAPER',
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
class_alias(Type::class, \Proto\InfoWallpaper_Type::class);

