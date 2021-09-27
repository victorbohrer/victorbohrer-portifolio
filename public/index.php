<?php

include ('./sistemaForm.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- FONTS -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- <link rel="stylesheet" href="assets/css/slick-theme.css"> -->
    <link rel="stylesheet" href="assets/css/home.css">

    <!-- JQUERY -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <title>Victor Bohrer - Portifolio</title>
  </head>
  <body>

  <?php

      $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);


      if(!empty($data['sendAddMsg'])){
        

        $query_msg = "INSERT INTO concatc_msgs(name, email, subject, message, created, number) VALUES(:name, :email, :subject, :message, NOW(), :number)";

        $add_msg = $conn->prepare($query_msg);

        $add_msg->bindParam(':name', $data['name']);
        $add_msg->bindParam(':email', $data['email']);
        $add_msg->bindParam(':subject', $data['subject']);
        $add_msg->bindParam(':message', $data['message']);
        $add_msg->bindParam(':number', $data['number']);

        $add_msg->execute();

        if($add_msg->rowCount()) {
          // echo "SUCESSO NO DB";
        } else {
          // echo "ERRO NO DB";
        }
      }

  ?>

    <div class="background" id="#top">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <nav>
                <!-- LOGO NAME -->
                <h1>BOHRER.</h1>
                
                <div class="menu-nav">
                  <ul class="ul-father">
                    <li class="li-child"><a href="#home">Início</a></li>
                    <li class="li-child"><a href="#about">Sobre</a></li>
                    <li class="li-child"><a href="#technologys">Tecnologias & Skills</a></li>
                    <li class="li-child"><a href="#contact">Contato</a></li>
                  </ul>
                </div>
                
                <!-- MENU HAMBURGER -->
                <div class="burger burger-arrow">
                  <div class="burger-lines"></div>
                </div>
                
              </nav>
            </div>
          </div>
        </div>
      </header>
      
      <!-- CONTENT -->
      <main>
        <section id="main-content">
          <div class="container">
            <div class="ball"></div>
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="text">
                  <h2>
                    dev Victor<br>
                    <span>Bohrer</span>
                  </h2> <br>
    
                  <p>
                    dev junior front-end
                    22 anos, br
                  </p>
                  <a class="btn-template" href="#about">Conhecer</a>
                </div>
              </div>
  
                <div class="col-xl-12">
                </div>
            </div>
          </div>
        </section>
      </main>      
    </div>
    

    <section id="about">
      <div class="container">
        <div class="ball"></div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="text">
              <h2 class="reveal">
                Sobre Victor Bohrer
              </h2>
              <p class="reveal">
                Lorem ipsum, doslor sit amet consectetur adipisicing elit. Officiis eum, est vitae soluta blanditiis aliquam aspernatur at maxime autem. Consequuntur aspernatur veritatis vero exercitationem amet minus magni hic voluptatum eius.
                Lorem ipsum, doslor sit amet consectetur adipisicing elit. Officiis eum, est vitae soluta blanditiis aliquam aspernatur at maxime autem. Consequuntur aspernatur veritatis vero exercitationem amet minus magni hic voluptatum eius.
                Lorem ipsum, doslor sit amet consectetur adipisicing elit. Officiis eum, est vitae soluta blanditiis aliquam aspernatur at maxime autem. Consequuntur aspernatur veritatis vero exercitationem amet minus magni hic voluptatum eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error dolorum cumque dolor! Velit repellendus, quos, cupiditate saepe eos ut tenetur deserunt porro animi, neque dolorum voluptates facilis assumenda perspiciatis!
                Lorem ipsum, doslor sit amet consectetur adipisicing elit. Officiis eum, est vitae soluta blanditiis aliquam aspernatur at maxime autem. Consequuntur aspernatur veritatis vero exercitationem amet minus magni hic voluptatum eius.
              </p>
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="box-img">
              <img src="https://via.placeholder.com/400x500" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="technologys">
        <div class="container">
          <div class="ball"></div>
          <div class="row">
            <div class="col-xl-12">
              <h2 class="text reveal">Tecnologias:</h2>
            </div>
  
            <div class="col-xl-12">

              <div class="slick-father">
                <div class="slick-child">
                  <img src="assets/img/html-icon.png" alt="icone html" srcset="">
                </div>
                
                <div class="slick-child">
                  <img src="assets/img/css-icon.png" alt="icone css" srcset="">
                </div>
    
                <div class="slick-child">
                  <img src="assets/img/js-icon.png" alt="icone javascript" srcset="">
                </div>
    
                <div class="slick-child">
                  <img src="assets/img/sass-icon.png" alt="icone sass" srcset="">
                </div>
    
                <div class="slick-child">
                  <img src="assets/img/bootstrap-icon.png" alt="icone bootstrap" srcset="">
                </div>
    
                <div class="slick-child">
                  <img src="assets/img/slick-icon.png" alt="icone slick" srcset="">
                </div>
    
                <div class="slick-child">
                  <img src="assets/img/github-icon.png" alt="icone github" srcset="">
                </div>
    
              </div>         

              <div class="col-xl-12">
                <h2 class="text" id="teste">Skills:</h2>
              </div>
              <div class="col-xl-6">
                <div class="bar html reveal">
                  html 
                  <span>95%</span> 
                </div>
              </div>
              
              
              <div class="col-xl-6">
                <div class="bar css reveal">
                  css
                  <span>70%</span> 
                </div>
              </div>

              <div class="col-xl-6">
                <div class="bar sass reveal">
                  sass
                  <span>70%</span> 
                </div>
              </div>

              <div class="col-xl-6">
                <div class="bar javascript reveal">
                  javascript
                  <span>25%</span> 
                </div>
              </div>

              <div class="col-xl-6">
                <div class="bar bootstrap reveal">
                  bootstrap
                  <span>50%</span> 
                </div>
              </div>

              <div class="col-xl-6">
                <div class="bar slick reveal">
                  slick
                  <span>90%</span> 
                </div>
              </div>

              <div class="col-xl-6">
                <div class="bar git reveal">
                  git
                  <span>40%</span> 
                </div>
              </div>

            </div>
          </div>
        </div>        
      </section>     

      <section id="contact">
        <div class="container">
          <div class="ball"></div>
          <div class="row">
            <div class="col-xl-12">
              <div class="text">
                <h2 class="reveal">
                  Fale com Victor <span>Bohrer</span> <br>
                </h2>

                <p class="reveal">
                  Você pode enviar uma mensagem pelo formulário abaixo. O retorno será feito através do seu e-mail.
                </p>
              </div>
            </div>
            <div class="col-xl-12">

            <form name="name_msg" action="" autocomplete="off" method="POST">
              <div class="col-xl-5 col-sm-12 col-xs-12">
                <input type="text" placeholder="nome" name="name" id="name" required>
              </div>
    
              <div class="col-xl-5 col-sm-12 col-xs-12">
                <input type="email" name="email" id="email" placeholder="email" required>
              </div>
    
              <div class="col-xl-5 col-sm-12 col-xs-12">
                <input type="text" name="number" id="number" placeholder="celular" class="telefone">
              </div>
    
              <div class="col-xl-5 col-sm-12 col-xs-12">
                <input type="text" name="subject" id="subject" placeholder="assunto"> 
              </div>
        
              <div class="col-xl-6 col-sm-12 col-xs-12">
                <div class="fix-textarea">
                  <textarea name="message" id="message" placeholder="escreva aqui sua mensagem" cols="30" rows="5"></textarea>
                </div>
              </div>
        
              <div class="col-xl-12 col-sm-12 col-xs-12">
                <div class="fix-btn">
                  <input class="btn-template" type="submit" name="sendAddMsg" value="Enviar">
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

    <!-- TOP REDIRECT BUTTON -->
    <a href="#top" class="scrollToTop" style="display: none;" >
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f25f4c" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <polyline points="6 15 12 9 18 15" />
      </svg>
    </a>
    <!-- SCRIPT JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>