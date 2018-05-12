@extends('main')
@section('content')
    <div class="row">
        <h2>
            <a href="">All Contacts</a> -- <a href="">My Favorites</a>
        </h2>
    </div>
    <hr>
    <div class="row">
        Search
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <ul class="list-group" id="contact-list">

                    @foreach($contacts as $contact)
                        <li class="list-group-item">
                            <div class="col-xs-12 col-sm-3">
                                <img src="http://api.randomuser.me/portraits/men/{{rand(1, 50)}}.jpg"
                                     class="img-responsive img-circle"/>
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <span class="name">{{$contact->full_name}}</span><br/>
                                <a href="{{route('favourite.update', $contact->id)}}">
                                    @if($contact->favourite)
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                                </a>
                                <a>
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a>
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    </div>
@endsection