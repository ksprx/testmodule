<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.RoomMessageType</code>
 */
class RoomMessageType
{
    /**
     * Generated from protobuf enum <code>TEXT = 0;</code>
     */
    const TEXT = 0;
    /**
     * Generated from protobuf enum <code>IMAGE = 1;</code>
     */
    const IMAGE = 1;
    /**
     * Generated from protobuf enum <code>IMAGE_TEXT = 2;</code>
     */
    const IMAGE_TEXT = 2;
    /**
     * Generated from protobuf enum <code>VIDEO = 3;</code>
     */
    const VIDEO = 3;
    /**
     * Generated from protobuf enum <code>VIDEO_TEXT = 4;</code>
     */
    const VIDEO_TEXT = 4;
    /**
     * Generated from protobuf enum <code>AUDIO = 5;</code>
     */
    const AUDIO = 5;
    /**
     * Generated from protobuf enum <code>AUDIO_TEXT = 6;</code>
     */
    const AUDIO_TEXT = 6;
    /**
     * Generated from protobuf enum <code>VOICE = 7;</code>
     */
    const VOICE = 7;
    /**
     * Generated from protobuf enum <code>GIF = 8;</code>
     */
    const GIF = 8;
    /**
     * Generated from protobuf enum <code>GIF_TEXT = 14;</code>
     */
    const GIF_TEXT = 14;
    /**
     * Generated from protobuf enum <code>FILE = 9;</code>
     */
    const FILE = 9;
    /**
     * Generated from protobuf enum <code>FILE_TEXT = 10;</code>
     */
    const FILE_TEXT = 10;
    /**
     * Generated from protobuf enum <code>LOCATION = 11;</code>
     */
    const LOCATION = 11;
    /**
     * Generated from protobuf enum <code>LOG = 12;</code>
     */
    const LOG = 12;
    /**
     * Generated from protobuf enum <code>CONTACT = 13;</code>
     */
    const CONTACT = 13;
    /**
     * Generated from protobuf enum <code>WALLET = 15;</code>
     */
    const WALLET = 15;
    /**
     * Generated from protobuf enum <code>STICKER = 16;</code>
     */
    const STICKER = 16;
    /**
     * Generated from protobuf enum <code>STORY = 17;</code>
     */
    const STORY = 17;
    /**
     * Generated from protobuf enum <code>STORY_REPLY = 18;</code>
     */
    const STORY_REPLY = 18;
    /**
     * Generated from protobuf enum <code>CARD_TO_CARD = 19;</code>
     */
    const CARD_TO_CARD = 19;
    /**
     * Generated from protobuf enum <code>BOT = 20;</code>
     */
    const BOT = 20;

    private static $valueToName = [
        self::TEXT => 'TEXT',
        self::IMAGE => 'IMAGE',
        self::IMAGE_TEXT => 'IMAGE_TEXT',
        self::VIDEO => 'VIDEO',
        self::VIDEO_TEXT => 'VIDEO_TEXT',
        self::AUDIO => 'AUDIO',
        self::AUDIO_TEXT => 'AUDIO_TEXT',
        self::VOICE => 'VOICE',
        self::GIF => 'GIF',
        self::GIF_TEXT => 'GIF_TEXT',
        self::FILE => 'FILE',
        self::FILE_TEXT => 'FILE_TEXT',
        self::LOCATION => 'LOCATION',
        self::LOG => 'LOG',
        self::CONTACT => 'CONTACT',
        self::WALLET => 'WALLET',
        self::STICKER => 'STICKER',
        self::STORY => 'STORY',
        self::STORY_REPLY => 'STORY_REPLY',
        self::CARD_TO_CARD => 'CARD_TO_CARD',
        self::BOT => 'BOT',
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

