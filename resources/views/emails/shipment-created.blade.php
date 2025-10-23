<!DOCTYPE html>
<html>
<head>
    <title>Shipment Created</title>
    <style>
        body { font-family: 'Open Sans', sans-serif; color: #555; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); }
        .header { background: linear-gradient(135deg, #004558 0%, #006b7a 100%); padding: 30px 20px; text-align: center; color: white; }
        .content { padding: 30px 20px; }
        .footer { background-color: #f5a623; padding: 20px; text-align: center; font-size: 12px; color: #555; }
        .button { display: inline-block; padding: 15px 30px; background: linear-gradient(135deg, #c41f1e 0%, #a01817 100%); color: white; text-decoration: none; border-radius: 25px; text-transform: uppercase; font-weight: bold; box-shadow: 0 6px 12px rgba(196, 31, 30, 0.3); transition: all 0.3s ease; }
        .button:hover { box-shadow: 0 8px 16px rgba(196, 31, 30, 0.4); }
        h1 { font-family: 'Pathway Gothic One', sans-serif; color: white; font-weight: 700; margin: 0; font-size: 28px; }
        h2 { font-family: 'Pathway Gothic One', sans-serif; color: #004558; font-weight: 700; margin-bottom: 10px; }
        p { line-height: 1.6; margin: 10px 0; }
        ul { list-style: none; padding: 0; }
        li { background-color: #f9f9f9; margin: 8px 0; padding: 10px; border-left: 4px solid #f5a623; }
        @media (min-width: 768px) {
            .container { max-width: 100%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Shipment Created Successfully</h1>
            <p>Your pet's journey begins here</p>
        </div>
        <div class="content">
            <h2>Hello {{ $recipientName ?? 'Valued Customer' }},</h2>
            <p>Welcome to Pets Travel International! We are excited to handle your pet's transportation with the highest standards of care and professionalism. Your shipment has been successfully created and is now in our system.</p>
            
            <div class="highlight">
                <h3>Shipment Details</h3>
                <ul>
                    <li><strong>Origin:</strong> {{ $shipment->origin ?? 'N/A' }}</li>
                    <li><strong>Destination:</strong> {{ $shipment->destination ?? 'N/A' }}</li>
                    <li><strong>Status:</strong> {{ $shipment->status ?? 'Created' }}</li>
                    <li><strong>Created At:</strong> {{ $shipment->created_at ? $shipment->created_at->format('Y-m-d H:i:s') : 'N/A' }}</li>
                </ul>
            </div>
            
            <p>Our team is dedicated to ensuring a smooth and stress-free experience for your pet. You will receive regular updates on the shipment's progress. If you have any special instructions or concerns, please let us know.</p>
            
            <p style="text-align: center;"><a href="{{ url('/tracking') }}" class="button">Track Your Shipment</a></p>
            
            <p>For any inquiries or to make changes, contact our customer support team at <a href="mailto:info@petstravelinternational.com">info@petstravelinternational.com</a> or call us at (123) 456-7890.</p>
            
            <p>If you're having trouble clicking the button, copy and paste this URL into your browser:<br><a href="{{ url('/tracking') }}">{{ url('/tracking') }}</a></p>
        </div>
        <div class="footer">
            <p><strong>Pets Travel International</strong><br>
            Your trusted partner in pet transportation<br>
            &copy; {{ date('Y') }} Pets Travel International. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
