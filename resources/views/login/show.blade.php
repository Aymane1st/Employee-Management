<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        <h2>Login</h2>
        @csrf <!-- Ajoutez ceci si vous utilisez Laravel pour protéger votre formulaire contre les attaques CSRF -->
        <div>
            <label for="email">Username or Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
