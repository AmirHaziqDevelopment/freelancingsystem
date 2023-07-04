<?php
require 'vendor/autoload.php';

use Supabase\Client;

// Supabase credentials
$supabaseUrl = 'https://gpcollbertoepcwtwipr.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImdwY29sbGJlcnRvZXBjd3R3aXByIiwicm9sZSI6ImFub24iLCJpYXQiOjE2ODg0ODE0ODgsImV4cCI6MjAwNDA1NzQ4OH0.7b62SiVdm1KVJ2p7UdcqEqOIbyrjg5Hp_-fxAiX--Xk';

// Create Supabase client
$client = new Client($supabaseUrl, $supabaseKey);

// Check if the client is connected
if (!$client->isConnected()) {
    die('Supabase connection failed');
}

// Supabase does not require creating a connection explicitly

// Instead of using $conn, you can directly use $client to interact with Supabase

// Example query
$result = $client
    ->from('freelancing_system') // Replace 'freelancing_system' with your actual table name
    ->select('*')
    ->limit(10)
    ->execute();

if ($result->error) {
    die('Query execution failed: ' . $result->error->message);
}

// Access the query results
$rows = $result->data;
foreach ($rows as $row) {
    // Process each row
    // $row['column_name'] to access specific column values
}
?>
