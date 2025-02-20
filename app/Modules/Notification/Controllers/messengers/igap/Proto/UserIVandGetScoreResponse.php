<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserIVandGetScore.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserIVandGetScoreResponse</code>
 */
class UserIVandGetScoreResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>uint32 score = 2;</code>
     */
    protected $score = 0;
    /**
     * Generated from protobuf field <code>uint32 user_rank = 3;</code>
     */
    protected $user_rank = 0;
    /**
     * Generated from protobuf field <code>uint32 total_rank = 4;</code>
     */
    protected $total_rank = 0;
    /**
     * Generated from protobuf field <code>repeated .proto.UserIVandGetScoreResponse.IVandScore scores = 5;</code>
     */
    private $scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $score
     *     @type int $user_rank
     *     @type int $total_rank
     *     @type array<\Proto\UserIVandGetScoreResponse\IVandScore>|\Google\Protobuf\Internal\RepeatedField $scores
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserIVandGetScore::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @return \Proto\Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @param \Proto\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Proto\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score = 2;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>uint32 score = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 user_rank = 3;</code>
     * @return int
     */
    public function getUserRank()
    {
        return $this->user_rank;
    }

    /**
     * Generated from protobuf field <code>uint32 user_rank = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUserRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 total_rank = 4;</code>
     * @return int
     */
    public function getTotalRank()
    {
        return $this->total_rank;
    }

    /**
     * Generated from protobuf field <code>uint32 total_rank = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.UserIVandGetScoreResponse.IVandScore scores = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.UserIVandGetScoreResponse.IVandScore scores = 5;</code>
     * @param array<\Proto\UserIVandGetScoreResponse\IVandScore>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\UserIVandGetScoreResponse\IVandScore::class);
        $this->scores = $arr;

        return $this;
    }

}

