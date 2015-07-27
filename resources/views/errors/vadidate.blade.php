@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ var_dump($error) }}</li>
        @endforeach
    </ul>
@endif