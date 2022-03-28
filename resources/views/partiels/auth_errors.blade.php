@if ($errors->any())
    <div class="pb-1">
        <div>
            {{ __('Whoops!! Quelque chose ne va pas.') }}
        </div>

        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
    </div>
@endif