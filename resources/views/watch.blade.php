@extends('app')

@section('title','مشاهدة مباراة')

@section('content')


    <div align="center">
        <div class="card col-lg-10" align="center">
            <div class="card-header bg-success text-white">
                <h5>{{$matches->title}}</h5>
            </div>
            <div class="card-body">
                <div class="row" >
                    <div class="col-lg-3">
                        <img   src="{{ asset('pics/'.$matches->club_hote_pic)}}" style="width:155px;height:120px;" class="img-fluid" alt="...">
                        <br>
                        <h5  id="nclub">{{$matches->club_hote}}</h5>
                    </div>
                    <div class="col-lg-6" style="margin-top:40px;">
                        <p><span class="badge rounded-pill  bg-secondary">{{$matches->heure}} GMT</span></p>
                        <span style="font-size:25px;margin-top:10px;" class="badge rounded-pill bg-success">{{$matches->club_hote_but}}</span>
                        &nbsp;&nbsp;<strong style="font-size:22px;">Vs</strong>&nbsp;&nbsp;
                        <span style="font-size:25px;" class="badge rounded-pill bg-success">{{$matches->club_guest_but}}</span>
                        <h3>
                            @if ($matches->etat === 'بعد قليل')
                                <h4><span class="badge rounded-pill  bg-success">&nbsp;{{$matches->etat}}&nbsp;</span></h4>
                            @elseif($matches->etat === 'مباشر')
                                <h4><span class="badge rounded-pill  bg-danger">&nbsp;{{$matches->etat}}&nbsp;</span></h4>
                            @else
                                <h4><span class="badge rounded-pill  bg-secondary">&nbsp;{{$matches->etat}}&nbsp;</span></h4>
                            @endif
                        </h3>
                    </div>
                    <div class="col-lg-3">
                        <img   src="{{ asset('pictures/'.$matches->club_guest_pic)}}" style="width:155px;height:120px;" class="img-fluid" alt="...">&nbsp;<h5 id="nclub">{{$matches->club_guest}}</h5>
                        <br>
                    </div>
                </div>
            </div>
            <hr  style="color:green;">
            <div class="row">
                <div class="col-lg-4">
                    <p>{{$matches->channel}} <i class="fas fa-tv" style="color:green;"></i></p>
                </div>
                <div class="col-lg-4">
                    <p>{{$matches->cup}} <i class="fas fa-trophy" style="color:green;"></i></p>
                </div>
                <div class="col-lg-4">
                    <p>{{$matches->mic}} <i class="fas fa-microphone-alt" style="color:green;"></i></p>
                </div>
            </div>
            <hr  style="color:green;">
            <br>
            <iframe width="100%" height="615" src="{{$matches->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            <br>
            <br>
            <div align="right" style="padding-right:10px;">
                <h5 align="right">كورة اون لاين LR10-Kora | كورة لايف اونلاين</h5>
                <hr  align="right" style="color:green;">
                <br>
                <p align="right">
                    كورة اون لاين LR10-Kora هو موقع رياضي عربي لبث مباريات كرة القدم بدون اشتراك مجانا وبدون تقطيع ومتابعة كافة الاحداث الرياضية العربية والعالمية koraon,live kora tv,كورة توداي,بث مباشر بين سبورت اخبارية,بث مباشر لمباريات اليوم,مواقع البث المباشر,الاون لاين,بث مباشر لقناة اون سبورت on sport,كوورة لايف,كورة لايف بث مباشر,hd kora,كورة hd,نقل مباريات,بث مباشر لمباريات,مشاهدة مباريات كاس العالم,مشاهدة مباريات اليوم, تطبيق كورة لايف,الاسطورة لبث المباريات,تطبيق كورة لايف,كورة جول اون لاين kora live stream موقع لايف كورة	LR10-Kora ,كورة اون لاين ,LR10-Kora ,كوره اون لاين ,koraonline,كورة لايف,كورة اونلاين,kora tv,كوره اونلاين,كورة اون البث المباشر كورة اون لاين LR10-Kora يقدم موقع كورة اون لاين خدمة البث المباشر للمباريات بجودة full hd وبدون تقطيع وعلي اكثر من جودة لتناسب كل سرعات الانترنت حيث يقوم كورة اون لاين لايف ببث حي ومباشر لمباريات الدوري الانجليزي والدوري الاسباني والالماني والايطالي كما يقوم ببث مباريات الاهلي والزمالك وليفربول وبث مباشر ريال مدريد وبث مباشر كورة اونلاين برشلونة ومانشستر يونايتد كورة اون لاين LR10-Kora tv خدمة كورة اونلاين تي في هي خدمة مجانية وموقع لمتابعة كل المباريات مجانا علي الانترنت كمان يقدم كورة اون لاين LR10-Kora خدمة معرفة جدول مباريات اليوم ومباريات الغد ونتائج حية لحظه بلحظة لنتا'ج المباريات الحصرية في كل البطولات تطبيق كورة اون لاين LR10-Kora app يطلق موقع كورة اون لاين تطبيق جديد لمشاهدة مباريات كرة القدم علي اجهزه الاندرويد وios ايفون وايباد بدون معاناة عبر تطبيق كورة اون لاين للبث المباشر الان يمكنكم تحميله من جوجل بلاي كورة اون لاين فيس بوك اخبار الرياضة Tv96, Tv96 Live, koora, online, kooora, arabic, tv, channels, arab tv, links, internet live tv. ... Tv96 | LR10-Kora Tv | kooora live Tv عبر موقع كورة اون لاين يمكنكم معرفة كل اخبار كرة القدم لحظة بلحظة بدون معاناة من خلال صفحة كورة اون لاين علي فيس بوك وايضا عبر انستجرام وتويتر
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="images/bn.jpg" alt=""></div>
            <div class="item"><img src="images/bn2.jpg" alt=""></div>
            <div class="item"><img src="images/bn3.png" alt=""></div>
            <div class="item"><img src="images/bn4.jpg" alt=""></div>
            <div class="item"><img src="images/ar.jpg" alt=""></div>
            <div class="item"><img src="images/ad.jpg" alt=""></div>
            <div class="item"><img src="images/2df.jpg" alt=""></div>
        </div>
        <br>
        <br>

    </div>


@stop
