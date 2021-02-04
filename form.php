<!DOCTYPE html>

<html>

    <head>
            
        <title>Arboreal.ru</title>

	<meta charset="utf-8">
	                                      
	<style type="text/css">
html,body {
    background:  url('toys_img/pc/fon.png');
    height: 100%;
    margin: 0px;
    padding: 0px;
     }
     
.pole {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    width: 800px;
    min-height: 500px;
    height: 100%;
    }
    
a {text-decoration: none;}                
.txt {font-family: jakobextractt; font-size: 45px; text-align: center; color: #0b075f;}    
        </style> 

	</head>
        <body>
           <div class="pole" >   
        
        <?php
        
          if (isset($_POST['name'])) {$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');}
          if (isset($_POST['phone'])) {$phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');}
          if (isset($_POST['email'])) {$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');}
          if (isset($_POST['message'])) {$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');}
          
        
          $address = "zen@arboreal.ru";   
          
        
          $sub = "С сайта Toys";

        
          $mes = "Имя: $name \nТелефон: $phone \nE-mail: $email \nСообщение: $message";
 
       
          $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
          if ($send == 'true')
           {
           echo "";
           }
           else 
           {
           echo "Сообщение не отправлено!";
           }
        ?>
            </p>
                <br>
                <p class="txt">Спасибо за обращение к нам! Ваше сообщение отправленно!</p>
                <br>
                <p class="txt"><a href="land_toys.html"> Вернуться на сайт</a></p>
             </div>
            
    </body>
</html>