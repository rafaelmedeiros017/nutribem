



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="Captura de tela_17-6-2024_123225_.jpeg">
        </div>

        <div class="form">
            <form accept="" action="envia.php" method="POST">

                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" size="26" name="cpf" placeholder="Digite o seu CPF" maxlength="14"
                            pattern="\d{3}\.\d{3}\.\d{3}\-\d{2}" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Telefone</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="Senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Confirme a sua senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap');

    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Noto Sans', sans-serif;
    }

    body {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(229, 241, 228);
    }

    .container {
        width: 80%;
        height: 80vh;
        display: flex;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
    }

    .form-image {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #bbe2c0;
        padding: 1rem;
    }

    .form-image img {
        width: 31rem;
    }

    .form {
        margin: 0 auto;
        width: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        background-color: #ffff;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
    }

    .form-header {

        margin-bottom: 0.1rem;
        display: flex;
        justify-content: space-between;
    }

    .login-button {
        display: flex;
        align-items: center;


    }

    .login-button button {
        border: none;
        background-color: #2E8B57;
        padding: o.5rem 2rem;
        border-radius: 5px;
        cursor: pointer;

    }

    .login-button button:hover {
        background-color: #335f39;
        transition: 0.5s;
    }

    .login-button button a {
        text-decoration: none;
        font-weight: 400;
        color: #ffff;
    }

    .form-header h1::after {

        content: '';
        display: block;
        width: 5rem;
        height: 0.3rem;
        background-color: #2E8B57;
        margin: 0 auto;
        position: absolute;
        border-radius: 10px;
    }

    .input-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 1rem 0;
    }

    .input-box {
        display: flex;
        flex-direction: column;
        margin-bottom: 1.1rem;
    }

    .input-box input {
        margin: 0.6rem 0;
        padding: 0.8rem 1.2rem;
        border: none;
        border-radius: 10px;
        box-shadow: 1px 1px 6px #0000001c;

    }

    .input-box input:hover {
        background-color: rgb(218, 214, 214);
        transition: 0.3s;
    }

    .input-box input:focus-visible {
        outline: 1px solid #2E8B57;
    }

    .input-box label,
    .gender-tittle h6 {

        font-size: 0.75rem;
        font-weight: 600;
        color: #000000c0;
    }

    .input-box input::placeholder {
        color: #000000be
    }

    .gender-group {

        display: flex;
        justify-content: space-between;
        margin-top: 0.62rem;
        padding: 0 0.5rem;

    }

    .gender-input {
        display: flex;
        align-items: center;
    }

    .gender-input input {
        margin-right: 0.35rem;
    }

    .gender-input label {
        font-size: 0.81rem;
        font-weight: 600;
        color: #000000c0;
    }

    .continue-button button {
        width: 100%;
        margin-top: 1.0rem;
        border: none;
        background-color: #2E8B57;
        padding: o.62rem;
        border-radius: 5px;
        cursor: pointer;

    }

    .continue-button button:hover {
        background-color: #335f39;
        transition: 0.5s;
    }

    .continue-button button a {
        text-decoration: none;
        font-size: 0.93rem;
        font-weight: 500;
        color: #ffff;
    }

    @media screen and (max-width: 1230px) {
        .form-image {
            display: none;
        }

        .container {
            width: 50%;
        }

        .form {
            width: 100%;
        }
    }

    @media screen and (max-width: 1064px) {
        .container {
            width: 90%;
            height: auto;

        }

        .input-group {
            flex-direction: column;
            overflow-y: scroll;
            flex-wrap: nowrap;
            max-height: 10rem;
            padding-right: 5rem;
        }

        .gender-inputs {
            margin-top: 2rem;
        }

        .gender-group {
            flex-direction: column;
        }


    }
</style>