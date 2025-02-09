@extends('layouts.app')

@section('title', 'Currículo Fullstack - Nilson Gomes')

@section('content')
    <div class="header">
        <h1 class="display-4">Nilson Gomes</h1>
        <p class="lead">Desenvolvedor Fullstack</p>
        <div class="photo">
            <img src='{{ asset("img/settings/FB_IMG_1715899856417.jpg") }}' alt="Foto de Nilson Gomes">
        </div>
    </div>
    <div class="section">
        <div class="section-title">Informação Pessoal</div>
        <ul class="list-unstyled">
            <li><strong>Nome:</strong> Nilson José Silva Gomes</li>
            <li><strong>Data Nascimento:</strong> 07/09/1987</li>
            <li><strong>Nacionalidade:</strong> Brasileiro</li>
            <li><strong>Escolaridade:</strong> Superior Completo</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Contactos</div>
        <ul class="list-unstyled">
            <li class="contact-item"><i class="fas fa-phone"></i><strong>Telefone:</strong>&nbsp;(+55) 99938 5205</li>
            <li class="contact-item"><i class="fab fa-whatsapp"></i><strong>Whatsapp:</strong>&nbsp;(+55) 99938 5205</li>                
            <li class="contact-item"><i class="fas fa-map-marker-alt"></i><strong>Endereço:</strong>&nbsp;Salvador, BA</li>
            <li class="contact-item"><i class="fas fa-globe"></i><strong>Website:</strong> <a href=" https://acesscode.com.br" target="_blank">&nbsp;acesscode.com.br</a></li>
            <li class="contact-item"><i class="fab fa-github"></i><strong>GitHub:</strong> <a href="https://github.com/nilsong87" target="_blank">&nbsp;github.com/nilsong87</a></li>
            <li class="contact-item"><i class="fab fa-linkedin"></i><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/nilson-gomes-dv/" target="_blank">&nbsp;linkedin.com/in/nilson-gomes-dv</a></li>
            <li class="contact-item"><i class="fas fa-envelope"></i><strong>Email:</strong> <a href="mailto:nilsonjosesilvagomes@hotmail.com">&nbsp;nilsonjosesilvagomes@hotmail.com</a></li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Competências Pessoais</div>
        <ul class="list-unstyled">
            <li>Responsabilidade</li>
            <li>Organização</li>
            <li>Espírito de Equipe</li>
            <li>Pontualidade</li>
            <li>Dedicação</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Experiência</div>
        <div class="info-item mb-3">
            <strong>09.2024 - Atualidade:</strong> Cargo - Programador Fullstack<br>
            <br>
            <p><strong>Desenvolvimento do AcessCode:</strong> Criação e implementação de soluções personalizadas.<br>
                <strong>Prototipagem de Páginas:</strong> Desenvolvimento de protótipos funcionais utilizando HTML, CSS e JavaScript.<br>
                <strong>Tecnologias de Front-End:</strong> Implementação de frameworks como Bootstrap para design responsivo.<br>
                <strong>Modelagem de Banco de Dados:</strong> Estruturação e otimização de bancos de dados, MySQL.<br>
                <strong>Conversão para PHP/Laravel:</strong> Migração e desenvolvimento de aplicações utilizando PHP e o framework Laravel.<br>
                <strong>Desenvolvimento de Jogos:</strong> Criação de jogos interativos utilizando a biblioteca Canvas e estrutura de código em JavaScript.</p>
        </div>
        <div class="info-item mb-3">
            <br>
            <strong>05.2013 - 12.2023:</strong> MEI - Líder do Cartucho<br>
            <br>
            <p><strong>Gestão de Produção:</strong> Supervisionar o processo de fabricação de cartuchos, garantindo a qualidade e eficiência.<br>
                <strong>Coordenação de Equipe:</strong> Liderar e orientar a equipe de produção, distribuindo tarefas e monitorando o desempenho.<br>
                <strong>Controle de Qualidade:</strong> Implementar e manter padrões de qualidade, realizando inspeções regulares dos produtos.<br>
                <strong>Manutenção de Equipamentos:</strong> Garantir que todas as máquinas e equipamentos estejam em bom estado de funcionamento.<br>
                <strong>Gestão de Estoque:</strong> Controlar o estoque de matérias-primas e produtos acabados, fazendo pedidos quando necessário.<br>
                <strong>Treinamento de Funcionários:</strong> Capacitar novos funcionários e oferecer treinamentos contínuos para a equipe.<br>
                <strong>Relatórios e Documentação:</strong> Manter registros precisos de produção, qualidade e manutenção, além de preparar relatórios para a administração.</p>        
        </div>
    </div>

    <br>

    <div class="section">
        <div class="section-title">Educação e Formação</div>
        <div class="info-item mb-3">
            <strong>08.2024 - 12.2024:</strong> Programador FullStack - SENAC-BA<br>
            <br>
            <p><strong>Fundamentos de Programação:</strong> Introdução à linguagem de programação com JavaScript.<br>
            <strong>Desenvolvimento Front-End:</strong> HTML, CSS, JavaScript, frameworks como Bootstrap.<br>
            <strong>Desenvolvimento Back-End:</strong> Node.js, PHP, framework Laravel.<br>
            <strong>Banco de Dados:</strong> MySQL.<br>
            <strong>Controle de Versão:</strong> Git e GitHub.<br>
            <strong>Segurança da Informação:</strong> Práticas de segurança em desenvolvimento web.<br>
            <strong>Testes e Qualidade de Software:</strong> Testes unitários, testes de integração<br>
            <strong>Projetos Práticos:</strong> Desenvolvimento de projetos completos para aplicar os conhecimentos adquiridos.</p>
        </div>

        <div class="info-item mb-3">
            <br>
            <strong>08.2022 - 08.2023:</strong> MBA em Gestão de Recursos Humanos - Unijorge<br>
            <br>
            <p><strong>Comportamento Humano nas Organizações:</strong> Estudo das interações internas que moldam a cultura e produtividade.<br>
            <strong>Desenvolvimento do Capital Humano e da Liderança nas Organizações:</strong> Desenvolvimento de funcionários e líderes para maximizar potencial.<br>
            <strong>Gestão Estratégica de Pessoas:</strong> Planejamento e implementação de estratégias para melhorar a eficiência e satisfação dos colaboradores.<br>
            <strong>Liderança e Mediação de Conflitos:</strong> Técnicas e práticas para liderar equipes e resolver conflitos de forma eficaz.<br>
            <strong>Competências Emergentes e Desenvolvimento Profissional:</strong> Desenvolvimento de habilidades para o sucesso no mercado atual.<br>
            <strong>Negociação e Gerenciamento de Conflitos:</strong> Métodos para negociar acordos e gerenciar disputas de forma construtiva e produtiva.</p>
        </div>
    </div>

    <br>

    <div class="section">
        <div class="section-title">Competências - Utilizadas em meus projetos:</div>
        <div class="progress-container">
            <i class="fab fa-html5" style="color: #e34c26;"> </i><span><strong>HTML</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 78,7%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">78,7%</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="fab fa-css3-alt" style="color: #1572b6;"></i> <span><strong>CSS</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 76,6%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">76,6%</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="fab fa-js" style="color: #f7df1e;"></i> <span><strong>JavaScript</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="fab fa-bootstrap" style="color: #563d7c;"> </i><span><strong>Bootstrap</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="fas fa-database" style="color: #4479a1;"></i> <span><strong>MySQL</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="fab fa-laravel" style="color: #ff2d20;"> </i><span><strong>PHP / Laravel</strong></span>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 89,3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">89,3%</div>
            </div>
        </div>
    </div>

    <br>

    <div class="section">
        <div class="section-title">Idiomas</div>
        <div class="progress-container">
            <i class="flag-icon flag-icon-br"></i> <span><strong>Português</strong></span>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Fluente</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="flag-icon flag-icon-us"></i> <span><strong>Inglês</strong></span>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Intermediário</div>
            </div>
        </div>
        <div class="progress-container">
            <i class="flag-icon flag-icon-es"></i> <span><strong>Espanhol</strong></span>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Intermediário</div>
            </div>
        </div>
    </div>

    <br>

    <div class="section">
        <div class="section-title">Informação Adicional</div>
        <ul class="list-unstyled">
            <li><strong>Noções básicas de JavaScript 1</strong> - Cisco (2024).</li>
            <li><strong>Noções básicas de JavaScript 2</strong> - Cisco (2024).</li>
            <li><strong>Segurança de endpoint</strong> - SENAC-BA/Casa do Comércio/Cisco (2024).</li>
            <li><strong>Fundamentos do Python 1</strong> - Cisco (2024).</li>
            <li><strong>Fundamentos do Python 2</strong> - Cisco (2024).</li>
            <li><strong>Introdução à Ciência de Dados</strong> - Cisco (2024).</li>                        
        </ul>
    </div>

    <br>
    <br>    
@endsection