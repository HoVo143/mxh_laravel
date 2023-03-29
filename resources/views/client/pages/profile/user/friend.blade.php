@extends('client.layout.indexlayout')
@section('content')
{{-- INFOR USER --}}
@include('client.pages.profile.user.infor')
{{-- END INFOR USER --}}

<div class="profile-infos">
    @include('client.pages.profile.include.friend')
</div>

@endsection