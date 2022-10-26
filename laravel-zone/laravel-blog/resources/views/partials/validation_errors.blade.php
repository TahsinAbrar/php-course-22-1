@if (!empty($errors->all()))
    <div class="row alert alert-danger">
        @foreach($errors->all() as $error)
            <ul>
                <li class="">{{ $error }}</li>
            </ul>
        @endforeach
    </div>
@endif
