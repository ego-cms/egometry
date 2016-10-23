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

    /**
     * @var string $action_name
     */
    private $action_name;

    public function __construct(Actor $actor, $action_name)
    {
        $this->actor = $actor;
        $this->action_name = $action_name;
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

    /**
     * returns action name
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->action_name;
    }
}