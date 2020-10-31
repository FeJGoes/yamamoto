@extends('web.index')

@section('title', 'Contato - Thiago Yamamoto')

@section('content')

<div class="ty-between-section-title">
  <h6>Diálogo constroí</h6>
  <h3>Contato</h3>
</div>

<form class="uk-width-1-3@m uk-width-1-2@s uk-width-4-5 uk-margin-auto" method="POST" action="" onsubmit="return false">
  <div class="uk-margin-middle-top">
    <label for="nome" class="uk-form-label">
      <small>*</small>
      Nome:
    </label>
    <input class="uk-input uk-form-small" id="nome" type="text" maxlength="100" required>
  </div>

  <div class="uk-margin-top">
    <label for="email" class="uk-form-label">
      <small>*</small>
      Email:
    </label>
    <input class="uk-input uk-form-small" id="email" type="text" maxlength="100" required>
  </div>

  <div class="uk-margin-top">
    <label for="assunto" class="uk-form-label">
      <small>*</small>
      Assunto:
    </label>
    <input class="uk-input uk-form-small" id="assunto" name="assunto" type="text" maxlength="100" required>
  </div>

  <div class="uk-margin-top">
    <label for="mensagem" class="uk-form-label">
      <small>*</small>
      Sua mensagem:
    </label>
    <textarea class="uk-textarea" id="mensagem" cols="30" rows="5"></textarea>
  </div>

  <div class="uk-flex uk-flex-center uk-margin ">
    <button type="submit" class="uk-button uk-button-small uk-width-1-3 ty-bg-primary ty-tcw">Enviar</button>
  </div>
</form>

@endsection
