<?php
/**
 * Created by IntelliJ IDEA.
 * User: KryDos
 * Date: 10/05/16
 * Time: 21:36
 */

namespace app;

class DB
{

    /** MongoDB
     * @var
     */
    private $instance;

    const DB_NAME = 'gifs_backend';

    public function __construct()
    {
        if ($this->instance == null) {
            $this->instance = (new \MongoClient())->selectDB('gifs_backend');
        }

        return $this->instance;
    }

    public function saveAction(Action $action)
    {
        $collection = $this->instance->selectCollection('actions');
        $collection->update([
            'app_id' => $action->getActor()->getActorId(),
            'action_name' => $action->getActionName()
        ], [
            '$inc' => [
                'amount' => 1
            ]
        ], [
            'upsert' => true
        ]);
    }
}