<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{
            color: green;font-size: 34px;text-align: center;margin-bottom: 20px;
        }
        .form-box.active{
            width: 100%;max-width: 450px;padding: 30px;background: #fff;border-radius: 10px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);display: block;
        }
        
        p{
            color: #6e6702;margin-bottom: 10px;font-size:14.5px;
        }
        input{
            width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;
        }
        button{
            width: 100%;padding: 12px;background: #7494ec;border-radius: 6px;border: none;cursor: pointer;font-size: 16px;color: #fff;font-weight: 500;margin-bottom: 20px;transition: 0.5s;
        }
        button:hover{
            background: #060adb;
        }
        a{
            color: #060adb;text-decoration:underline;
        }
        .error-message {
            padding: 12px;
            background: #f8d7da;
            border-radius: 6px;
            font-size: 16px;
            color: #a42834;
            text-align: center;
            margin-bottom: 20px;
        }
   
        
    </style>
</head>
<body style="display: flex;justify-content: center;align-items: center;min-height: 100vh;background: linear-gradient(to right, #e2e2e2, #c9d6ff);color: #333;">
    <div style="margin: 0 15px;" class="container">
        <div class="form-box"  id="register-form">
            <form action="login_register.php" method="post">
                <h2 style="color: green;font-size: 34px;text-align: center;margin-bottom: 20px;">Register to YHWH.</h2>
                <p style="color: #6e6702;margin-bottom: 10px;font-size:14.5px;">YHWH secure your details.</p>
                <input style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" type="Username" name="Username" placeholder="Enter Username" required autocomplete="New-Username">
                <input style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" type="email" name="email" placeholder="Enter email" required autocomplete="New-email">
                <p style="color: red;margin-bottom: 10px;font-size:14.5px;">Please remember your password</p>
                <input style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" type="password" name="password" placeholder="Enter password" required autocomplete="New-password">
                <select style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" name="role" required>
                    <option style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" value="">--Select Role--</option>
                    <option style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" value="user">User</option>
                    <option style="width: 100%;padding: 12px;background: #eee;border-radius: 6px;border: none;outline: none;font-size: 16px;color: #333;margin-bottom: 20px;" value="admin">Admin</option>
                </select>
                <button style="width: 100%;padding: 12px;background: #7494ec;border-radius: 6px;border: none;cursor: pointer;font-size: 16px;color: #fff;font-weight: 500;margin-bottom: 20px;transition: 0.5s;" type="submit" name="Register">Register</button>
                <p style="color: green;"font-size: 20.5px;text-align: center;>Already heve an account? <a href="#" onclick="showForm('login-form')" >Login here</a></p>
            </form>

        </div>
    </div>


<script src="js/script4.js"></script>
</body>
</html>