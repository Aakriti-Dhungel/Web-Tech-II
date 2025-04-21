<?php
/*
3. Create a PHP page that uses HTTP Basic Authentication to protect access. 
Only users with the correct username and password should be able to view the page.

*/

// Check if the user has not sent login credentials
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // Ask the browser to show the login popup
    header('WWW-Authenticate: Basic realm="Protected Page"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You must enter valid credentials to access this page.';
    exit;
} else {
    // Check if the username and password are correct
    if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'secret') {
        echo "Welcome, " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "!";
    } else {
        // If credentials are wrong, show error
        header('HTTP/1.0 401 Unauthorized');
        echo "Invalid username or password.";
        exit;
    }
}
?>
