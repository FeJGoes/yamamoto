@extends('web.index')

@section('title', 'Visão - Thiago Yamamoto')

@section('content')

<div class="ty-between-section-title">
  <h6>Olhar atento</h6>
  <h3>Fazemos parte da solução</h3>
</div>

<section id="ty-about-container">
  <div class="ty-about-box-left">
    <figure>
      <img src="{{asset('images/emenda-saude.webp')}}" alt="thiago_yamamoto">
      <span class="ty-left-box-text">+500 MIL</span>
    </figure>
  </div>

  <div class="ty-about-box-right">
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
  </div>
</section>





@endsection
