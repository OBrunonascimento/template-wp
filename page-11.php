<?php get_header() ?>

<?php 
	get_template_part('template-parts/topo-contato'); 
?>

<div role="main" class="main">

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Entre em contato</p>
            <h2 class="text-color-secondary font-weight-bold text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Envie-nos uma mensagem</h2>

            <!-- FORMULÁRIO -->
            <form id="contatoForm" action="send_contato.php" method="post">
                <div class="row justify-content-center space">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control bg-section-1" placeholder="NOME" required>
                            </div>                   
                        </div>
                   
                        <div class="form-group">
                            <div class="row">                                                   
                                    <div class="form-group">
                                        <input name="phone" type="tel" class="form-control bg-section-1" placeholder="TELEFONE" maxlength="15" onkeyup="handlePhone(event)" required>
                                    </div>                               
                            </div>
                           
                        </div>
                    </div>

                    <div class="col-sm-6">
                            <select name="servico" class="form-control bg-section-1 form-group" id="exampleFormControlSelect2" required>
                                <option disabled selected>TIPO DE SERVIÇO</option>
                                <option value="Avaliação de Governos">Avaliação de Governos</option>
                                <option value="Avaliação de Imagem">Avaliação de Imagem</option>
                                <option value="Avaliação de Impacto Social">Avaliação de Impacto Social</option>
                                <option value="Pesquisa de Intenção de Voto">Pesquisa de Intenção de Voto</option>
                                <option value="Tracking Eleitoral">Tracking Eleitoral</option>
                                <option value="Avaliação de Campanhas Publicitárias">Avaliação de Campanhas Publicitárias</option>
                                <option value="Recall de Marca">Recall de Marca</option>
                                <option value="Recall de Propaganda">Recall de Propaganda</option>
                                <option value="Avaliação de Demanda">Avaliação de Demanda</option>
                                <option value="Pesquisa de Hábitos de Consumo">Pesquisa de Hábitos de Consumo</option>
                                <option value="Pesquisa de Árvore de Decisão">Pesquisa de Árvore de Decisão</option>
                                <option value="Pesquisa Raio-x de Mercado">Pesquisa Raio-x de Mercado</option>
                                <option value="Pesquisa de Market Share">Pesquisa de Market Share</option>
                                <option value="Teste de Produto">Teste de Produto</option>
                                <option value="Pesquisa de Satisfação">Pesquisa de Satisfação</option>
                                <option value="Análise de Dados Secundários">Análise de Dados Secundários</option>
                                <option value="Pesquisa de clima Organizacional">Pesquisa de clima Organizacional</option>
                                <option value="Grupos Focais">Grupos Focais</option>
                                <option value="Pesquisa Etnográfica/Pesquisa em Profundidade">Pesquisa Etnográfica/Pesquisa em Profundidade</option>
                                <option value="Cliente Misterioso">Cliente Misterioso</option>
                                <option value="Quero ser Pesquisador / Quero fazer Parte do Time">Quero ser Pesquisador / Quero fazer Parte do Time</option>
                            </select>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control bg-section-1" placeholder="E-MAIL"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="msg" id="" cols="40" class="form-control bg-section-1" placeholder="MENSAGEM" required></textarea>
                        </div>
                </div>
                <div class="col-lg-12">
                <input id="btn-envio" type="submit" value="Enviar" name="submit" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold" data-loading-text="Loading...">
                </div>
            </form>
            <!-- FIM DO FORMULÁRIO -->						
        </div>

    </div>
</div>	

</div>

<?php get_footer()?>