<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm your email address to reset the password</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&display=swap');

        h2 {
            font-family: 'League Spartan', sans-serif !important;
        }

        p {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
</head>

<body>
    <div style="width: 50%; margin: 0% 25%; padding: 50px 20px;">
        <div class="mailHeader">
            <img src="https://crm.beeonline.xyz/assets/dist/img/logos/logo.png" style="width: 50%; margin: 0% 25%;" alt="Bee Crm">
            <h2 style="text-align: center; margin: 15px 0px 0px 0px;">Confirm your Email Address</h2>
        </div>
        <div class="mailContent">
            <p style="text-align: center; margin: 20px 0px; font-size: 12px;">We have recieved a request to reset the password for your BEE CRM Account. No changes have been made to  your account yet.</p>
            <p style="text-align: center; font-size: 12px;">You can reset your password by clicking the link below:</p>
            <div style="width: 50%; margin: 0% 25%; padding: 5px 0px; background-color: #007bff; border-radius: 0.2rem; text-align: center;">
                <a style="font-size: 10px; font-weight: 700; line-height: 1.5; text-decoration: none; color: #ffffff; text-align: center;" href={{ $url }}>Reset Your Password</a>
            </div>
        </div>
    </div>
</body>

</html>