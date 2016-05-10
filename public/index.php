<?php
/**
 * Created by IntelliJ IDEA.
 * User: KryDos
 * Date: 10/05/16
 * Time: 21:17
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app = new Slim\App();

$app->get('/{app_id}/{action_name}', function(Request $request, Response $response) {
    $app_id = $request->getAttribute('app_id');
    $action_name = $request->getAttribute('action_name');

    $actor = new \app\Actor($app_id);
    $action = new \app\Action($actor, $action_name);

    $db = new \app\DB();
    $db->saveAction($action);

    return $response->withJson([
        'status' => 'accepted',
        'app_id' => $app_id,
        'action' => $action_name
    ]);
});

$app->run();