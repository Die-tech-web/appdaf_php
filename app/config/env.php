<?php

use Dotenv\Dotenv;



if (file_exists(__DIR__ . '/../../.env')) {
    // ✅ Environnement local : charger le fichier .env
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();
}

// 🔁 Récupération des variables d'environnement (local ou Render)
define('DB_HOST', getenv('DB_HOST') ?: $_ENV['DB_HOST'] ?? '');
define('DB_PORT', getenv('DB_PORT') ?: $_ENV['DB_PORT'] ?? '');
define('DB_DRIVE', getenv('DB_DRIVE') ?: $_ENV['DB_DRIVE'] ?? '');
define('DB_USER', getenv('DB_USER') ?: $_ENV['DB_USER'] ?? '');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: $_ENV['DB_PASSWORD'] ?? '');
define('DB_NAME', getenv('DB_NAME') ?: $_ENV['DB_NAME'] ?? '');
define('METHODE_INSTANCE_NAME', getenv('METHODE_INSTANCE_NAME') ?: $_ENV['METHODE_INSTANCE_NAME'] ?? '');
