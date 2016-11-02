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

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true // kind of debug=true
    ]
]);

/**
 * just register PhpRenderer and set path to our templates
 */
$container = $app->getContainer();
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates/');
};

/**
  * return list of all applications available 
 */
$app->get('/', function (Request $request, Response $response) {
    $db = new \app\DB();
    return $this->view->render($response, 'list_of_apps.php', [
        'apps' => $db->getAvailableApps()
    ]);
});

/**
 * return statistic of actions for selected application
 */
$app->get('/get_stats_for/{app_name}', function (Request $request, Response $response) {
    $app_name = $request->getAttribute('app_name');
    $db = new \app\DB();

    return $this->view->render($response, 'stats.php', [
        'apps' => $db->getAvailableApps(),
        'stats' => $db->getStatsForApp($app_name)
    ]);
});

/**
 * save new action
 */
$app->get('/save/{app_id}/{action_name}', function(Request $request, Response $response) {
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