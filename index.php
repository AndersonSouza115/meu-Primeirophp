<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gama Academy</title>


</head>

<body>
    <!-- criando uma tabela para incorporar o nosso menu-->
    <table border="0" width="100%">
        <tr>
        <td align="center"><img src="../imagens/logo.png" width="200" height="40" > </td>
        <td>QUEM SOMOS</td>
        <td>CURSOS ONLINE</td>
        <td>PARA EMPRESAS</td>
        <td><a href="../html/contatos.html">CONTATO</a> </td>
        <td>CONTEÚDOS</td>
        </tr>
    </table>


    <!-- inserindo uma tabela para posicionar os elementos da página-->
    <table border="0" width="100%" cellpadding="10" cellspacing="20">
        <!-- inserindo uma linha dentro da tabela-->
        <tr>
            <!-- inserir colunas dentro da linha na tabela -->
            <td align="center">
                <!-- inserindo imagens na página-->
                <img src="../imagens/pessoas.png">
            </td>
            <td>
                <!-- criando o título da nossa página-->
                <h1>ISTO NÃO É <br> UMA ESCOLA</h1>
                <!--
                <h2>ISTO NÃO É UMA ESCOLA</h2>
                <h3>ISTO NÃO É UMA ESCOLA</h3>
                <h4>ISTO NÃO É UMA ESCOLA</h4>
                <h5>ISTO NÃO É UMA ESCOLA</h5>
                <h6>ISTO NÃO É UMA ESCOLA</h6>-->

                <!-- inserindo parágrafos na página em html 5 -->
                <!-- tab <br> permite fazer uma quebra de linha, equivale ao enter-->
                <p>Esse lema nos trouxe até aqui!<br>
                    Somos diferentes e visionários.</p>
                <!-- tab <b>, permite deixar o texto em negrito-->
                <p>Tão inexplicáveis que <b>era mais simples dizer o que não éramos</b></p>

                <p>Marca inovadora e questionadora por essência, questionou a si mesmo <br>
                    sobre <b>como se reinventar</b> em um momento de <strike>crise</strike> oportunidade para <br>
                    chegar ainda mais perto do seu objetivo de impactar 1 milhão de vidas.</p>

                <p>Não éramos uma escola, éramos uma experiência diferenciada de aprendizagem:<br>
                    “ menos conversinha e mais conversão! ”</p>

                <!-- inserindo uma imagem para criar um link-->

                <!--<a href="https://www.youtube.com/watch?v=YmfBy9mihL0" target="_blank"><img src="../imagens/play.png"
                        width="40" height="40"></a>-->

                <!-- componente de vídeo-->
                <!--<video controls= autoplay="true" width="400" height="300">
                    <source src="../videos/gama.mp4" />

                </video>-->
                    
                <!-- chamada do vídeo do youtube direto dentro da nossa página -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YmfBy9mihL0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </td>
        </tr>

    </table>



</body>

</html>