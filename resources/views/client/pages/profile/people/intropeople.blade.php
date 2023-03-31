@extends('client.layout.indexlayout')
@section('content')
{{-- INFOR PEOPLE --}}
@include('client.pages.profile.people.infopeople')
{{-- END INFOR PEOPLE --}}

<div class="profile-infos">
    <main>
        <div class="container_intro">
            <div class="wrapper_intro">
                <h3>Introduce</h3>
                <div class="app_content_intro">
                    <ul class="tabs_intro">
                        <li data-target="#content_1_intro">
                            <p>Overview</p>
                        </li>
                    </ul>
                    <div>
                    <div class="tabcontent_intro active_intro" id="content_1_intro">
                        <div class="containers_intro">
                            <ul>
                                <li>
                                    <span><i class="fa-solid fa-briefcase"></i>Director at 99media Ltd</span> 
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-building-columns"></i>Studied at Amity University</span>
                                    </li>
                                <li>
                                    <span><i class="fa-solid fa-graduation-cap"></i>Went to DPS Delhi</span> 
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-house"></i>Lives in HCM CITY, VIETNAM</span> 
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-heart"></i>Single</span> 
                                </li>
                            </ul> 
                        </div>
                    </div>    
                 
                    </div> 
                </div>
            </div>
        </div>
    </main>
</div>

@endsection