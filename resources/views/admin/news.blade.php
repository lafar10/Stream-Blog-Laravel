@extends('admin.master')

@section('title','الأخبار')

@section('content')


    <div align="center" class="align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center">الأخبار</h1>
    </div>

    <br>
    <br>
    <div class="container">
            <div align="right">
                <!-- Button trigger modal -->
                <form action="{{route('search.news')}}" method="get" class="d-flex justify-content-center">
                    @csrf
                    <input class="form-control" type="search" style="text-align:center;width:200px;" name="search_news" placeholder="ابحث عن أخر الأخبار" aria-label="Search">
                    &nbsp;
                    <button class="btn btn-outline-success"  type="submit"><i class="fas fa-search"></i></button>
                    &nbsp;
                    <a  class="btn btn-outline-primary" href="{{route('news')}}">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                    &nbsp;
                    <a  class="btn btn-outline-success" href="{{route('create')}}">
                        إضافة خبر
                    </a>
                </form>

                <!-- Button trigger modal add_new_post-->

            </div>
            <br>
            @if($news->count() >0)
            <div class="table-responsive">
                <table class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>اسم المؤلف</th>
                            <th>عنوان المشاركة الصغير</th>
                            <th>عنوان المشاركة </th>
                            <th>تاريخ الخبر</th>
                            <th>صورة الخبر</th>
                            <th>فيديو الخبر</th>
                            <th>مقدمة عن المحتوى</th>
                            <th>عرض المحتوى</th>
                            <th>خاتمة المحتوى</th>
                            <th>المصدر</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th>Opérations </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                            <tr>
                                <td>{{$new->id}}</td>
                                <td>{{$new->author}}</td>
                                <td>{{$new->title}}</td>
                                <td>{{$new->subtitle}}</td>
                                <td>{{$new->date}}</td>
                                <td>{{$new->pic}}</td>
                                <td>{{$new->video}}</td>
                                <td>{{$new->intro}}</td>
                                <td>{{$new->show}}</td>
                                <td>{{$new->conclusion}}</td>
                                <td>{{$new->source}}</td>
                                <td>{{$new->created_at}}</td>
                                <td>{{$new->updated_at}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <form action="{{route('edit.news')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="news_id" value="{{$new->id}}">
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="fas fa-pen fa-sm text-grey-50"></i>
                                                </button>
                                            </form>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-lg-3 col-12">
                                            <form action="{{route('delete.news')}}" method="POST" onsubmit="return confirm('Vous étes Sur ??')" class="d-flex">
                                                @csrf
                                                <input type="hidden" name="news_id" value="{{$new->id}}">
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
