<?php
// Shared helper: loads .env from this folder (or one folder above). Not meant to be opened in a browser.
if (basename($_SERVER["SCRIPT_FILENAME"] ?? "") === "env.php") { http_response_code(403); exit; }

function env_load(): array {
    foreach ([__DIR__ . "/../.env", __DIR__ . "/.env"] as $f) {
        if (is_readable($f)) {
            $o = [];
            foreach (file($f, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $l) {
                $l = trim($l);
                if ($l === "" || $l[0] === "#" || strpos($l, "=") === false) continue;
                [$k, $v] = explode("=", $l, 2);
                $o[trim($k)] = trim(trim($v), "\"\x27");
            }
            return $o;
        }
    }
    return [];
}
