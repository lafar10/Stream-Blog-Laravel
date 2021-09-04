@extends('admin.master')

@section('title','المباريات')

@section('content')


    <div align="center" class="align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center">المباريات</h1>
    </div>

    <br>
    <br>
    <div class="container">
            <div align="right">
                <!-- Button trigger modal -->
                <form action="{{route('search.match')}}" method="get" class="d-flex justify-content-center">
                    @csrf
                    <input class="form-control" type="search" name="search_match" style="text-align:center;width:200px;" placeholder="ابحث عن المباريات" aria-label="Search">
                    &nbsp;
                    <button class="btn btn-outline-success"  type="submit"><i class="fas fa-search"></i></button>
                    &nbsp;
                    <a  class="btn btn-outline-primary" href="{{route('matches')}}">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                    &nbsp;
                    <a  class="btn btn-outline-success" href="{{route('create.match')}}">
                        إضافة مباراة
                    </a>
                </form>

                <!-- Button trigger modal add_new_post-->

            </div>
            <br>
            @if($matches->count() >0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>الفريق المستضيف</th>
                            <th>الفريق الزائر</th>
                            <th>صورة الفريق المستضيف</th>
                            <th>صورة الفريق الزائر </th>
                            <th>أهداف الفريق المستضيف</th>
                            <th>أهداف الفريق الزائر</th>
                            <th>الساعة</th>
                            <th>حالة المباراة</th>
                            <th>عنوان المباراة</th>
                            <th>المعلق</th>
                            <th>البطولة</th>
                            <th>القناة</th>
                            <th>رابط القناة</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th>Opérations </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matches as $match)
                            <tr>
                                <td>{{$match->id}}</td>
                                <td>{{$match->club_hote}}</td>
                                <td>{{$match->club_guest}}</td>
                                <td>{{$match->club_hote_pic}}</td>
                                <td>{{$match->club_guest_pic}}</td>
                                <td>{{$match->club_hote_but}}</td>
                                <td>{{$match->club_guest_but}}</td>
                                <td>{{$match->heure}}</td>
                                <td>{{$match->etat}}</td>
                                <td>{{$match->title}}</td>
                                <td>{{$match->mic}}</td>
                                <td>{{$match->cup}}</td>
                                <td>{{$match->channel}}</td>
                                <td>{{$match->url}}</td>
                                <td>{{$match->created_at}}</td>
                                <td>{{$match->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <form action="{{route('edit.match')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="match_id"  value="{{$match->id}}">
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fas fa-pen fa-sm text-grey-50"></i>
                                                </button>
                                            </form>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-lg-3 col-12">
                                            <form action="{{route('delete.match')}}" method="POST" onsubmit="return confirm('Vous étes Sur ??')" class="d-flex">
                                                @csrf
                                                <input type="hidden" name="match_id" value="{{$match->id}}">
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash fa-sm text-grey-50"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            @else
                <div class="d-flex justify-content-center">
                    <h3>Tableau Vide</h3>
                </div>
            @endif
    </div>


@stop
