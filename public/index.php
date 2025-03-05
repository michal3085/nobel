// tu < ? php

//use Illuminate\Http\Request;
//
//define('LARAVEL_START', microtime(true));
//
//// Determine if the application is in maintenance mode...
//if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
//    require $maintenance;
//}
//
//// Register the Composer autoloader...
//require __DIR__.'/../vendor/autoload.php';
//
//// Bootstrap Laravel and handle the request...
//(require_once __DIR__.'/../bootstrap/app.php')
//    ->handleRequest(Request::capture());
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCad v2.3.5.67</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        progress { width: 80%; height: 30px; }
    </style>
</head>
<body>
<h2>dPanel - aktualizacja...</h2>
<h2>Instalacja...</h2>
<progress id="progressBar" value="0" max="100"></progress>
<h4>Nie zamykaj tego okna</h4>

<script>
    let progress = document.getElementById("progressBar");

    function getSecondsUntil(hour) {
        let now = new Date();
        let target = new Date();
        target.setHours(hour, 0, 0, 0);
        if (now > target) {
            return 0; // Jeśli już po 13:00, zwróć 0 sekund
        }
        return Math.floor((target - now) / 1000); // Ilość sekund do celu
    }

    let totalTime = getSecondsUntil(13); // Liczba sekund do godziny 13:00
    if (totalTime === 0) {
        progress.value = 100;
    } else {
        let intervalTime = totalTime / 100; // Czas na 1% postępu
        let current = 0;

        let interval = setInterval(() => {
            current++;
            progress.value = current;
            if (current >= 100) clearInterval(interval);
        }, intervalTime * 1000);
    }
</script>
</body>
</html>
