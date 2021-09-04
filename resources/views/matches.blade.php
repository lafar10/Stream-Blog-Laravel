@extends('app')

@section('title','الرئيسية')

@section('content')


    <br>
    @if(request()->is('Get-Yesterday-Match'))
        <div align="center">
            <h3>مباريات الأمس </h3>
            <hr style="width:200px;">
        </div>
    @elseif(request()->is('Get-Tomorrow-Match'))
        <div align="center">
            <h3>مباريات الغد</h3>
            <hr style="width:200px;">
        </div>
    @endif
    <div  align="center">
        @if($matches->count() > 0)
            @foreach ($matches as $match)
                <div class="card" >
                    <div class="card-header bg-success text-white" >
                        <h6 align="center">{{$match->channel}} &nbsp;&nbsp;&nbsp;&nbsp; {{$match->mic}} &nbsp;&nbsp;&nbsp;&nbsp; {{$match->cup}}</h6>
                    </div>
                    <div class="card-body">
                            <div class="row" align="center">
                                <div class="col-lg-3">
                                    <img   src="{{asset('pics/'.$match->club_hote_pic)}}" style="width:155px;height:120px;" class="img-fluid" alt="...">
                                    <br>
                                    <h5  id="nclub">{{$match->club_hote}}</h5>
                                </div>
                                <div class="col-lg-6" style="margin-top:40px;">
                                    <span style="font-size:25px;margin-top:10px;" class="badge rounded-pill bg-success">{{$match->club_hote_but}}</span>
                                    &nbsp;&nbsp;<strong style="font-size:22px;">{{$match->heure}} GMT</strong>&nbsp;&nbsp;
                                    <span style="font-size:25px;" class="badge rounded-pill bg-success">{{$match->club_guest_but}}</span>
                                    @if($match->etat === 'مباشر')
                                        <h3><span class="badge rounded-pill  bg-danger">&nbsp;{{$match->etat}}&nbsp;</span></h3>
                                    @elseif ($match->etat === 'بعد قليل')
                                        <h3><span class="badge rounded-pill  bg-success">&nbsp;{{$match->etat}}&nbsp;</span></h3>
                                    @else
                                        <h3><span class="badge rounded-pill  bg-secondary">&nbsp;{{$match->etat}}&nbsp;</span></h3>
                                    @endif
                                    </div>
                                <div class="col-lg-3">
                                    <img   src="{{asset('pictures/'.$match->club_guest_pic)}}" style="width:155px;height:120px;" class="img-fluid" alt="...">
                                    <br>
                                    <h5 id="nclub">{{$match->club_guest}}</h5>
                                </div>
                            </div>
                    </div>
                    <div class="overlay">
                        <div class="go">
                            <a href="" class="btn btn-danger" style="border-radius: 0%">شاهد المبارة الآن</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="d-flex justify-content-center text-success">
                <h3>لا يوجد مباريات  </h3>
            </div>
        @endif



    </div>
        <br>

        @stop
