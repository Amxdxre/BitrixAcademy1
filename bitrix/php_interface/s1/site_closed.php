<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт закрыт</title>
    <style>
        body {
            background-color: #000;
            color: #d3d3d3;
            font-family: 'Courier New', monospace;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-image: radial-gradient(rgba(50, 150, 50, 0.2) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .terminal {
            width: 80%;
            max-width: 800px;
            border: 2px solid #3a3;
            padding: 20px;
            position: relative;
            box-shadow: 0 0 20px rgba(58, 255, 58, 0.5);
            animation: flicker 0.1s infinite alternate;
        }

        .terminal::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                    rgba(18, 16, 16, 0) 50%,
                    rgba(0, 0, 0, 0.25) 50%
            );
            background-size: 100% 4px;
            z-index: 1;
            pointer-events: none;
        }

        h1 {
            color: #3a3;
            text-align: center;
            text-transform: uppercase;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 0 0 5px #3f3;
        }

        p {
            font-size: 1.2em;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .glitch {
            animation: glitch 1s linear infinite;
        }

        @keyframes glitch {
            0% { text-shadow: 2px 0 0 #f00, -2px 0 0 #0ff; }
            14% { text-shadow: 2px 0 0 #f00, -2px 0 0 #0ff; }
            15% { text-shadow: -1px 0 0 #f00, 1px 0 0 #0ff; }
            49% { text-shadow: -1px 0 0 #f00, 1px 0 0 #0ff; }
            50% { text-shadow: 1px 0 0 #f00, -1px 0 0 #0ff; }
            99% { text-shadow: 1px 0 0 #f00, -1px 0 0 #0ff; }
            100% { text-shadow: -2px 0 0 #f00, 2px 0 0 #0ff; }
        }

        @keyframes flicker {
            0% { opacity: 0.9; }
            100% { opacity: 1; }
        }

        .scanline {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 10px;
            background: rgba(58, 255, 58, 0.1);
            animation: scan 8s linear infinite;
            z-index: 2;
        }

        @keyframes scan {
            0% { top: 0; }
            100% { top: 100%; }
        }

        .button {
            display: inline-block;
            background: #3a3;
            color: #000;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .button:hover {
            background: #5c5;
            box-shadow: 0 0 10px #3f3;
        }

        .pip-boy {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
            opacity: 0.7;
        }
    </style>
</head>
<body>
<div class="terminal">
    <div class="scanline"></div>

    <h1 class="glitch">Внимание!</h1>

    <p>// СИСТЕМНОЕ УВЕДОМЛЕНИЕ //</p>
    <p>ДОСТУП К ДАННОМУ ТЕРМИНАЛУ ОГРАНИЧЕН</p>
    <p>КОД ОШИБКИ: <span style="color:#f00;">404_ACCESS_DENIED</span></p>
    <p>----------------------------------------</p>
    <p>Этот сайт был закрыт по распоряжению администрации. Возможно, он больше не существует или был перемещен в другое место.</p>
    <p>Попробуйте проверить адрес или вернуться позже. Если вы считаете, что это ошибка, свяжитесь с администратором системы.</p>
    <p>----------------------------------------</p>
    <p style="color:#3a3;">>>> <a href="/" class="button">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a> <<<</p>
    <p style="font-size:0.8em; text-align:right;">TERMINAL OS v2.3.7</p>
</div>
</body>
</html>