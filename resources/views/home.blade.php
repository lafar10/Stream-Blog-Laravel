@extends('app')

@section('content')
    <div class="container">

        <div align="center">
            <h4 style="color:green;">مباريات اليوم </h4>
            <hr style="color:green;width:150px;">
        </div>
        @foreach ($matches as $match)
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <div class="row" style="text-align: center">
                                <div class="col-4">
                                    <h6>{{$match->channel}} <i class="fas fa-tv"></i></h6>
                                </div>
                                <div class="col-4">
                                    <h6>{{$match->cup}} <i class="fas fa-trophy"></i></h6>
                                </div>
                                <div class="col-4">
                                    <h6>{{$match->mic}} <i class="fas fa-microphone-alt"></i></h6>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row" style="text-align: center">
                                <div class="col-4">
                                    <img src="{{ asset('pics/'.$match->club_hote_pic)}}" style="width:100px;height:100px;">
                                    <h6>{{$match->club_hote}}</h6>
                                    <span style="font-size:25px;" class="badge rounded-pill bg-success">{{$match->club_hote_but}}</span>
                                </div>
                                <div class="col-4" >
                                    <br>
                                    <br>
                                    <span class="badge rounded-pill  bg-secondary">{{$match->heure}} GMT</span>
                                    <br>
                                    <strong style="font-size:20px;">Vs</strong>
                                    @if ($match->etat === 'بعد قليل')
                                        <h4><span class="badge rounded-pill  bg-success">&nbsp;{{$match->etat}}&nbsp;</span></h4>
                                    @elseif($match->etat === 'مباشر')
                                        <h4><span class="badge rounded-pill  bg-danger">&nbsp;{{$match->etat}}&nbsp;</span></h4>
                                    @else
                                        <h4><span class="badge rounded-pill  bg-secondary">&nbsp;{{$match->etat}}&nbsp;</span></h4>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('pictures/'.$match->club_guest_pic)}}" style="width:100px;height:100px;" >
                                    <h6>{{$match->club_guest}}</h6>
                                    <span style="font-size:25px;" class="badge rounded-pill bg-success">{{$match->club_guest_but}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="go">
                                <form action="{{route('get.details.match')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="match_id"  value="{{$match->id}}">
                                    <button type="submit" class="btn btn-danger" style="border-radius: 0%">
                                        شاهد الأن
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach


        <br>
        <br>

        <div class="album py-5 bg-light">
            <div class="container">
                <div align="center">
                    <h3>أخبار الرياضة </h3>
                    <hr style="width:200px;">
                </div>
                <br>
                @if($news->count() > 0)
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($news as $new)
                            <form action="{{route('details')}}" method="GET" >
                                @csrf
                                <input type="hidden" name="news_id" value="{{$new->id}}">
                                <div class="col">
                                        <div class="card shadow-sm">
                                        <img class="img-fluid" width="100%" style="height:240px;"  src="{{asset('/public/images/'.$new->pic)}}" >
                                        <div class="card-body">
                                            <p class="card-text">{{$new->subtitle}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="submit" class="btn btn-outline-success" style="border-radius:0%;">عرض</button>
                                                </div>
                                                <small class="text-muted">{{$new->date}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach

                    </div>
                    <br>
                    <br>
                    <div class="d-flex justify-content-center" >

                        {{$news->links()}}
                    </div>
                @else
                    <br>
                    <div class="d-flex justify-content-center">
                        <h4>لا يوجد هذا الخبر</h4>
                    </div>

                @endif
            </div>
        </div>
        <br>
        <br>
        <br>
                    <br>

        <div class="owl-carousel owl-theme">
            <div class="item"><img src="images/ad.jpg" ></div>
            <div class="item"><img src="images/2df.jpg" ></div>
            <div class="item"><img src="images/ar.jpg" ></div>
            <div class="item"><img src="images/bn.jpg" ></div>
            <div class="item"><img src="images/bn2.jpg" ></div>
            <div class="item"><img src="images/bn3.png" ></div>
            <div class="item"><img src="images/bn4.jpg" ></div>
            <div class="item"><img src="images/es.jpg" ></div>
            <div class="item"><img src="images/sky.jpg" ></div>
        </div>
    </div>
@endsection
