@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('Un lien de vérification a été envoyé à votre e-mail.') }}
            </div>
            @endif
            {{ __('Avant de cliquer, vérifiez votre boite mail.') }}
            {{ __('Si vous n'avez pas reçu de mail) }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en recevoir un autre.') }}</a>.
        </div>
    </div>
</div>
@endsection