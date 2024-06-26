<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>calculoIMC</title>
</head>

<body>
    <main id="container">
        <section id="img">
            <img src="./calculadora.png">
        </section>

        <section id="calculator">
            <form id="form">
                <h1 id="tittle">
                    Calculadora - IMC
                </h1>
                <div class="input-box">
                    <label for="weight">
                        Peso em Kg
                    </label>
                    <div class="input-field">
                        <i class="fa-solid fa-weight-hanging"></i>
                        <input type="number" id="weight" required>
                        <span>
                            Kg
                        </span>
                    </div>
                </div>

                <div class="input-box">
                    <label for="height">
                        Altura em metros
                    </label>
                    <div class="input-field">
                        <i class="fa-solid fa-ruler"></i>
                        <input type 0.01="number" id="height" required>
                        <span>
                            M
                        </span>
                    </div>
                </div>
                <button id="calculate">
                    Calcular
                </button>
            </form>
            <div id="infos" class="hidden">
                <div id="result">
                    <div id="bmi">
                        <span id="value"></span>
                        <span>Seu IMC</span>
                    </div>
                    <div id="description">
                        <span></span>
                    </div>
                </div>

                <div id="more_info">
                    <a
                        href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi04I-ykNKGAxVgQUgAHbj6DHEYABAEGgJjZQ&ase=2&gclid=CjwKCAjwyJqzBhBaEiwAWDRJVLisH3nc3ZG-K2QiLB8iKJTrBqVBO3ZHxstne-HGzmvzb5GswDsePBoCnFcQAvD_BwE&ohost=www.google.com&cid=CAESV-D2DmWJ7wWindXbXE6MvkF5SV-hiZmUTOK5Kp_9TZ9_Tt7RgyGbRrqnfB_7rwHFEU0plRUHVPqT843f5AmypBmzOQnaE5fd5SBKo9Rr1JpRpfCm1-FKzQ&sig=AOD64_2zUp7VezfN1jMzZ9V5An0yS2Y9zQ&q&nis=4&adurl&ved=2ahUKEwi83YqykNKGAxWSq5UCHajsCVsQ0Qx6BAgMEAE">
                        Mais informações sobre o IMC
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

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
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
        }

        #container {
            display: flex;
            align-items: center;
            gap: 3.5rem;
        }

        #img img {
            width: 42rem;
        }

        #calculator {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 2rem;
            color: #ffffff;
            background-color: #242926;
            border-radius: 8px;
        }

        #form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        #tittle {
            font-size: 2.25rem;
        }


        .input-box label {
            font-size: 1.1rem;
            color: #ffffff;
            font-weight: 500;
        }

        .input-field {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #aeaeaf;
            padding: 0.3rem;
            border-radius: 3px;
            margin-top: 3px;
        }

        .input-field span,
        .input-field i {
            color: #ffffff;
            font-size: 1.3rem;
            padding: 0.6rem 1rem;
        }

        .input-field input {
            background-color: transparent;
            border: none;
            width: 100%;
            font-size: 1.3rem;
            color: #ffffff;
            padding: 0 0.5rem;
        }

        .input-field input::-webkit-outer-spin-button,
        .input-field input::-webkit-inner-spin-button {
            appearance: none;
        }

        .input-field input:focus {
            outline: none;
        }

        #calculate {
            border: 100%;
            font-size: 1.25rem;
            font-weight: bold;
            background-color: #32a564;
            color: #ffffff;
            padding: 0.5rem 0;
            border-radius: 3px;
            cursor: pointer;
            border: none;
        }

        #calculate:hover {
            background-color: #257949;
            transition: 0.3s;
        }

        #result {
            display: flex;
            gap: 2rem;
            align-items: center;
            border-top: 1px solid #ffffff;
            padding: 0.75rem 0;
        }

        #bmi {
            display: flex;
            align-items: center;
            flex-direction: column;
            font-size: 2, 25rem;
        }

        #bmi span:last-child {
            font-size: 0.875rem;
            color: #ffffff;
        }

        #description {
            width: 15.5rem;
        }

        #more_info {
            border-top: 1px solid #ffffff;
            padding-top: 1.5rem;
        }

        #more_info a {
            color: #32a564;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.87rem;
            text-decoration: none;
            transition: color 0.5;
        }

        #more_info a:hover {
            color: #aeaeaf;
        }

        .hidden {
            display: none;
        }

        .normal {
            color: #32a564;
        }

        .attention {
            color: #ee0000;
        }

        @media screen and (max-width: 1024px) {
            #img {
                display: none;
            }
        }

        @media screen and (max-width: 500px) {
            #container {
                width: 100%;
                height: 100%;

            }

            #calculator {
                width: 100%;
                height: 100%;
                border-radius: 0;
                justify-content: center;
            }


        }
    </style>

    <script>
        document.getElementById('form');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const weight = document.getElementById('weight').value;
            const height = document.getElementById('height').value;

            const bmi = (weight / (height * height)).toFixed(2);

            const value = document.getElementById('value');
            let description = '';

            value.classList.add('attention');

            document.getElementById('infos').classList.remove('hidden');

            if (bmi < 18.5) {
                description = "Cuidado! Você está abaixo do peso!";
            } else if (bmi >= 18.5 && bmi <= 25) {
                description = "Você está no peso ideal!";

                value.classList.remove('attention');
                value.classList.add('normal');

            } else if (bmi > 25 && bmi <= 30) {
                description = "Cuidado! Você está com sobrepeso!";
            } else if (bmi > 30 && bmi <= 35) {
                description = "Cuidado! Você está com obesidade moderada!";
            } else if (bmi > 35 && bmi <= 40) {
                description = "Cuidado! Você está com obesidade severa!";
            } else {
                description = "Cuidado! Você está com obesidade morbita!";
            }

            value.textContent = bmi.replace('.', ',');
            document.getElementById('description').textContent = description;

        });


    </script>
</body>

</html>