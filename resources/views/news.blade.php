@extends('app')

@section('title','الأخبار')

@section('content')

    <div class="container">
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
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary">عرض</button>
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

    </div>


@stop
