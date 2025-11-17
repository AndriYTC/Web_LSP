<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | LSP</title>
  <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      /* Background image transparan dengan overlay putih */
      background: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),
                  url('img/gpendartaran.jpeg') no-repeat center center;
      background-size: cover;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.85); /* semi-transparan agar kontras */
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      text-align: center;
      animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container h2 {
      margin-bottom: 25px;
      color: #007bff;
      font-size: 26px;
      font-weight: 600;
    }

    .input-group {
      text-align: left;
      margin-bottom: 18px;
    }

    .input-group label {
      display: block;
      font-size: 14px;
      color: #333;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 10px 12px;
      border: 2px solid #e0e0e0;
      border-radius: 6px;
      font-size: 15px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .input-group input:focus {
      border-color: #007bff;
    }

    .btn-login, .btn-back {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      border: none;
      margin-top: 10px;
    }

    .btn-login {
      background-color: #007bff;
      color: #fff;
    }

    .btn-login:hover {
      background-color: #005fcc;
    }

    .btn-back {
      background-color: #e0e0e0;
      color: #333;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    .btn-back:hover {
      background-color: #ccc;
    }

    .login-footer {
      margin-top: 18px;
      font-size: 14px;
      color: #555;
    }

    .login-footer a {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
    }

    .login-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Akun LSP</h2>
    <form action="#" method="post">
      <div class="input-group">
        <label for="username">Nama Pengguna</label>
        <input type="text" id="username" name="username" placeholder="Masukkan nama pengguna" required />
      </div>
      <div class="input-group">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required />
      </div>
      <button type="submit" class="btn-login">Masuk</button>
      <a href="index.blade.php" class="btn-back">Kembali</a>
    </form>
    <div class="login-footer">
      <p>Belum punya akun? <a href="#">Daftar Sekarang</a></p>
    </div>
  </div>
</body>
</html>
