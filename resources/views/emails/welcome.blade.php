<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Network</title>
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
            font-size: 32px;
            color: #0F1B3D;
            margin: 0;
        }
        .header h1 span {
            color: #B08D57;
        }
        .content {
            color: #2A2A2F;
            line-height: 1.6;
            font-size: 16px;
        }
        .content p {
            margin-bottom: 20px;
        }
        .content strong {
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
        .highlight {
            color: #B08D57;
            font-weight: 600;
        }
        .button {
            display: inline-block;
            background: #0F1B3D;
            color: #FFFFFF;
            padding: 12px 30px;
            border-radius: 999px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>Welcome to <span>Ifeanyi Nnadi's</span> Network</h1>
            </div>
            
            <div class="content">
                <p>Hello <strong>{{ $name }}</strong>,</p>
                
                <p>Thank you for joining <strong>Ifeanyi Nnadi's</strong> professional network. You are now part of a community built around growth, reputation, and strategic opportunity.</p>
                
                <p>As a member, you'll receive:</p>
                <ul style="padding-left: 20px; color: #2A2A2F;">
                    <li style="margin-bottom: 8px;">📊 Exclusive insights on reputation strategy and business growth</li>
                    <li style="margin-bottom: 8px;">🎤 Updates on speaking engagements and thought leadership</li>
                    <li style="margin-bottom: 8px;">🤝 Early access to networking opportunities and events</li>
                    <li style="margin-bottom: 8px;">📰 Curated content from Ifeanyi Nnadi</li>
                </ul>
                
                <p>We believe in meaningful connections and substance over noise. We're glad you're here.</p>
                
                <div style="text-align: center; margin: 30px 0;">
                    <a href="https://ifeanyinnadi.com" class="button">Visit Website</a>
                </div>
                
                <hr class="divider">
                
                <p style="font-size: 14px; color: #6B6558;">
                    This is an automated message from <strong>Ifeanyi Nnadi</strong>. You received this email because you joined the network through our website.
                </p>
            </div>
            
            <div class="footer">
                <p>&copy; {{ date('Y') }} Ifeanyi Nnadi. All rights reserved.</p>
                <p style="font-size: 12px; color: #8a8a8a;">Abuja · Nigeria · West Africa</p>
            </div>
        </div>
    </div>
</body>
</html>