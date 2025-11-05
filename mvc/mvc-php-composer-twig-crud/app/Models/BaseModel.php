<?php
namespace App\Models;
use Core\DB;
use PDO;
abstract class BaseModel {
    protected static function pdo(): PDO { return DB::pdo(); }
}
