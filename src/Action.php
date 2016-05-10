<?php

namespace app;

/**
 * Created by IntelliJ IDEA.
 * User: KryDos
 * Date: 10/05/16
 * Time: 21:23
 */
class Action
{
    /**
     * @var Actor $actor
     */
    private $actor;

    public function __construct(Actor $actor)
    {
        $this->actor = $actor;
    }

    /**
     * returns actor of the action
     *
     * @return Actor
     */
    public function getActor()
    {
        return $this->actor;
    }
}