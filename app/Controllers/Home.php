<?php

namespace App\Controllers;

use App\Models\TrackingModel;
use App\Models\TrackingTimelineModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Home | Royal Mail Group Ltd',
            'metaDescription' => 'Send letters and parcels with Royal Mail. Track your delivery, find prices and book collections.',
        ];

        return view('home/index', $data);
    }

    public function track($trackingNumber = null): string
    {
        $data = [
            'pageTitle' => 'Track Your Item | Royal Mail Group Ltd',
            'metaDescription' => 'Track your Royal Mail delivery with our tracking service.',
            'trackingNumber' => $trackingNumber,
            'trackingData' => $this->getTrackingData($trackingNumber),
        ];

        return view('home/track', $data);
    }

    public function trackSubmit()
    {
        $trackingNumber = $this->request->getPost('tracking_number');

        if (empty($trackingNumber)) {
            return redirect()->to('/track')->with('error', 'Please enter a tracking number.');
        }

        // Validate tracking number format
        if (!preg_match('/^[A-Za-z0-9]{10,20}$/', $trackingNumber)) {
            return redirect()->to('/track')->with('error', 'Invalid tracking number format.');
        }

        return redirect()->to('/track/' . $trackingNumber);
    }

    /**
     * Get tracking data from database
     */
    private function getTrackingData($trackingNumber)
    {
        if (empty($trackingNumber)) {
            return null;
        }

        $trackingModel = new TrackingModel();
        $timelineModel = new TrackingTimelineModel();

        // Get tracking record from database
        $tracking = $trackingModel->getByTrackingNumber($trackingNumber);

        if (!$tracking) {
            // Return mock data for demo purposes if not found in database
            return $this->getMockTrackingData($trackingNumber);
        }

        // Get timeline events
        $timeline = $timelineModel->getFormattedTimeline($tracking['id']);

        // Format data for display
        $statusColors = [
            'pending' => 'warning',
            'collected' => 'info',
            'in_transit' => 'primary',
            'out_for_delivery' => 'info',
            'delivered' => 'success',
            'failed_delivery' => 'danger',
            'returned' => 'secondary'
        ];

        return [
            'tracking_number' => $tracking['tracking_number'],
            'status' => ucfirst(str_replace('_', ' ', $tracking['status'])),
            'status_class' => $statusColors[$tracking['status']] ?? 'secondary',
            'service_type' => $tracking['service_type'],
            'estimated_delivery' => $tracking['estimated_delivery'] ? date('d M Y', strtotime($tracking['estimated_delivery'])) : 'TBC',
            'sender' => [
                'company' => $tracking['sender_company'],
                'contact' => $tracking['sender_contact'],
                'address' => $tracking['sender_address'],
                'phone' => $tracking['sender_phone'] ?: 'Not provided',
                'email' => $tracking['sender_email'] ?: 'Not provided',
                'reference' => $tracking['sender_reference'] ?: 'Not provided'
            ],
            'receiver' => [
                'name' => ($tracking['receiver_title'] ? $tracking['receiver_title'] . ' ' : '') . $tracking['receiver_name'],
                'title' => $tracking['receiver_title'] ?: '',
                'address' => $tracking['receiver_address'],
                'phone' => $tracking['receiver_phone'] ?: 'Not provided',
                'email' => $tracking['receiver_email'] ?: 'Not provided',
                'instructions' => $tracking['receiver_instructions'] ?: 'None'
            ],
            'parcel' => [
                'type' => $tracking['parcel_type'],
                'weight' => $tracking['parcel_weight'] ?: 'Not specified',
                'dimensions' => $tracking['parcel_dimensions'] ?: 'Not specified',
                'contents' => $tracking['parcel_contents'],
                'value' => $tracking['parcel_value'] ? '£' . number_format($tracking['parcel_value'], 2) : 'Not declared',
                'insurance' => $tracking['parcel_insurance'] ? '£' . number_format($tracking['parcel_insurance'], 2) : 'None',
                'postage' => $tracking['parcel_postage'] ? '£' . number_format($tracking['parcel_postage'], 2) : 'Not specified',
                'signature_required' => (bool)$tracking['signature_required']
            ],
            'location' => [
                'current' => $tracking['current_location'] ?: 'In transit',
                'facility' => $tracking['current_facility'] ?: 'Processing facility',
                'address' => $tracking['facility_address'] ?: 'Various locations',
                'distance' => $tracking['distance_from_destination'] ?: 'Calculating...',
                'postcode_area' => $tracking['postcode_area'] ?: 'Multiple areas',
                'delivery_round' => $tracking['delivery_round'] ?: 'TBC',
                'last_updated' => $tracking['last_location_update'] ? date('d M Y H:i', strtotime($tracking['last_location_update'])) : date('d M Y H:i', strtotime($tracking['updated_at']))
            ],
            'timeline' => $timeline
        ];
    }

    /**
     * Get mock tracking data for demo purposes
     */
    private function getMockTrackingData($trackingNumber)
    {
        // Mock tracking data - for demo purposes when no real data exists
        return [
            'tracking_number' => strtoupper($trackingNumber),
            'status' => 'Delivered',
            'status_class' => 'success',
            'estimated_delivery' => 'Delivered on 15 Jan 2025 at 2:30 PM',
            'service_type' => 'Special Delivery Guaranteed',
            'sender' => [
                'company' => 'Amazon UK Services Ltd',
                'contact' => 'Customer Service Team',
                'address' => "Amazon Fulfillment Centre\n1 Principal Place\nLondon, EC2A 2FA",
                'phone' => '0800 279 7234',
                'email' => 'customer-service@amazon.co.uk',
                'reference' => 'AMZ-2025-001234'
            ],
            'receiver' => [
                'name' => 'John Smith',
                'title' => 'Mr.',
                'address' => "123 Main Street\nApartment 4B\nLondon, SW1A 1AA",
                'phone' => '+44 7700 900123',
                'email' => 'john.smith@email.com',
                'instructions' => 'Leave with neighbour if not available'
            ],
            'parcel' => [
                'type' => 'Medium Parcel',
                'weight' => '1.2 kg',
                'dimensions' => '30cm x 20cm x 10cm',
                'contents' => 'Electronics - Mobile Phone Case',
                'value' => '£25.99',
                'insurance' => '£500.00',
                'postage' => '£8.95',
                'signature_required' => true
            ],
            'location' => [
                'current' => 'Delivered',
                'facility' => 'London Central DO',
                'address' => "45 Delivery Road\nLondon, SW1A 2BB",
                'distance' => '0 miles - Delivered',
                'postcode_area' => 'SW1A',
                'delivery_round' => 'Round 15B',
                'last_updated' => '15 Jan 2025, 2:30 PM'
            ],
            'timeline' => [
                [
                    'status' => 'Delivered',
                    'date' => '15 Jan 2025 at 2:30 PM',
                    'description' => 'Item delivered to recipient',
                    'location' => 'Your address',
                    'icon' => 'fas fa-check-circle',
                    'color' => 'success'
                ],
                [
                    'status' => 'Out for delivery',
                    'date' => '15 Jan 2025 at 8:45 AM',
                    'description' => 'Item out for delivery',
                    'location' => 'Local delivery office',
                    'icon' => 'fas fa-truck',
                    'color' => 'primary'
                ],
                [
                    'status' => 'In transit',
                    'date' => '14 Jan 2025 at 6:20 PM',
                    'description' => 'Item in transit',
                    'location' => 'Regional sorting facility',
                    'icon' => 'fas fa-shipping-fast',
                    'color' => 'info'
                ],
                [
                    'status' => 'Processed',
                    'date' => '13 Jan 2025 at 11:15 AM',
                    'description' => 'Item processed at facility',
                    'location' => 'Mail centre',
                    'icon' => 'fas fa-cog',
                    'color' => 'secondary'
                ]
            ]
        ];
    }
}
