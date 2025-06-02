<?php

/**
 * Tracking System Setup Script
 * 
 * This script sets up the tracking system by:
 * 1. Running database migrations
 * 2. Creating sample tracking data
 * 3. Setting up the admin user if needed
 */

require_once 'vendor/autoload.php';

// Load CodeIgniter
$app = \Config\Services::codeigniter();
$app->initialize();

echo "🚀 Setting up Royal Mail Tracking System...\n\n";

// Run migrations
echo "📊 Running database migrations...\n";
try {
    $migrate = \Config\Services::migrations();
    $migrate->latest();
    echo "✅ Migrations completed successfully!\n\n";
} catch (Exception $e) {
    echo "❌ Migration failed: " . $e->getMessage() . "\n";
    exit(1);
}

// Create sample tracking data
echo "📦 Creating sample tracking data...\n";

$db = \Config\Database::connect();

// Sample tracking records
$sampleData = [
    [
        'tracking_number' => 'RM123456789GB',
        'status' => 'delivered',
        'service_type' => 'Special Delivery Guaranteed',
        'estimated_delivery' => date('Y-m-d H:i:s', strtotime('+1 day')),
        'actual_delivery' => date('Y-m-d H:i:s'),
        'sender_company' => 'Amazon UK Services Ltd',
        'sender_contact' => 'Customer Service Team',
        'sender_address' => "Amazon Fulfillment Centre\n1 Principal Place\nLondon, EC2A 2FA",
        'sender_phone' => '0800 279 7234',
        'sender_email' => 'customer-service@amazon.co.uk',
        'sender_reference' => 'AMZ-2025-001234',
        'receiver_name' => 'John Smith',
        'receiver_title' => 'Mr',
        'receiver_address' => "123 Main Street\nApartment 4B\nLondon, SW1A 1AA",
        'receiver_phone' => '+44 7700 900123',
        'receiver_email' => 'john.smith@email.com',
        'receiver_instructions' => 'Leave with neighbour if not available',
        'parcel_type' => 'Medium Parcel',
        'parcel_weight' => '1.2kg',
        'parcel_dimensions' => '30cm x 20cm x 10cm',
        'parcel_contents' => 'Electronics - Mobile Phone Case',
        'parcel_value' => 25.99,
        'parcel_insurance' => 500.00,
        'parcel_postage' => 8.95,
        'signature_required' => 1,
        'current_location' => 'Delivered',
        'current_facility' => 'London Central DO',
        'facility_address' => "45 Delivery Road\nLondon, SW1A 2BB",
        'distance_from_destination' => '0 miles - Delivered',
        'postcode_area' => 'SW1A',
        'delivery_round' => 'Round 15B',
        'last_location_update' => date('Y-m-d H:i:s'),
        'created_by' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'tracking_number' => 'RM987654321GB',
        'status' => 'in_transit',
        'service_type' => 'First Class',
        'estimated_delivery' => date('Y-m-d H:i:s', strtotime('+2 days')),
        'sender_company' => 'ASOS.com Limited',
        'sender_contact' => 'Dispatch Team',
        'sender_address' => "ASOS Warehouse\nGreater London House\nHampstead Road\nLondon, NW1 7FB",
        'sender_phone' => '0871 230 2798',
        'sender_email' => 'help@asos.com',
        'sender_reference' => 'ASOS-ORD-789456',
        'receiver_name' => 'Sarah Johnson',
        'receiver_title' => 'Ms',
        'receiver_address' => "456 Oak Avenue\nFlat 2\nManchester, M1 2AB",
        'receiver_phone' => '+44 7800 123456',
        'receiver_email' => 'sarah.johnson@email.com',
        'receiver_instructions' => 'Ring doorbell twice',
        'parcel_type' => 'Large Letter',
        'parcel_weight' => '0.8kg',
        'parcel_dimensions' => '35cm x 25cm x 3cm',
        'parcel_contents' => 'Clothing - Dress and Accessories',
        'parcel_value' => 89.99,
        'parcel_insurance' => 100.00,
        'parcel_postage' => 3.95,
        'signature_required' => 0,
        'current_location' => 'Regional Sorting Facility',
        'current_facility' => 'Manchester Mail Centre',
        'facility_address' => "Manchester Mail Centre\nOldham Road\nManchester, M4 5AA",
        'distance_from_destination' => '15 miles',
        'postcode_area' => 'M1',
        'delivery_round' => 'Round 8A',
        'last_location_update' => date('Y-m-d H:i:s', strtotime('-2 hours')),
        'created_by' => 1,
        'created_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
        'updated_at' => date('Y-m-d H:i:s', strtotime('-2 hours'))
    ],
    [
        'tracking_number' => 'RM555666777GB',
        'status' => 'out_for_delivery',
        'service_type' => 'Special Delivery Guaranteed by 1pm',
        'estimated_delivery' => date('Y-m-d H:i:s'),
        'sender_company' => 'John Lewis Partnership',
        'sender_contact' => 'Online Orders',
        'sender_address' => "John Lewis Distribution Centre\nBracknell, RG12 8FB",
        'sender_phone' => '0345 604 9049',
        'sender_email' => 'online@johnlewis.com',
        'sender_reference' => 'JL-2025-456789',
        'receiver_name' => 'Michael Brown',
        'receiver_title' => 'Dr',
        'receiver_address' => "789 High Street\nBirmingham, B1 3CD",
        'receiver_phone' => '+44 7900 654321',
        'receiver_email' => 'michael.brown@email.com',
        'receiver_instructions' => 'Delivery to reception desk',
        'parcel_type' => 'Small Parcel',
        'parcel_weight' => '2.1kg',
        'parcel_dimensions' => '25cm x 15cm x 12cm',
        'parcel_contents' => 'Home & Garden - Kitchen Appliance',
        'parcel_value' => 149.99,
        'parcel_insurance' => 200.00,
        'parcel_postage' => 12.95,
        'signature_required' => 1,
        'current_location' => 'Out for delivery',
        'current_facility' => 'Birmingham Delivery Office',
        'facility_address' => "Birmingham DO\nAston University\nAston Triangle\nBirmingham, B4 7ET",
        'distance_from_destination' => '2 miles',
        'postcode_area' => 'B1',
        'delivery_round' => 'Round 3C',
        'last_location_update' => date('Y-m-d H:i:s', strtotime('-30 minutes')),
        'created_by' => 1,
        'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
        'updated_at' => date('Y-m-d H:i:s', strtotime('-30 minutes'))
    ]
];

