<!-- <?php
include_once "dados.php";

//verifica se não há uma sessão iniciada, se não houver, inicia uma nova sessão
if (!isset($_SESSION))
    session_start();

//se existir o carrinho na sessão    
if (isset($_SESSION['carrinho'])) {
    //percorrer todos os itens do carrinho
    //contar os itens que atenderam ao requisito de quantidade
    $qt_itens_qt_ok = 0;        //DECLARAR ANTES DO FOREACH
    foreach ($_SESSION['carrinho'] as $item) {
        //para cada item, localizar no array $todos_produtos e atualizar a quantidade

        //conta a número de produtos cadastrados
        $qt_produtos = count($todos_produtos);

        //perquisar o id no array $todos_produtos
        $i = 0;

        while ($i < $qt_produtos && $todos_produtos[$i]['id'] != $item['id'])
            $i++;
        if ($i < $qt_produtos) {

            //verificar se a quantidade no carrinho é menor ou igual ao estoque
            if ($item['qt'] <= $todos_produtos[$i]['qt']) {
                //atualizar a quantidade o array $todos_produtos
                $todos_produtos[$i]['qt'] -= $item['qt'];
                $qt_itens_qt_ok++;
            }
        } //fim  if($i < $qt_produtos)
        //verificar se a quantidade de produtos que atendem ao requisito de quantidade é
        //a mesma quantidade de itens no carrinho -> todos os produtos atenderam ao requisito

        if ($qt_itens_qt_ok == count($_SESSION['carrinho'])) {
            //atualizar a variável da sessão
            $_SESSION['todos_produtos'] =  $todos_produtos;
            //limpar o carrinho
            unset($_SESSION['carrinho']);

            //guarda na sessão que a compra deu certo
            $_SESSION['compra_efetuada'] = true;
        }
    } //fim  if(isset($_SESSION['carrinho']))
} //fim foreach($_SESSION['carrinho'] as $item)


//redireciona para página mensagem.php
header("Location:mensagem.php"); ?> -->
