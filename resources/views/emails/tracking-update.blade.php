<!DOCTYPE html>
<html>
<head>
    <title>Pet Tracking Update</title>
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
            <h1>Pet Tracking Update</h1>
            <p>Your pet's journey is our top priority</p>
        </div>
        <div class="content">
            <h2>Hello {{ $tracking->owner_name ?? 'Valued Customer' }},</h2>
            <p>We are pleased to provide you with the latest update on your pet's transportation journey. At Pets Travel International, we ensure every step is taken with the utmost care and professionalism.</p>
            
            <div class="highlight">
                <h3>Current Status Details</h3>
                <ul>
                    <li><strong>Pet Name:</strong> {{ $tracking->pet_name ?? 'N/A' }}</li>
                    <li><strong>Current Status:</strong> {{ $statusText ?? 'N/A' }}</li>
                    <li><strong>Location:</strong> {{ $update->location ?? 'N/A' }}</li>
                    <li><strong>Details:</strong> {{ $update->description ?? 'No additional details available.' }}</li>
                    <li><strong>Tracking Number:</strong> {{ $tracking->tracking_number ?? 'N/A' }}</li>
                </ul>
            </div>
            
            <p>Thank you for choosing Pets Travel International for your pet's transportation needs. We are committed to providing safe, reliable, and compassionate service.</p>
            
            <p style="text-align: center;"><a href="{{ $viewUrl }}" class="button">View Full Tracking Details</a></p>
            
            <p>If you have any questions or need assistance, please don't hesitate to contact our support team at <a href="mailto:info@petstravelinternational.com">info@petstravelinternational.com</a> or call us at (123) 456-7890.</p>
            
            <p>If you're having trouble clicking the button, copy and paste this URL into your browser:<br><a href="{{ $viewUrl }}">{{ $viewUrl }}</a></p>
        </div>
        <div class="footer">
            <p><strong>Pets Travel International</strong><br>
            Your trusted partner in pet transportation<br>
            &copy; {{ date('Y') }} Pets Travel International. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
