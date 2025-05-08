<!DOCTYPE html>
<html>
<head>
    <title>Social Network - Mailing</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="text-align: center;">
        <h1 style="color: #212529;">Hello {{ $name }}</h1>
        <p style="color: #6c757d; font-size: 1.25rem;">
            This message sent to: {{ $email }}.
            Please click on the link below to confirm your inscription.
        </p>
        <a href="{{ $link }}" style="display: inline-block; margin-top: 10px; padding: 10px 20px; color: #198754; border: 1px solid #198754; text-decoration: none; border-radius: 5px;">
            Confirm Inscription
        </a>
    </div>
    <footer style="text-align: center; margin-top: 40px; color: #6c757d;">
        &copy; 2025
    </footer>
</body>
</html>
