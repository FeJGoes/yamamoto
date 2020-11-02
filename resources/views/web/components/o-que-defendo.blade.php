<section id="ty-box-area">
  <div class="ty-box-item">
    <img class="ty-box-icon icon-1" src="{{asset('icons/network-black.svg')}}" alt="network" width="50">
    <h3 class="ty-box-title">Missão</h3>
    <p class="ty-box-text">Construir um projeto baseado na fraternidade, tendo em vista o bem o comum afim de garantir
      aos nossos filhos e netos, a Rio Claro que tanto desejamos.</p>
    <a href="#modal-missao" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary"
      uk-toggle>ver mais</a>
  </div>

  <div class="ty-box-item">
    <img class="ty-box-icon icon-2" src="{{asset('icons/compass-black.svg')}}" alt="compass" width="50">
    <h3 class="ty-box-title">Visão</h3>
    <p class="ty-box-text">Transpor as críticas de quaisquer espécie por meio da busca continuada de soluções que
      respondam as reivindicações da população, a qual represento como legislador.</p>
    <a href="#modal-visao" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary"
      uk-toggle>ver
      mais</a>
  </div>

  <div class="ty-box-item">
    <img class="ty-box-icon icon-3" src="{{asset('icons/paper-plane-1-black.svg')}}" alt="paper-plane-1" width="50">
    <h3 class="ty-box-title">Valores</h3>
    <p class="ty-box-text">Prezo pela ordem, verdade, justiça, paz, amor, unidade, e caridade, fundados na moral
      judaico-cristã.</p>
    <a href="#modal-valores" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary"
      uk-toggle>ver mais</a>
  </div>
</section>


{{-- MODAL MISSÃO --}}
<div id="modal-missao" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <h2 class="uk-modal-title">Frentes de Trabalho</h2>
    <dl>
      <dt class="uk-margin">
        <small>
          <b>1º FRENTE: ENTIDADES FILANTROPICAS SEM FINS LUCRATIVOS (3º SETOR)</b>
        </small>
      </dt>
      <dd>
        <p>Defendo a bandeira das entidades e associações pois elas surgem do estímulo da fraternidade, além de ser uma
          forte geradora de emprego e renda. Veja alguns exemplos abaixo:</p>
        <ul class="uk-list uk-flex uk-flex-wrap uk-flex-around">
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/batimento-cardiaco.png')}}" alt="">
            <strong class="ty-modal-missao-text">ENTIDADES DE SAÚDE</strong>
          </li>
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/velho.png')}}" alt="">
            <strong class="ty-modal-missao-text">ABRIGO DE IDOSOS</strong>
          </li>
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/hospital.png')}}" alt="">
            <strong class="ty-modal-missao-text">CLÍNICAS DE RECUPERAÇÃO</strong>
          </li>
        </ul>
        <ul class="uk-list uk-flex uk-flex-wrap uk-flex-around">
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/livros.png')}}" alt="">
            <strong class="ty-modal-missao-text">INSTITUIÇÃO EDUCACIONAL</strong>
          </li>
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/jogador-de-futebol.png')}}" alt="">
            <strong class="ty-modal-missao-text">PROJETOS DE ESPORTE</strong>
          </li>
          <li class="uk-flex uk-flex-between">
            <img class="uk-margin-small" src="{{asset('images/familia.png')}}" alt="">
            <strong class="ty-modal-missao-text">ABRIGO DE CRIANÇAS</strong>
          </li>
        </ul>
      </dd>
      <br>
      <dt class="uk-margin">
        <small>
          <b>2º FRENTE: DEFESA DA FAMILIA E DA VIDA</b>
        </small>
      </dt>
      <dd>
        <table id="segunda-frente">
          <tr>
            <td class="uk-flex uk-flex-center uk-flex-middle">
              <img width="50" src="{{asset('images/familia2.png')}}" alt="familia_icon">
            </td>
            <td>
              <h4><b>Família</b></h4>
              <p>A família é muito importante pois é onde ainda está vivo o senso de nação, ou seja, o senso de deixar
                algo melhor para a próxima geração.</p>
            </td>
          </tr>
          <tr>
            <td class="uk-flex uk-flex-center uk-flex-middle">
              <img width="50" src="{{asset('images/feto.png')}}" alt="vida_icon">
            </td>
            <td>
              <h4><b>Vida</b></h4>
              <p>Defendo a vida desde a sua concepção, pois se perdemos o direito de nascer perdemos também todos os
                outros direitos como saúde, segurança e educação.</p>
            </td>
          </tr>
        </table>
      </dd>
    </dl>
  </div>
