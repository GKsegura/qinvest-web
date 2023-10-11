@vite(['resources/js/education.js'])
<x-layout.app>
    <div class="page-variable">
        <div class="wrapper">
            <div class="menu">
                <div class="button-bars">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="index">
                    <!-- Conteúdo do índice -->
                    <h2>Índice</h2>
                    <ul>
                        <li><a href="#topic1">O que é investir?</a></li>
                        <li><a href="#topic2">Como investir com segurança?</a></li>
                        <li><a href="#topic3">Como prosperar seus investimentos?</a></li>
                        <li><a href="#topic4">Como escolher um bom investimento?</a></li>
                        <li><a href="#topic5">Renda Fixa ou Variável</a></li>
                        <li><a href="#topic6">SELIC</a></li>
                        <li><a href="#topic7">Inflação</a></li>
                        <li><a href="#topic8">Rentabilidade</a></li>
                        <li><a href="#topic9">Prazos</a></li>
                        <li><a href="#topic10">Impostos</a></li>
                        <li><a href="#topic11">Tipos de investimentos</a></li>
                        <ul>
                            <li><a href="#topic11">Tesouro Nacional</a></li>
                            <li><a href="#topic12">LCA</a></li>
                            <li><a href="#topic13">LCI</a></li>
                            <li><a href="#topic14">Debêntures</a></li>
                            <li><a href="#topic15">CDB</a></li>
                            <li><a href="#topic16">Como usar o CDB</a></li>
                        </ul>
                        <li><a href="#topic17">Problemas ao investir</a></li>
                        <li><a href="#topic18">Cobertura FGC</a></li>
                        <li><a href="#topic19">Aprender Mais</a></li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <div class="topic" id="topic1">
                    <h2>O que é investir?</h2>
                    <br>
                    <p class="p-space">Ao aplicar seu dinheiro, o investidor “empresta” o valor a uma instituição - já escolhida por ele - a qual devolve um documento, envolvendo informações como a rentabilidade, liquidez, tributações e prazos. Em troca, o investidor recebe uma remuneração condizente ao valor de seu “empréstimo”. Portanto, previamente, faz-se necessário conhecimentos acerca da empresa escolhida e os possíveis riscos atrelados a ela: chances de falência e desvalorizações. </p>
                </div>

                <div class="topic" id="topic2">
                    <br>
                    <h2>Como investir com segurança?</h2>
                    <p class="p-space">Para iniciar seus investimentos, é necessário fazer uma breve pesquisa e estudo, buscando instituições (bancos ou corretoras) que ofereçam produtos condizentes com seu perfil investidor, além de boas taxas.
                    </p>
                    <p class="p-space"> Após iniciar sua conta em uma corretora, escolha um ativo e selecione o valor que deseje investir. A seguir, informações como o prazo, rentabilidade e valor resgatado irão aparecer e basta concluir seu investimento.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic3">
                    <h2>Como prosperar seus investimentos?</h2>
                    <br>
                    <p class="p-space">Além da garantia de uma boa segurança ao investir, faz-se necessário o conhecimento sobre os gastos e os ganhos mensais, gerando, assim, uma eficaz administração das finanças.
                    </p>
                    <p class="p-space">A definição de metas a curto e a longo prazo são essenciais para o alcance da independência financeira, garantindo uma vida de qualidade, com lazer e reservas de emergência. A atitude de economizar é uma facilitadora de formação do patrimônio, que, posteriormente, pode tornar-se uma boa oportunidade de investimentos em ativos.
                    </p>
                    <p class="p-space"> Portanto, a mudança de alguns hábitos em gastos supérfluos, a quitação de dívidas e o planejamento aliados ao conhecimento do mercado financeiro podem trazer excelentes retornos em determinado período.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>
                <div class="topic" id="topic4">
                    <h2>Como escolher um bom investimento?</h2>
                    <br>
                    <p class="p-space">O conhecimento é a base para iniciar as atividades no mercado financeiro. Em soma, entender qual o objetivo ao investir e o período em que se deseja obter o retorno do dinheiro aplicado é de extrema importância para o planejamento financeiro bem como o controle de despesas e receitas.
                    </p>
                    <p class="p-space"> Pesquisas e análises de empresas em que se deseja investir são importantes, além da busca de ativos que tragam melhores retornos.
                    </p>
                    <p class="p-space"> Acompanhar a economia é de extrema importância. Não é necessário ter um entendimento aprimorado sobre as oscilações de taxas, mas buscar entender o contexto atual da economia do país já é um grande começo!
                    </p>
                    <p>Para saber mais sobre a escolha de um bom investimento, responda o questionário e descubra seu <a href="../formulary">perfil investidor</a>.</p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic5">
                    <h2>Qual a diferença entre renda fixa e variável?</h2>
                    <br>
                    <p class="p-space">Como sugerido pelo nome, a renda fixa possui condições estabelecidas. Ao investir, tem-se, inicialmente, um conhecimento sobre as taxas de lucro, juros e prazos. Geralmente, o risco de crédito é baixo, trazendo garantias positivas ao investidor. Por isso, é recomendada para os possuintes de uma maior insegurança no mundo das finanças, caracterizando, na maioria das vezes, um perfil conservador.
                    </p>
                    <p class="p-space"> Já para a renda variável, não há uma garantia da rentabilidade, tendo, assim, um risco alto, o qual é possível de ser calculado.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic6">
                    <h2>SELIC: qual a sua importância?</h2>
                    <br>
                    <p class="p-space">A SELIC (Sistema Especial de Liquidação e de Custódia) é responsável por representar a taxa básica de juros do Brasil e, por isso, é constantemente mencionada em diversos meios de comunicação, apresentando grande importância para o mercado de investimentos. Essa é definida pelo Comitê de Política Econômica (Copom), do Banco Central, e é ponto de partida para os títulos de renda fixa, como o CDI, que será explicado em breve.
                    </p>
                    <p class="p-space"> As oscilações presentes nas taxas de juros servem como uma alternativa do Banco Central para o controle da inflação, regulando, assim, toda a política monetária do país. Além disso, a SELIC influencia todo o mercado, definindo desde o percentual de juros cobrados pelos bancos, compras e vendas de bens, até o retorno obtido pelo investidor após uma aplicação financeira.
                    </p>
                    <p class="p-space"> A SELIC é elevada quando a economia se encontra aquecida e os preços começam a crescer. Assim, com os juros mais altos, torna-se mais complicado, tanto para os consumidores quanto para o governo e empresas, a obtenção de crédito desestimulando o consumo e, por fim, controlando os preços. Em relação às finanças, o aumento da taxa SELIC favorece os investimentos de renda fixa, como os títulos públicos – CDB e letras de crédito - os quais passam a apresentar uma boa rentabilidade (lucro).
                    </p>
                    <p class="p-space"> No entanto, quando o cenário é oposto, ou seja, quando a SELIC se encontra baixa, há a estimulação do consumo. Com a redução do custo de crédito, ocorre a expansão das instituições e de projetos que permitam seu crescimento. Consequentemente, com a geração de bons resultados, as ações valorizam, favorecendo os investidores de rendas variáveis.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic7">
                    <h2>Qual a influência da inflação para os investimentos de renda fixa?</h2>
                    <br>
                    <p class="p-space">A inflação contempla, basicamente, a média de aumento de preços dos produtos consumidos pela população. Com isso, essa influencia diretamente os investimentos, já que tem a capacidade de depreciar o valor do dinheiro ao longo do tempo.
                    </p>
                    <p class="p-space"> Instituições como o IPCA (Índices de Preço ao Consumidor) e IGP - M (Índice Geral de Preços ao Mercado) são os principais medidores da inflação no país, controlando os investimentos indexados a ela. A fim de que não haja desvalorização da aplicação financeira, é recomendável que a acumulação patrimonial esteja, no mínimo, acima da taxa de inflação.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic8">
                    <h2>Em relação à rentabilidade, quais os tipos?</h2>
                    <br>
                    <p>A rentabilidade, para a renda fixa, pode ser dividida em três tipos:
                    </p>
                    <p><strong>Pré-fixada:</strong>possuem uma taxa fixa determinada no momento da compra, não se alterando até o fim do prazo do investimento. Por exemplo, um investidor decide aplicar seu dinheiro no CDB, com renda de 5% ao ano. Independente das oscilações de juros, ao final do período, alcançará sua rentabilidade de 5%.
                    </p>
                    <p><strong>Pós-fixada:</strong>está relacionada a alguma taxa, como o CDI e a inflação, podendo sofrer alterações até o fim do período do investimento. Um exemplo está nos bancos, onde o dinheiro é aplicado ao CDB indexado ao CDI, o qual pode sofrer alterações positivas ou negativas.
                    </p>
                    <p><strong>Híbrida:</strong>como o próprio nome sugere, é uma mistura da rentabilidade pré-fixada e pós-fixada. Como exemplos, os investimentos com uma taxa fixa de renda anual mais o indexado de outra taxa, a qual varia, como o IPCA ou CDI.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic9">
                    <h2>E quanto aos prazos?</h2>
                    <br>
                    <p class="p-space">É necessário ter o conhecimento sobre as possibilidades dos investimentos em renda fixa quanto em relação aos prazos.
                    </p>
                    <p class="p-space"> Existem aplicações, como o CDB, LCA e LCI, em que é definido um prazo para a retirada do dinheiro e, caso o investidor deseje antecipá-lo, tal ação será impossível.
                    </p>
                    <p class="p-space"> Já em relação ao Tesouro Direto e às Debêntures, é possível antecipar o prazo, porém há riscos de perda de parte do dinheiro aplicado, devido à liquidez e à cobrança de impostos de renda.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic10">
                    <h2>Sou obrigado a pagar alguns impostos ao investir?</h2>
                    <br>
                    <p class="p-space">Na renda fixa, impostos são cobrados. Assim, ao realizar um investimento, é obrigatório realizar a declaração do imposto de renda.
                    </p>
                    <p class="p-space">Vale destacar, que o recolhimento é feito somente pelo IRRF (Imposto de Renda sobre a renda retido na fonte) enquanto o DARF (Documento de Arrecadação de Receitas Federais) não é incluído.
                    </p>
                    <p>As quantias cobradas são definidas de acordo com o prazo do investimento. Quanto maior for o prazo, menor a tributação sofrida.
                    </p>
                    <p>Segue abaixo, a tabela de Impostos de Renda em relação aos prazos. </p>
                    <!-- Inserir imagem se necessário -->
                </div>


                <div class="topic" id="topic11">
                    <h2>Tesouro Nacional</h2>
                    <br>
                    <p class="p-space">O Tesouro Nacional, também conhecido como Tesouro Direto, é um programa facilitador do acesso aos títulos públicos federais para as pessoas físicas. Nessa situação, uma pessoa empresta seu dinheiro ao governo, financiando a dívida pública.
                    </p>
                    <p class="p-space">Quanto à garantia, tal investimento oferece grande segurança, pois o governo é o responsável pelo título, diminuindo, assim, as chances de não pagamento ou falência.
                    </p>
                    <p class="p-space">A rentabilidade pode ser tanto pré-fixada, pós-fixada (indexadas à SELIC e IPCA) e híbrida. Além disso, certos títulos estão relacionados ao COPOM, em que semestralmente, o investidor recebe em sua conta, o pagamento dos juros acumulados.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic12">
                    <h2>LCA - Letra de Crédito do Agronegócio</h2>
                    <br>
                    <p class="p-space">São títulos utilizados para adquirir recursos para o financiamento do agronegócio, ou seja, LCAs são empréstimos feitos aos produtores e às cooperativas rurais, a fim de que esses realizem uma melhoria em suas estruturas de produção e comercialização.
                    </p>
                    <p class="p-space">O LCA, diferentemente de outros ativos de renda fixa, não possui arrecadação do Imposto de Renda. Ao se tratar da rentabilidade, pode ser pré-fixada, pós-fixada ou híbrida e quando indexada a alguma taxa de juros, geralmente, corresponde ao CDI e IPCA.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic13">
                    <h2>LCI - Letra de Crédito Imobiliário</h2>
                    <br>
                    <p>Semelhante ao LCA, o LCI é um ativo que financia o investimento no setor imobiliário.
                    </p>
                    <p>Quanto à garantia e rentabilidade, essas são idênticas ao LCA.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic14">
                    <h2>Debêntures</h2>
                    <br>
                    <p class="p-space">Muitas vezes, é confundida com o CDB devido a algumas semelhanças, porém, ao invés de investir em uma instituição financeira, nesse caso, o dinheiro é investido em uma empresa de capital aberto. Elas não contam com a cobertura do FGV e, por isso, a garantia fica a cargo de quem a emite, tendo riscos mais elevados. Entretanto, os retornos tendem a ser maiores e a maior parte dos investimentos desse ativo são a longo prazo.
                    </p>
                    <p class="p-space">Assim como os demais ativos já abordados, a rentabilidade pode ser pré-fixada, pós-fixada ou híbrida.
                    </p>
                    <p class="p-space">As Debêntures Incentivadas são aquelas que contam com a isenção do imposto de renda e tem como objetivo trazer algum benefício para a sociedade.
                    </p>
                    <p class="p-space">Já as Debêntures Não Incentivadas possuem a cobrança de imposto de renda, a fim de uma empresa adquirir recursos para aumentar sua capacidade produtiva e melhorias.
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic15">
                    <h2>CDB - Certificado de Depósito Bancário</h2>
                    <br>
                    <p class="p-space">O CDB funciona, semelhantemente, aos títulos públicos e às debêntures. Ao adquirir um CDB, o investidor empresta seu dinheiro a uma empresa, a qual paga juros pelo valor até o fim do período de aplicação. Ou seja, ao fim do “empréstimo” - quando retorna para o investidor - a instituição devolve o dinheiro acrescido dos juros, já estabelecido no momento do contrato.
                    </p>
                    <p class="p-space">A maioria das instituições possuem exigências quanto ao valor investido e alguns termos de contrato. Certas empresas aceitam aplicações com o valor mínimo de R$ 500,00. É válido destacar que os juros oferecidos são proporcionais aos valores aplicados, portanto quanto maior a quantia inserida, maior a remuneração após o vencimento do prazo.
                    </p>
                    <p class="p-space"> O resgate e valores de remuneração, além de sofrerem influência direta dos juros, também variam dependendo da empresa. Corretoras e plataformas de investimentos têm oferecido melhores condições ao investidor.
                    </p>
                    <p class="p-space">Em relação aos lucros que serão obtidos, isso será estabelecido pelo tipo de rentabilidade escolhida, podendo ser pré-fixada, pós-fixada ou híbrida. Bem como a liquidez, que pode ser no vencimento ou diária. A liquidez de vencimento corresponde à remuneração até o final do prazo do investimento, não devendo ser retirado antes, enquanto na diária é possível recolher antes do prazo final.
                    </p>
                    <p>Por fim, os CDBs possuem a tributação do imposto de renda, o qual também já foi apresentado anteriormente (visualizar tabela).
                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic16">
                    <h2>Como investir em CDB?</h2>
                    <br>
                    <p class="p-space">A grande maioria dos bancos oferecem esse tipo de investimento aos clientes. Assim, para realizar uma aplicação basta transferir o dinheiro da conta corrente para o CDB. A fim de se alcançar um retorno financeiro positivo, o investimento deve oferecer um retorno equivalente ou acima de 100% do CDI.
                    </p>
                    <p class="p-space">Primeiramente, é necessário pesquisar as opções mais vantajosas presentes em bancos e corretoras. Em seguida, analise as condições da empresa escolhida, como: os juros, a rentabilidade, liquidez, prazos de carência e se há cobertura do FGC. A seguir, crie sua conta, apresentando informações básicas, como documento de identidade.
                    </p>
                    <p>A seguir, confira alguns exemplos de investimentos no CDB quanto à rentabilidade.
                    </p>
                    <p><strong>Pré-fixado:</strong></p>
                    <p><strong>Pós-fixado:</strong></p>
                    <p><strong>Híbrido:</strong></p>
                    <!-- Inserir imagem se necessário -->
                </div>
                <div class="topic" id="topic17">
                    <h2>Caso tenha algum problema no investimento, como poderá recorrer?</h2>
                    <br>
                    <p class="p-space">Os ativos de renda fixa são registrados em algumas empresas, a fim de oferecer maior segurança para o investidor. Dessa forma, caso a empresa em que seu ativo esteja contido venha a falência ou algum outro problema, devido à custódia, é possível realizar a transferência para outra instituição.
                    </p>
                    <p class="p-space">Nesse caso, por exemplo, a SELIC é responsável pelo registro no mercado dos títulos públicos do governo, enquanto a CETIP (Central de Custódia e Liquidação Financeira de Títulos) assegura a custódia de algumas rendas fixas, como CDB, LCI e LCA.

                    </p>
                    <!-- Inserir imagem se necessário -->
                </div>

                <div class="topic" id="topic18">
                    <h2>Cobertura FGC</h2>
                    <br>
                    <p class="p-space">O FGC (Fundo Garantidor de Créditos) funciona como um seguro sobre os investimentos, ou seja, tem como função proteger o patrimônio investido, caso alguns problemas com a instituição ocorram, como falências, intervenções ou liquidações.
                    </p>
                    <p>A cobertura é contemplada nos investimentos de renda fixa a seguir: CDB, recibos e depósitos bancários, LCI, LCA etc. Vale destacar que os títulos públicos, emitidos pelo Tesouro Central não possuem cobertura do FGC, pois, por estarem ligados ao governo, possuem uma grande segurança.
                    </p class="p-space">
                    <p class="p-space">Os recursos do FGC são advindos de depósitos de instituições financeiras, como bancos e a Caixa Econômica Federal, que correspondem a 0,01% do valor de todos os depósitos elegíveis no período de um mês.
                    </p>
                    <p class="p-space">Com isso, o FGC oferece uma garantia de R$ 250.000,00 por pessoa física (CPF) ou CNPJ, caso haja dinheiro investido em alguma instituição coberta pelo seguro. Além disso, se a pessoa possuir o dinheiro aplicado em seu CPF e no CNPJ de sua empresa na mesma instituição que sofrer uma quebra, conseguirá receber R$ 250.000,00 em ambas as contas, ou seja, duas vezes.
                    </p>
                    <br><br>
                    <h2>Quantas vezes esse fundo pode ser utilizado?</h2>
                    <br>
                    <p class="p-space"> A cada quatro anos, o FGC pode ser utilizado pelo investidor, possuindo uma cobertura total de R$ 1.000.000,00. Então, poderá utilizar quatro vezes o seguro, equivalendo a R$ 250.000,00 em cada instituição. Porém, se toda a quantia for utilizada em quatro empresas e seja necessário o seguro em mais outra, isso não será possível. Passado o período de quatro anos, caso o valor total ou parte dele for utilizado, ele retornará a R$ 1.000.000,00, renovando-se a cada período. </p>
                    <!-- Inserir imagem se necessário -->

                </div>
                <div class="topic" id="topic19">
                    <h2>Deseja aprender mais sobre investimentos?</h2>
                    <br>
                    <p>Acesse o nosso curso sobre <a href="../education/variable"> renda variável </a> compreender melhor o mercado de ações.
