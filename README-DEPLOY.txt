DEPLOY TO IONOS (flat layout: every file in one folder)
1. Upload ALL files (including hidden .htaccess and .env) into the folder your domain points to.
2. Edit .env: set APP_URL and SOURCE_URL. For extra safety move .env one folder above the web folder.
3. IONOS > Hosting > PHP: use 8.1+ (only source.php needs PHP).
4. Open your domain: index.html loads the app. Share links (?query) work as before.
Embedding in other sites: edit frame-ancestors in .htaccess.

GPL v3: derived from RoK Talents (Simon Ho). Keep LICENSE, and offer the readable source (source.php -> SOURCE_URL).
