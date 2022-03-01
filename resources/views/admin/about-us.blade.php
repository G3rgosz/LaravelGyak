@include("admin.top-header")

{{ print_r($names) }}

@foreach( $names as $name )
    <h3>{{ $name }}</h3>
@endforeach