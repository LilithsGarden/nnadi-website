<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Network Member</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #F7F3EC;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #F7F3EC;
        }
        .card {
            background: #FFFFFF;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(15, 27, 61, 0.08);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #c9a94e;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            font-family: 'Fraunces', 'Georgia', serif;
            font-weight: 300;
            font-size: 28px;
            color: #0F1B3D;
            margin: 0;
        }
        .header h1 span {
            color: #B08D57;
        }
        .content {
            color: #2A2A2F;
            line-height: 1.6;
            font-size: 15px;
        }
        .detail {
            background: #F7F3EC;
            padding: 15px 20px;
            border-radius: 8px;
            margin: 10px 0;
            border-left: 3px solid #c9a94e;
        }
        .detail strong {
            color: #0F1B3D;
        }
        .divider {
            border: 0;
            height: 1px;
            background: rgba(15, 27, 61, 0.1);
            margin: 30px 0;
        }
        .footer {
            text-align: center;
            color: #6B6558;
            font-size: 13px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(15, 27, 61, 0.1);
        }
        .badge {
            display: inline-block;
            background: #B08D57;
            color: #FFFFFF;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>🎉 New <span>Network Member</span></h1>
                <span class="badge">New Signup</span>
            </div>
            
            <div class="content">
                <p style="font-size: 18px; color: #0F1B3D;">Someone just joined the network!</p>
                
                <div class="detail">
                    <p><strong>📧 Email:</strong> {{ $email }}</p>
                    <p><strong>📱 Phone:</strong> {{ $phone }}</p>
                </div>
                
                <div class="detail">
                    <p><strong>🌐 IP Address:</strong> {{ $ipAddress }}</p>
                    <p><strong>📅 Joined at:</strong> {{ $joinedAt }}</p>
                </div>
                
                <p style="margin-top: 20px;">You can reach out to them directly using the contact details above.</p>
                
                <hr class="divider">
                
                <p style="font-size: 13px; color: #6B6558;">
                    This is an automated notification from <strong>Ifeanyi Nnadi</strong> website.
                </p>
            </div>
            
            <div class="footer">
                <p>&copy; {{ date('Y') }} Ifeanyi Nnadi. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>