<?php

namespace app;

/**
 * Created by IntelliJ IDEA.
 * User: KryDos
 * Date: 10/05/16
 * Time: 21:23
 */
class Actor
{
    /**
     * @var string $actor_id
     */
    private $actor_id;

    public function __construct($actor_id)
    {
        $this->actor_id = $actor_id;
    }

    /**
     * returns actor id
     *
     * @return string
     */
    public function getActorId()
    {
        return $this->actor_id;
    }
}