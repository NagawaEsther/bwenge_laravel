<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bwenge Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff; 
        }

        .header {
            background-color: Blue; 
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 60px 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            width: 60%;
        }

        .main h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: Red; 
        }

        .main p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .main button {
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            background-color: Blue; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            width: 200px;
        }

        .main button:hover {
            background-color: Blue;
        }

        .footer {
            background-color: Red; 
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer p {
            font-size: 1rem;
            margin: 0;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

  
    <div class="header">
        Bwenge Admin Dashboard
    </div>

   
    <div class="main">
        <h1>Welcome to Bwenge Admin Dashboard</h1>
        <p>Manage your site with ease. Please login to proceed.</p>
        <button onclick="window.location.href='{{ route('login') }}'">Login</button>
    </div>

 
    <div class="footer">
        <p>&copy; 2025 Bwenge Website. All rights reserved. <br> Contact: <a href="mailto:info@bwenge.com">info@bwenge.com</a></p>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>

</html>