// Insert sample tracking data
foreach ($sampleData as $data) {
    // Check if tracking number already exists
    $existing = $db->table('tracking_parcels')
                  ->where('tracking_number', $data['tracking_number'])
                  ->get()
                  ->getRow();
    
    if (!$existing) {
        $db->table('tracking_parcels')->insert($data);
        echo "✅ Created tracking record: " . $data['tracking_number'] . "\n";
        
        // Get the inserted ID
        $trackingId = $db->insertID();
        
        // Create timeline events for this tracking
        createTimelineEvents($db, $trackingId, $data['status'], $data['tracking_number']);
    } else {
        echo "⚠️  Tracking record already exists: " . $data['tracking_number'] . "\n";
    }
}

echo "\n📈 Sample tracking data created successfully!\n\n";

// Check admin user
echo "👤 Checking admin user...\n";
$adminExists = $db->table('admin_users')
                 ->where('username', 'admin')
                 ->get()
                 ->getRow();

if (!$adminExists) {
    echo "⚠️  No admin user found. Please run setup_admin.php first.\n";
} else {
    echo "✅ Admin user exists.\n";
}

echo "\n🎉 Tracking system setup completed!\n\n";

echo "📋 Next Steps:\n";
echo "1. Visit: http://your-domain.com/admin/tracking\n";
echo "2. Login with admin credentials\n";
echo "3. Manage tracking records\n";
echo "4. Test public tracking at: http://your-domain.com/track\n\n";

