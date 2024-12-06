<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9e2e6; /* Light pink background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
            transition: transform 0.3s;
        }
        .login-container:hover {
            transform: scale(1.02);
        }
        h1 {
            color: #d5006d; /* Pink accent color */
            margin-bottom: 20px;
            font-weight: 700;
        }
        input {
            margin: 10px 0;
            padding: 12px;
            width: 100%;
            border: 1px solid #e0a3b0; /* Light pink border */
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input:focus {
            border-color: #d5006d;
            box-shadow: 0 0 5px rgba(213, 0, 109, 0.5);
            outline: none;
        }
        input[type="button"] {
            background-color: #d5006d; /* Pink button */
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }
        input[type="button"]:hover {
            background-color: #b0004d; /* Darker pink on hover */
            transform: translateY(-2px);
        }
        p {
            margin-top: 15px;
            color: #666;
            font-size: 14px;
        }
        a {
            color: #d5006d; /* Pink link color */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form>
            <input type="text" placeholder="Nama" id="nama" required/>
            <input type="email" placeholder="Email" id="email" required/>
            <input type="password" placeholder="Password" id="password" required/>
            <input type="button" value="Login" id="tombol"/>
        </form>
        <p>Belum punya akun? <a href="#">Daftar sekarang</a></p>
    </div>

    <script>
        const btnTombol = document.querySelector("#tombol");
        const txtEmail = document.querySelector("#email");
        const txtNama = document.querySelector("#nama");
        const txtPassword = document.querySelector("#password");

        // Data pengguna untuk demonstrasi
        const users = [
            { nama: 'nada', email: "nadzhaar@gmail.com", password: "nadanabila" },
        ];

        btnTombol.addEventListener("click", function () {
            const user = users.find(u => u.email === txtEmail.value);

            if (user) {
                // Memeriksa password jika email ditemukan
                if (user.password === txtPassword.value) {
                    window.location = "WebsiteMowie.php";
                } else {
                    alert("Password salah.");
                }
            } else {
                alert("Email belum terdaftar.");
            }
        });
    </script>
</body>
</html>