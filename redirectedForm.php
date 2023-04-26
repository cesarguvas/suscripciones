<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <title>Suscripcion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css'>
</head>
    
<body class="w3-content" style="max-width: 500px">
    <div class="w3-container w3-margin-top">
        
        <form class="w3-container w3-light-grey" method="post" action="suscriptionProcess.php">
        
            <div class="w3-container">
                <h3>Plan de Suscripción Semanal</h3>
                <p>Pago Semanal:  s/ 10.00</p>
                <p>Periodo: 3 semanas</p>
            </div>
        
            <div class="w3-row-padding w3-stretch">
          
                <div class="w3-half">
                    <p>
                    <label for="fname">Nombre:</label>
                    <input class="w3-input" type="text" id="fname" name="fname" value="Armando" readonly></p>
                </div>
          
                <div class="w3-half">
                    <p>
                    <label for="lname">Apellido:</label>
                    <input class="w3-input" type="text" id="lname" name="lname" value="Casas" readonly></p>
                </div>
            </div>
        
            <div class="w3-row-padding w3-stretch">
          
                <div class="w3-half">
                    <p>
                    <label for="cphone">Celular:</label>
                    <input class="w3-input" type="tel" id="cphone" name="cphone" value="999111222" readonly></p>
                </div>
          
                <div class="w3-half">
                    <p>
                    <label for="email">Correo:</label>
                    <input class="w3-input" type="email" id="email" name="email" value="sample@example.com" readonly></p>
                </div>
            </div>
            
            <div class="w3-container">
                <p>
                <input class="w3-button w3-indigo w3-hover-red" type="submit"></p>
            </div>
        </form>
    </div>
</body>
</html>