echo "🧪 Test Tracking Numbers:\n";
foreach ($sampleData as $data) {
    echo "   • " . $data['tracking_number'] . " (" . ucfirst(str_replace('_', ' ', $data['status'])) . ")\n";
}

echo "\n✨ Setup complete! Happy tracking! 🚚\n";

/**
 * Create timeline events for tracking record
 */
function createTimelineEvents($db, $trackingId, $status, $trackingNumber)
{
    $events = [];
    $currentTime = time();
    
    switch ($status) {
        case 'delivered':
            $events = [
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Processed',
                    'description' => 'Item processed at facility',
                    'location' => 'Mail centre',
                    'facility' => 'Regional Mail Centre',
                    'event_date' => date('Y-m-d', $currentTime - 259200), // 3 days ago
                    'event_time' => '11:15:00',
                    'icon' => 'fas fa-cog',
                    'color' => 'secondary',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'In transit',
                    'description' => 'Item in transit',
                    'location' => 'Regional sorting facility',
                    'facility' => 'Sorting Centre',
                    'event_date' => date('Y-m-d', $currentTime - 172800), // 2 days ago
                    'event_time' => '18:20:00',
                    'icon' => 'fas fa-shipping-fast',
                    'color' => 'info',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Out for delivery',
                    'description' => 'Item out for delivery',
                    'location' => 'Local delivery office',
                    'facility' => 'Delivery Office',
                    'event_date' => date('Y-m-d', $currentTime - 86400), // 1 day ago
                    'event_time' => '08:45:00',
                    'icon' => 'fas fa-truck',
                    'color' => 'primary',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Delivered',
                    'description' => 'Item delivered to recipient',
                    'location' => 'Your address',
                    'facility' => 'Customer Address',
                    'event_date' => date('Y-m-d'),
                    'event_time' => '14:30:00',
                    'icon' => 'fas fa-check-circle',
                    'color' => 'success',
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ];
            break;
            
        case 'in_transit':
            $events = [
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Collected',
                    'description' => 'Item collected from sender',
                    'location' => 'Collection Point',
                    'facility' => 'Local Post Office',
                    'event_date' => date('Y-m-d', $currentTime - 86400),
                    'event_time' => '10:30:00',
                    'icon' => 'fas fa-box',
                    'color' => 'info',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'In Transit',
                    'description' => 'Item in transit to destination',
                    'location' => 'Regional Sorting Facility',
                    'facility' => 'Mail Centre',
                    'event_date' => date('Y-m-d'),
                    'event_time' => '06:15:00',
                    'icon' => 'fas fa-shipping-fast',
                    'color' => 'primary',
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ];
            break;
            
        case 'out_for_delivery':
            $events = [
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Collected',
                    'description' => 'Item collected from sender',
                    'location' => 'Collection Point',
                    'facility' => 'Local Post Office',
                    'event_date' => date('Y-m-d', $currentTime - 172800),
                    'event_time' => '09:00:00',
                    'icon' => 'fas fa-box',
                    'color' => 'info',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'In Transit',
                    'description' => 'Item in transit to destination',
                    'location' => 'Regional Sorting Facility',
                    'facility' => 'Mail Centre',
                    'event_date' => date('Y-m-d', $currentTime - 86400),
                    'event_time' => '15:45:00',
                    'icon' => 'fas fa-shipping-fast',
                    'color' => 'primary',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'tracking_id' => $trackingId,
                    'status' => 'Out for Delivery',
                    'description' => 'Item out for delivery',
                    'location' => 'Local Delivery Office',
                    'facility' => 'Delivery Office',
                    'event_date' => date('Y-m-d'),
                    'event_time' => '07:30:00',
                    'icon' => 'fas fa-truck',
                    'color' => 'info',
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ];
            break;
    }
    
    // Insert timeline events
    foreach ($events as $event) {
        $db->table('tracking_timeline')->insert($event);
    }
    
    echo "   📅 Created " . count($events) . " timeline events for " . $trackingNumber . "\n";
}
