@extends('settings.layout')

@section('settings_content')
    <h2 class="mb-4 h5">{{__('Discord Webhook')}}</h2>

    <form method="post" action="{{route('settings.discordwebhook.update')}}">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-lg-6">

                <x-input.text label="{{(__('Webhook URL'))}}"
                              name="webhook_url"
                              value="{{$settings->webhook_url}}"
                              tooltip="{{(__('Enter the URL to your Discord Webhook '))}}"/>



                    <div class="form-group d-flex justify-content-end mt-3">
                        <button name="submit" type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </div>


            </div>
        </div>
    </form>
@endsection
