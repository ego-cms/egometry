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
            $this->instance = (new \MongoDB\Client('mongodb://egometry_mongo/'))->selectDatabase('gifs_backend');
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

    public function getAvailableApps()
    {
        $data = $this->instance->selectCollection('actions')->distinct('app_id');

        if (!is_array($data)) {
            return [];
        }

        return $data;
    }

    public function getStatsForApp($app_name)
    {
        $collection = $this->instance->selectCollection('actions');
        $data = $collection->aggregate([
            ['$match' => [
                'app_id' => $app_name
            ]],
            ['$group' => [
                '_id' => '$action_name',
                'amount' => [
                    '$sum' => '$amount'
                ]
            ]]
        ]);

        if (!empty($data['result'])) {
            return $data['result'];
        }

        return [];
    }
}