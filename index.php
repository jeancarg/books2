<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <script src="js/logica.js"></script>

      <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

   <header>
       
       <aside>
           <form action="">
               <div class="form-group">
                   <label for="txtEmail"></label>
                   <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Ex.: @jeancar">
                </div>

                   <div class="form-group">
                    <label for="senha"></label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Ex.:fgjgfdhb">
                </div>

                <a href="">Esqueci minha senha </a>

                <div>
                    <input type="submit" value="Login" class="btn btn-primary">
                    <a href="" class="btn btn-primary">Cadastrar-se</a>
                </div>

           </form>
       </aside>
       <h1>
           <?= 
           "Books"
           ?>
       </h1>

       <h2>
           <?php 
           echo "Os Livros de Renato";
           ?>
       </h2>
   </header>

   <main>
       <form action="" class="form-inline">
           <div class="form-group">
               <input type="text" name="txtLivro" id="txtLivro" class="form-control" placeholder="pesquise um livro">
               <input type="button" value="Salvar" class="btn btn-primary" onclick="criarHTML('txtLivro')">

            </div>
       </form>

       <section id="sectionLivros">
           <?php
           require_once "model/Conexao.php";

           $sql = "select * from book;";

           if(!Conexao::execWithReturn($sql)){
               echo Conexao::getData();
               exit(1);
           }
           $dados = Conexao::getdata();

           foreach($dadosas $livro):

            ?>
           <article>
               <div>
                    <img src="img/livro.webp" alt="Imagem do livro">
               </div>

               <div class="detalhes">
                   <h3>Livro: <span>
                    <?= $livro=["nome"]; ?>
                   </span></h3>
                   <h3>Páginas: <span>
                    <?= $livro=["paginas"]; ?>
                   </span></h3>
                   <h3>Autor/a/as/es: <span>
                    <?= $livro=["autor"]; ?>
                   </span></h3>
               </div>

               <div>
                   <div class="marcadores">
                       <span class="material-icons">
                           book

                       </span>
                       <span class="contador rounded-circle">
                           12

                       </span>
                    </div>

                    <div class="marcadores">
                        <span class="material-icons">
                            favorite
 
                        </span>
                        <span class="contador rounded-circle" >
                            15
 
                        </span>
                     </div>

               </div>

           </article>
           <?php
            //}//foreach
            endforeach;
            ?>
       </section>
   </main>
    
</body>
</html>