<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ro‘yxatdan o‘tish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #fff;
            padding: 25px 30px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 6px 0 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #667eea;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #5a67d8;
        }

        #natija {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Ro‘yxatdan o‘tish</h2>

    <form onsubmit="chiqar(); return false;">
        <label>Login</label>
        <input type="text" id="login">

        <label>Parol</label>
        <input type="password" id="parol">

        <label>Email</label>
        <input type="email" id="email">

        <label>Ism</label>
        <input type="text" id="ism">

        <label>Familiya</label>
        <input type="text" id="familiya">

        <button type="submit">Yuborish</button>
    </form>

    <div id="natija"></div>
</div>

<script>
function chiqar() {
    let login = document.getElementById("login").value;
    let parol = document.getElementById("parol").value;
    let email = document.getElementById("email").value;
    let ism = document.getElementById("ism").value;
    let familiya = document.getElementById("familiya").value;

    document.getElementById("natija").innerHTML =
        "<b>Natija:</b><br>" +
        "Login: " + login + "<br>" +
        "Parol: " + parol + "<br>" +
        "Email: " + email + "<br>" +
        "Ism: " + ism + "<br>" +
        "Familiya: " + familiya;
}
</script>

</body>
</html>
