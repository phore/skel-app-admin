<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 14.11.18
 * Time: 13:37
 */

namespace AppAdmin;

use App\AppServices;
use Phore\FileSystem\PhoreTempFile;
use Phore\HttpClient\Handler\PhoreHttpFileStream;
use Phore\MicroApp\Type\Request;
use Phore\MicroApp\Type\RouteParams;
use Phore\StatusPage\BasicAuthStatusPageApp;
use Phore\StatusPage\PageHandler\NaviButtonWithIcon;

require __DIR__ . "/../../vendor/autoload.php";

$app = new BasicAuthStatusPageApp("DaFOh", "/admin");
$app->addModule(new AppServices());
$app->allowUser("admin", "demo123");

$app->addPage("/admin/", function () {

    $e = pt()->card(
        "Overview of configured machines",
        ["b" => "Hello admin!"]
    );
    return $e;

}, new NaviButtonWithIcon("Overview", "fas fa-home"));

$app->serve();
