@extends('admin.master')

@section('title','إضافة مباراة')

@section('content')

    <div class="container" >
        <div align="center" class="align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"  style="text-align:center">إضافة مباراة</h1>
        </div>
        <br>
            <div class="container">
                <form action="{{route('store.match')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row g-2" style="text-align:right;">
                            <div class="col-md-6" align="right">
                                <label >الفريق المستضيف</label>
                                <input type="text" class="form-control" style="text-align:right;" name="club_hote" >
                                @error('club_hote')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="" id="arab_title">الفريق الزائر </label>
                                <input type="text" class="form-control" style="text-align:right;" name="club_guest" >
                                @error('club_guest')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6"align="right" >
                                <label for="" >صورة الفريق المستضيف</label>
                                <input type="file" class="form-control"  name="club_hote_pic" >
                                @error('club_hote_pic')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6"align="right" >
                                <label for="" >صورة الفريق الزائر </label>
                                <input type="file" class="form-control" name="club_guest_pic">
                                @error('club_guest_pic')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="">أهداف الفريق المستضيف</label>
                                <input type="text" class="form-control" style="text-align:right;" name="club_hote_but" >
                                @error('club_hote_but')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="">أهداف الفريق الزائر</label>
                                <input type="text" class="form-control" style="text-align:right;" name="club_guest_but">
                                @error('club_guest_but')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6" align="right">
                                <label for="" >الساعة</label>
                                <input type="text"  class="form-control" style="text-align: right"  name="heure" >
                                @error('heure')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="" >حالة المباراة</label>
                                <select  class="form-control"  style="text-align:right;" name="etat">
                                    <option></option>
                                    <option>بعد قليل</option>
                                    <option>مباشر</option>
                                    <option>انتهت</option>
                                </select>
                                @error('etat')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label >عنوان المباراة</label>
                                <input type="text" class="form-control" style="text-align:right;" rows="3" name="title" >
                                @error('title')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="" >المعلق </label>
                                <input type="text" class="form-control" style="text-align:right;" name="mic" >
                                @error('mic')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="" >البطولة </label>
                                <input type="text" class="form-control" style="text-align:right;" name="cup" >
                                @error('cup')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6" align="right">
                                <label for="" >القناة </label>
                                <input type="text" class="form-control" style="text-align:right;" name="channel" >
                                @error('channel')
                                    <span style="color:red;" align="center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12" align="right">
                                <label for="" >رابط القناة  </label>
                                <input type="text" class="form-control" style="text-align:right;"  name="url" >
                            </div>


                    <div  align="center">
                        <br>
                        <br>

                        <a href="{{route('matches')}}" class="btn btn-outline-danger" style="width:150px;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg> Cancel</a>&nbsp;
                        <button type="submit" class="btn btn-outline-success" style="width:150px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                            <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg> Save Match</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>

@stop