</p>
                    <!-- Inserir imagem se necessário -->
                </div>
            </div>
        </div>
        <div class="button-container">
            <button type="button" class="button" onclick="changeTopic(-1)" id="prevButton" disabled><i class="fa-solid fa-arrow-left"></i></button>
            <button type="button" class="button" onclick="changeTopic(1)" id="nextButton"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <div class="svg-container">
        <svg id="qinvestLogoSmall" viewBox="0 0 199 38" xmlns="http://www.w3.org/2000/svg">
            <path d="M183.639 0.184662V9.75567H174.068V19.3267H164.498V28.8968L169.888 34.2571H199V5.545L193.61 0.184662H183.639ZM185.615 1.19846H192.931L196.624 4.86995H189.308L185.615 1.19846ZM184.652 2.14586L188.354 5.82421V13.1557L184.652 9.47668V2.14586ZM189.705 6.22004H197.587V32.8431H170.564V25.3618H180.134V15.791H189.705V6.22004ZM176.044 10.7686H183.698L187.392 14.4401H179.738L176.044 10.7686ZM175.082 11.716L178.783 15.3952V22.7258L175.082 19.0475V11.716ZM166.473 20.3396H174.127L177.821 24.0111H170.167L166.473 20.3396ZM165.511 21.2868L169.213 24.9651V31.959L165.511 28.2806V21.2868Z" />
        </svg>
    </div>
</x-layout.app>