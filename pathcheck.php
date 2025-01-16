$databasePath = __DIR__ . '/../../config/database.php';
if (!file_exists($databasePath)) {
    throw new Exception("database.php file not found at: " . $databasePath);
}
require_once $databasePath;