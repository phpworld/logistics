<?php

/**
 * Admin Panel Setup Script
 * 
 * This script helps set up the admin panel by running migrations and seeders.
 * Run this script from the command line: php setup_admin.php
 */

// Check if running from command line
if (php_sapi_name() !== 'cli') {
    die("This script must be run from the command line.\n");
}

echo "=== Admin Panel Setup ===\n\n";

// Check if we're in the right directory
if (!file_exists('spark')) {
    die("Error: Please run this script from the CodeIgniter root directory.\n");
}

echo "1. Running database migrations...\n";
$output = shell_exec('php spark migrate 2>&1');
echo $output . "\n";

echo "2. Running admin user seeder...\n";
$output = shell_exec('php spark db:seed AdminUserSeeder 2>&1');
echo $output . "\n";

echo "=== Setup Complete ===\n\n";
echo "Your admin panel is now ready!\n\n";
echo "Access your admin panel at: http://your-domain.com/admin\n";
echo "Default login credentials:\n";
echo "  Username: admin\n";
echo "  Password: password123\n\n";
echo "IMPORTANT: Please change the default password after first login!\n\n";
echo "Admin panel features:\n";
echo "  - Dashboard with system statistics\n";
echo "  - User management (create, edit, delete admin users)\n";
echo "  - Role-based access control (Super Admin, Admin, Moderator)\n";
echo "  - System settings management\n";
echo "  - Responsive design with Bootstrap 5\n";
echo "  - Session-based authentication with remember me option\n\n";
echo "Enjoy your new admin panel!\n";
?>
