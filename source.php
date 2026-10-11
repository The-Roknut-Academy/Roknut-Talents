<?php
// GPL v3: points visitors to the readable source code. Set SOURCE_URL in .env.
require __DIR__ . "/env.php";
$env = env_load();
$url = $env["SOURCE_URL"] ?? "";
if ($url !== "" && preg_match("#^https?://#i", $url)) {
    header("Location: " . $url, true, 302);
    exit;
}
header("Content-Type: text/plain; charset=utf-8");
echo "RokNut Talents is licensed under GPL v3 (see LICENSE). Contact the site owner for the source code.";
