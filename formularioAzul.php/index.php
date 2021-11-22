<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto con HTML, CSS Y PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <div class="container">
     <h1 class="text-left" style="color: #f3f3f3;">Contáctanos</h1>
     <div class="row">
         <div clas="col-md-12">
             <form action="enviarcorreo.php" method="post">

             <ul class="contact-form">
                 <li>
                     <div class="col-md-6">
                        <input type="text" name ="nombre" 
                        placeholder = " Escribe tu nombre " 
                        require = " required " size = " 8 " type = " text" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name ="email" 
                        placeholder="Email" require="required" size="8" />
                    </div>
                 </li>

                 <li>
                     <div class="col-md-6">
                        <input type="text" name ="telefono" 
                        placeholder="Escribe tu telefono" require="required" size="8" type = " text" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name ="compañia" 
                        placeholder="Compañía/Agencia" require="required" size="8" type = " text" />
                        
                    </div>
                 </li>
                 <li>                
                    <div class="col-md-12">
                        <input type="text" name ="asunto" placeholder="Asunto" type = " text" />
                    </div>
                </li>

                <li>                
                    <div class="col-md-12">
                        <textarea name="mensaje" class="span12" 
                        placeholder="Escribe tu proyecto o mensaje" 
                         required="required"></textarea>
                    </div>
                </li>
                <li>
                    <div class="col-md-12">
                        <button type="submit">Enviar ensaje<span class="glyphicon 
                        glyphicon-arrow-right" aria-hidden="true">

            </span> 
        </button>
    </div>
    </li>
             </ul>
             </form>

         </div>

     </div>
 </div>   
</body>
</html>