</div>

{{-- MODAL VISÃO --}}
<div id="modal-visao" class="uk-modal-full" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
    <div class="uk-width-3-4@s uk-margin-auto">

      <div class="ty-between-section-title">
        <h6>Olhar atento</h6>
        <h3>Fazemos parte da solução</h3>
      </div>

      <section class="uk-flex uk-flex-wrap uk-flex-around">
        <figure class="uk-width-1-1 uk-width-1-2@m uk-flex uk-flex-center uk-flex-middle">
          <img src="{{asset('images/emenda-saude.png')}}" alt="thiago_yamamoto">
        </figure>

        <div class="uk-width-1-1 uk-width-1-2@m">
          <h4><em>+500 MIL &nbsp;</em>Emendas para Saúde</h4>

          <p>Neste mandato dediquei especial atenção à saúde de Rio Claro, sempre fiscalizando todos os equipamentos da
            saúde
            municipal. Neste incansável e contínuo trabalho conheci e identifiquei vários problemas como o de
            infraestrutura
            das UPA’s e a falta de equipamentos.</p>

          <p>Por isso, trabalhei e viabilizei três emendas:</p>

          <ol>
            <li><b>80 mil</b> com a Deputada Keiko Ota, a qual foi utilizada para melhorias na <b>UBS do Wenzel</b>;</li>
            <li><b>200 mil</b> com o Deputado Reinaldo Alguz aplicada no Centro de Habilitação Infantil <b>Princesa
                Victória</b>;</li>
            <li><b>250 mil</b> com o Deputado Enrico Misasi utilizada na reforma da <b>UPA do Cervezão</b>.</li>
          </ol>
        </div>
      </section>

      <hr>

      <section>
        <h4>Oportunidades de Melhorias</h4>

        <p>Identificamos oportunidades de melhorias ao constatar durante as visitas problemas como: reformas, déficit de
          pessoal, falta de equipamentos como por exemplos computadores.</p>

        <p>E uma das minhas principais indicações de melhoria foi a implantação de um sistema de autoatendimento
          permitindo assim que inúmeros serviços fossem realizados sem a necessidade do deslocamento do paciente até a
          unidade de saúde, tais como:</p>

        <ul class="uk-list uk-flex uk-flex-wrap uk-flex-around">
          <li class="uk-flex uk-flex-column uk-flex-middle uk-text-center ty-oportunidades-li">
            <img width="80" src="{{asset('images/agenda.png')}}" alt="">
            <small class="uk-margin">Marcar e desmarcar consultas</small>
          </li>
          <li class="uk-flex uk-flex-column uk-flex-middle uk-text-center ty-oportunidades-li">
            <img width="80" src="{{asset('images/prescription.png')}}" alt="">
            <small class="uk-margin">Cópia de receita digitalizada</small>
          </li>
          <li class="uk-flex uk-flex-column uk-flex-middle uk-text-center ty-oportunidades-li">
            <img width="80" src="{{asset('images/capsules.png')}}" alt="">
            <small class="uk-margin">Verificar a disponibilidades de medicamentos</small>
          </li>
          <li class="uk-flex uk-flex-column uk-flex-middle uk-text-center ty-oportunidades-li">
            <img width="80" src="{{asset('images/medical-report.png')}}" alt="">
            <small class="uk-margin">Obter resultados de exames</small>
          </li>
        </ul>
      </section>

      <div class="ty-between-section-title">
        <h6>Olhar atento</h6>
        <h3>Infraestrutura</h3>
      </div>

      <section class="uk-flex uk-flex-wrap uk-flex-around">
        <div class="uk-width-1-1 uk-width-1-2@m">
          <h4><em>+200 MIL &nbsp;</em>para o Jd. São João</h4>

          <p>Na infraestrutura é importante destacar o Jardim São João local onde morei por mais de 10 anos, por isso, atento à melhoria da qualidade de vida no bairro, viabilizei por meio do deputado federal Luiz Lauro Filho a emenda de mais de 200 mil reais para o recapeamento das ruas 7, 8, 10 e as avenidas M27, M29, M31.</p>

          <p>Durante o mandato considerei a infraestrutura municipal como questão crucial e de longo prazo.</p>
        </div>

        <figure class="uk-width-1-1 uk-width-1-3@m uk-flex uk-flex-center uk-flex-middle uk-margin-large">
          <img src="{{asset('images/infraestrutura.png')}}" alt="infraestrutura">
        </figure>
      </section>

      <div class="ty-between-section-title">
        <h6>Olhar atento</h6>
        <h3>Zona Rural</h3>
      </div>

      <section class="uk-flex uk-flex-wrap uk-flex-around">
        <figure class="uk-width-1-1 uk-width-1-3@m uk-flex uk-flex-center uk-flex-middle uk-margin-large">
          <img src="{{asset('images/camacua.png')}}" alt="camacua">
        </figure>

        <div class="uk-width-1-1 uk-width-1-2@m">
          <h4>Lugares esquecidos</h4>

          <p>Gostaria de destacar essa indicação de melhoria na estrada de acesso do Horto do Camacuã, pois trata-se de um local na zona rural de Rio Claro que durante um longo período de tempo ficou esquecido, talvez pelo fato de estar localizado no limite territorial do município.</p>
        </div>
      </section>

      <hr>

      <section class="uk-flex uk-flex-wrap uk-flex-around">
        <div class="uk-width-1-1 uk-width-1-2@m">
          <h4>Solução de prédio abandonado</h4>

          <p>O foco do meu trabalho como legislador foi sempre buscar ser parte da solução, e com essa perspectiva viabilizei junto ao executivo a doação de um grande prédio abandonado pela administração pública, para uma entidade do 3º setor, a qual revitalizará para oferecer educação gratuita à comunidade rioclarense.</p>
        </div>

        <figure class="uk-width-1-1 uk-width-1-3@m uk-flex uk-flex-center uk-flex-middle uk-margin-large">
          <img src="{{asset('images/maria-peregrina1.png')}}" alt="maria-peregrina1">
        </figure>
      </section>

      <hr>

      <section class="uk-flex uk-flex-wrap uk-flex-around">
        <figure class="uk-width-1-1 uk-width-1-3@m uk-flex uk-flex-center uk-flex-middle">
          <img src="{{asset('images/educacao-familiar.png')}}" alt="educacao-familiar">
        </figure>

        <div class="uk-width-1-1 uk-width-1-2@m ty-margin-x">
          <h4>Educação inovadora e familiar</h4>

          <p>Atento à qualidade da educação de nosso município busquei insistentemente novas possibilidades.</p>

          <p>Por isso, num árduo trabalho do legislativo em conjunto a uma associação do 3º setor no ano de 2020, pudemos trazer para Rio Claro uma nova opção de educação, inovadora baseada em metodologias ativas, que são capazes de prover um ensino integral e amplo contando com a participação efetiva da família em todo o processo de formação da criança.</p>
        </div>

      </section>

    </div>
  </div>
</div>

{{-- MODAL VALORES --}}
<div id="modal-valores" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <h2 class="uk-modal-title">Nossa força está na união</h2>
    <img src="{{asset('images/valores-img.png')}}" alt="">
    <p>A marca da "nossa" legislatura é a união de pessoas que prezam por esses mesmos valores, por isso, preoucupadas
      em promover o bem comum buscam a fraternidade para identificar problemas e buscar soluções para construir uma Rio
      Claro melhor.</p>
  </div>
</div>
