<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Montserrat&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/index2.css" type="text/css">
    
    <title>Página inicial</title>
</head>
<body>
    <?php include_once('./navbar.php')?>

<main>

    <article>
        <h1>Seja Bem-vindo(a)</h1>
        <hr>
        <p>DoaTech é uma plataforma totalmente gratuita. <br>
        Nosso principal propósito é levar tecnologia para aqueles que precisam.</p>
        <p>Criamos uma ponte entre doadores e alunos da rede pública que necessitam de aparelhos tecnológicos para os estudos em domicílio</p>
        <hr>
        <h4>Tem um computador ou tablet parado na sua casa? Doe para quem precisa!</h4>
        <hr>
        <h4>Seus alunos não tem a tecnologia necessária para os estudos? Faça parte do projeto e se cadastre em nossa plataforma!</h4>
    </article> 

    <aside class="how">
        <h2> Quer saber como funciona?</h2>
        <small>Continue lendo...</small>
    </aside>

    <div class="container">
        <section class="flx-mom">
           
            <div class="flx-bby-1">
             <img src="./assets/img/escola.jpg" >
            </div>
            <div class="flx-bby-2"> A <b>escola interessada em tornar-se um ponto de coleta</b> <a href="./formescola.php">realiza o cadastro na plataforma</a>, desse modo <b>seus alunos podem realizar seus pedidos</b>.</div>
        </section>

        <section class="flx-mom-2">
            <div class="flx-bby-3">O aluno que precisa de um item (um notebook, por exemplo) <b>recorre a equipe escolar e informa qual item precisa</b>.<br /> Um dos responsáveis (professores, direção escolar) faz uma triagem para certificar-se da real necessidade do aluno e <b>realiza o pedido na plataforma</b>.</div>
             <div class="flx-bby-1">
                <img src="./assets/img/estudantes.png" >
            </div>
        </section>

        <section class="flx-mom-3">
            <div class="flx-bby-1">
                <img src="./assets/img/meninocomnote.jpg" >
               </div>
               <div class="flx-bby-4"><b>A <a href="./formdoador.php">pessoa doadora se cadastra</a> e encontra dentro da lista de pedidos algo que pode doar.</b> Seleciona o pedido do aluno e <b>leva o item até a escola para a entrega</b>. A escola é notificada da doação e avisa ao <b>aluno para que busque o item na escola</b>.</div>
        </section>
    </div>
</main>

    <?php include_once('./footer.php')?>

</body>
</html>