<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto\TextSigns\TextSign;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.TextSigns.TextSign.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>IGAP_DEEP_LINK = 1;</code>
     */
    const IGAP_DEEP_LINK = 1;
    /**
     * Generated from protobuf enum <code>IGAP_LINK = 2;</code>
     */
    const IGAP_LINK = 2;
    /**
     * Generated from protobuf enum <code>WEB_LINK = 3;</code>
     */
    const WEB_LINK = 3;
    /**
     * Generated from protobuf enum <code>BOT_COMMAND = 4;</code>
     */
    const BOT_COMMAND = 4;
    /**
     * Generated from protobuf enum <code>IGAP_RESOLVE = 5;</code>
     */
    const IGAP_RESOLVE = 5;
    /**
     * Generated from protobuf enum <code>DIGIT_LINK = 6;</code>
     */
    const DIGIT_LINK = 6;
    /**
     * Generated from protobuf enum <code>MENTION = 7;</code>
     */
    const MENTION = 7;
    /**
     * Generated from protobuf enum <code>HASHTAG = 8;</code>
     */
    const HASHTAG = 8;
    /**
     * Generated from protobuf enum <code>BOLD = 9;</code>
     */
    const BOLD = 9;
    /**
     * Generated from protobuf enum <code>ITALIC = 10;</code>
     */
    const ITALIC = 10;
    /**
     * Generated from protobuf enum <code>UNDERLINE = 11;</code>
     */
    const UNDERLINE = 11;
    /**
     * Generated from protobuf enum <code>STRIKE = 12;</code>
     */
    const STRIKE = 12;
    /**
     * Generated from protobuf enum <code>SPOILER = 13;</code>
     */
    const SPOILER = 13;
    /**
     * Generated from protobuf enum <code>EMAIL = 14;</code>
     */
    const EMAIL = 14;
    /**
     * Generated from protobuf enum <code>PHONE = 15;</code>
     */
    const PHONE = 15;
    /**
     * Generated from protobuf enum <code>BANK_CARD = 16;</code>
     */
    const BANK_CARD = 16;
    /**
     * Generated from protobuf enum <code>TEXT_URL = 17;</code>
     */
    const TEXT_URL = 17;
    /**
     * Generated from protobuf enum <code>CODE = 18;</code>
     */
    const CODE = 18;
    /**
     * Generated from protobuf enum <code>MENTION_NAME = 19;</code>
     */
    const MENTION_NAME = 19;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::IGAP_DEEP_LINK => 'IGAP_DEEP_LINK',
        self::IGAP_LINK => 'IGAP_LINK',
        self::WEB_LINK => 'WEB_LINK',
        self::BOT_COMMAND => 'BOT_COMMAND',
        self::IGAP_RESOLVE => 'IGAP_RESOLVE',
        self::DIGIT_LINK => 'DIGIT_LINK',
        self::MENTION => 'MENTION',
        self::HASHTAG => 'HASHTAG',
        self::BOLD => 'BOLD',
        self::ITALIC => 'ITALIC',
        self::UNDERLINE => 'UNDERLINE',
        self::STRIKE => 'STRIKE',
        self::SPOILER => 'SPOILER',
        self::EMAIL => 'EMAIL',
        self::PHONE => 'PHONE',
        self::BANK_CARD => 'BANK_CARD',
        self::TEXT_URL => 'TEXT_URL',
        self::CODE => 'CODE',
        self::MENTION_NAME => 'MENTION_NAME',
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
class_alias(Type::class, \Proto\TextSigns_TextSign_Type::class);

