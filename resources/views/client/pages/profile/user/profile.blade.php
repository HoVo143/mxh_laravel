@extends('client.layout.indexlayout')
@section('content')
<body>
    {{-- INFOR USER --}}
    @include('client.pages.profile.user.infor')
    {{-- END INFOR USER --}}

    <div class="profile-info">
        @include('client.pages.profile.include.profiles')
    </div>
</body>

@endsection