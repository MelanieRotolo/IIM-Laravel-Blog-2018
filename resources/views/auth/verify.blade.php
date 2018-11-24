@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien vous a été envoyé sur votre adresse email') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre courriel pour un lien de vérification.') }}
                    {{ __('Si vous n\'avez pas reçu l\'email') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici pour en demander un autre') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
