<?php
it(isset($_POST['submit']))
{
print_r($_POST['nome']);
print_r($_POST['email']);
print_r($_POST['telefone']);
}
?>
<DOCTYPE html>
    <html lang="pt">
        <head>
            
           
            <meta charset="utf-8">
            <title>Cadastro</title>
              <script src="https://kit.fontawesome.com/4e8b2593b8.js" crossorigin="anonymous"></script>
            
          
        <style>
               </head>
            body{
                font-family: Arial,Helvetica,sans-serif;
                background-image: url(Img/Ilustracao.jpg);
                background-repeat: no-repeat;
                background-size: cover;  
                
            }
            .box{
                    color: black;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%,-50%);
                    padding: 15px;
                    border-radius: 15px;
                    width: 20%;
                    
                }
            fieldset{
                border: 3px solid;
            
            }
            legend {
                border: 1px solid;
                padding: 10px;
                text-align: center;
                background-color: aquamarine;
                border-radius: 5px;
                color: white
            }
            .inputBox{
                position: relative;
            }
            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid black;
                outline: none;
                font: 15px;
                color: black;
                width: 100%;
                letter-spacing: 2px;
            }
            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            
            }
            .inputUser:focus ~ .labelInput,.inputUser:valid ~ .labelInput{
                top:-20px;
                font-size: 12px;
                color: dodgerblue;
            }
            
                                    
        </style>
        
        <body>
            
         <div class="box">
            <form action="formulario.php" method="post">
                <fieldset>
                  <legend> <b>Cadastro</b>  </legend> 
                    <br>
                     <div class="inputBox">
                    <input type=text name="nome" id="nome" class="inputUser" required> 
                    <label for="nome" class="labelInput">Nome</label>
        </div>
                    <br><br>
                     <div class="inputBox">
                    <input type=text name="sobrenome" id="sobrenome" class="inputUser" required> 
                    <label for="sobrenome"class="labelInput">Sobrenome</label>
        </div>
                     <br><br>
                     <div class="inputBox">
                    <input type=text name="cpf" id="cpf" class="inputUser" required> 
                    <label for="cpf"class="labelInput">CPF</label>
        </div>
                     <br><br>
                    <div class="inputBox">
                    <input type=telefone name="telefone" id="telefone" class="inputUser" required> 
                    <label for="telefone"class="labelInput">Telefone</label>
        </div>
                     <br><br>
                    <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required> 
                    <label for="email"class="labelInput">E-mail</label>
        </div> 
                     <br><br>
                    <div class="inputBox">
                    <input type=password name="senha" id="senha" class="inputUser" required> 
                    <label for="email"class="labelInput">Senha</label>
        </div>
                     <br><br>
                    <input type="submit" name="submit" id="submit">
                    </fieldset>
             </form>
            </div>
        </body>
    </html>