<section id="ty-box-area">
    <div class="ty-box-item">
        <img class="ty-box-icon icon-1" src="{{asset('icons/network-black.svg')}}" alt="network" width="50">
        <h3 class="ty-box-title">Missão</h3>
        <p class="ty-box-text">Construir um projeto baseado na fraternidade, tendo em vista o bem o comum afim de garantir aos nossos filhos e netos, a Rio Claro que tanto desejamos.</p>
        <a href="#modal-missao" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary" uk-toggle>ver mais</a>
    </div>

    <div class="ty-box-item">
        <img class="ty-box-icon icon-2" src="{{asset('icons/compass-black.svg')}}" alt="compass" width="50">
        <h3 class="ty-box-title">Visão</h3>
        <p class="ty-box-text">Transpor as críticas de quaisquer espécie por meio da busca continuada de soluções que respondam as reivindicações da população, a qual represento como legislador.</p>
        <a href="#" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary">ver mais</a>
    </div>

    <div class="ty-box-item">
        <img class="ty-box-icon icon-3" src="{{asset('icons/paper-plane-1-black.svg')}}" alt="paper-plane-1" width="50">
        <h3 class="ty-box-title">Valores</h3>
        <p class="ty-box-text">Prezo pela ordem, verdade, justiça, paz, amor, unidade, e caridade, fundados na moral judaico-cristã.</p>
        <a href="#modal-valores" class="uk-button uk-button-small uk-margin-small-top ty-bp ty-tcw ty-bg-primary" uk-toggle>ver mais</a>
    </div>
</section>


{{-- MODAL MISSÃO --}}
<div id="modal-missao" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Frentes de Trabalho</h2>
        <dl>
            <dt><b>1º FRENTE: ENTIDADES FILANTROPICAS SEM FINS LUCRATIVOS (3º SETOR)</b></dt>
            <dd>
                <p>Defendo a bandeira das entidades e associações pois elas surgem do estímulo da fraternidade, além de ser uma forte geradora de emprego e renda. Veja alguns exemplos abaixo:</p>
                <table>
                    <tr>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>ENTIDADES DE SAÚDE</small></td>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>ABRIGO DE IDOSOS</small></td>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>CLÍNICAS DE RECUPERAÇÃO</small></td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>INSTITUIÇÃO EDUCACIONAL</small></td>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>PROJETOS DE ESPORTE</small></td>
                        <td><img src="{{asset('images/missao-frente-2-familia.webp')}}" alt=""></td>
                        <td><small>ABRIGO DE CRIANÇAS</small></td>
                    </tr>
                </table>
                {{-- <img src="{{asset('images/missao1.')}}" alt=""> --}}
            </dd>
            <br>
            <dt><b>2º FRENTE: DEFESA DA FAMILIA E DA VIDA</b></dt>
            <dd>
                <table>
                    <tr>
                        <td class="uk-flex uk-flex-center uk-flex-middle">
                            <img src="{{asset('images/missao-frente-2-familia.webp')}}" alt="familia_icon">
                        </td>
                        <td>
                            <h4>Família</h4>
                            <p>A família é muito importante pois é onde ainda está vivo o senso de nação, ou seja, o senso de deixar algo melhor para a próxima geração.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="uk-flex uk-flex-center uk-flex-middle">
                            <img src="{{asset('images/missao-frente-2-vida.webp')}}" alt="vida_icon">
                        </td>
                        <td>
                            <h4>Vida</h4>
                            <p>Defendo a vida desde a sua concepção, pois se perdemos o direito de nascer perdemos também todos os outros direitos como saúde, segurança e educação.</p>
                        </td>
                    </tr>
                </table>
            </dd>
        </dl>
    </div>
</div>

{{-- MODAL VALORES --}}
<div id="modal-valores" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Nossa força está na união</h2>
        <img src="{{asset('images/valores-img.png')}}" alt="">
        <p>A marca da "nossa" legislatura é a união de pessoas que prezam por esses mesmos valores, por isso, preoucupadas em promover o bem comum buscam a fraternidade para identificar problemas e buscar soluções para construir uma Rio Claro melhor.</p>
    </div>
</div>
