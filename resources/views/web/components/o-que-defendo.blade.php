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
    <a href="#modal-visao" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary" uk-toggle>ver
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
        <table>
          <tr>
            <td><img src="{{asset('images/batimento-cardiaco.png')}}" alt=""></td>
            <td><strong class="ty-text-table">ENTIDADES DE SAÚDE</strong></td>
            <td><img src="{{asset('images/velho.png')}}" alt=""></td>
            <td><strong class="ty-text-table">ABRIGO DE IDOSOS</strong></td>
            <td><img src="{{asset('images/hospital.png')}}" alt=""></td>
            <td><strong class="ty-text-table">CLÍNICAS DE RECUPERAÇÃO</strong></td>
          </tr>
          <tr>
            <td><img src="{{asset('images/livros.png')}}" alt=""></td>
            <td><strong class="ty-text-table">INSTITUIÇÃO EDUCACIONAL</strong></td>
            <td><img src="{{asset('images/jogador-de-futebol.png')}}" alt=""></td>
            <td><strong class="ty-text-table">PROJETOS DE ESPORTE</strong></td>
            <td><img src="{{asset('images/familia.png')}}" alt=""></td>
            <td><strong class="ty-text-table">ABRIGO DE CRIANÇAS</strong></td>
          </tr>
        </table>
      </dd>
      <br>
      <dt class="uk-margin">
        <small>
          <b>2º FRENTE: DEFESA DA FAMILIA E DA VIDA</b>
        </small>
      </dt>
      <dd>
        <table>
          <tr>
            <td class="uk-flex uk-flex-center uk-flex-middle">
              <img src="{{asset('images/familia2.png')}}" alt="familia_icon">
            </td>
            <td>
              <h4><b>Família</b></h4>
              <p>A família é muito importante pois é onde ainda está vivo o senso de nação, ou seja, o senso de deixar
                algo melhor para a próxima geração.</p>
            </td>
          </tr>
          <tr>
            <td class="uk-flex uk-flex-center uk-flex-middle">
              <img src="{{asset('images/feto.png')}}" alt="vida_icon">
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
        <section>
            <figure>
              <img src="{{asset('images/emenda-saude.png')}}" alt="thiago_yamamoto">
              <span class="ty-left-box-text">+500 MIL</span>
            </figure>
            <h4>Emendas para Saúde</h4>

            <p>Neste mandato dediquei especial atenção à saúde de Rio Claro, sempre fiscalizando todos os equipamentos da saúde
              municipal. Neste incansável e contínuo trabalho conheci e identifiquei vários problemas como o de infraestrutura
              das UPA’s e a falta de equipamentos.</p>

            <p>Por isso, trabalhei e viabilizei três emendas:</p>

            <ol>
              <li><b>80 mil</b> com a Deputada Keiko Ota, a qual foi utilizada para melhorias na <b>UBS do Wenzel</b>;</li>
              <li><b>200 mil</b> com o Deputado Reinaldo Alguz aplicada no Centro de Habilitação Infantil <b>Princesa
                  Victória</b>;</li>
              <li><b>250 mil</b> com o Deputado Enrico Misasi utilizada na reforma da <b>UPA do Cervezão</b>.</li>
            </ol>
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
