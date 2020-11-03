<?php

namespace App\Models;

use PDO;

/**
 * Advertisement model
 *
 * PHP version 7.0
 */
class Advertisement extends \Core\Model
{
    /**
     * Get all the advertisements along with associated users, if any
     *
     * @return array The advertisement data with user's name
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT name, title FROM `advertisements` LEFT JOIN `users` ON `userid` = users.id ORDER BY users.name DESC;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
