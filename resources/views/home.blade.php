<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TS64FZ5');</script>
    <!-- End Google Tag Manager -->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including css file -->
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS64FZ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="row" style="margin: 0 !important;">
    <div class="col-md-7">
        <div class="details">
            <h1>5</h1>
            <h3>طرق مجربة
                <br>
                لكتابة محتوى شيق
                <br>
                فى مجال التأمين</h3>

            <p>لو انت شغال فى مجال التأمين وبتواجة مشكلة فى كتابة محتوي شيق و يزود مبيعاتك تأمين اونلاين بنقدملك 5 طرق
                ازاي تكتب محتوي عن التأمين
                التأمين من المواضيع الدسمة وكتابة محتوي ممتع عنه شئ مش سهل فإحنا هنقدملك 5 طرق ازاي تخليه شيق و يقنع
                اكبر عدد من العملاء فيشتروا منك‎
            </p>
        </div>
    </div>
    <div class="col-md-5">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                {{ session()->get('message') }}
            </div>
        @elseif(session()->has('message_fales'))
            <div class="alert alert-danger" align="center">
                {{ session()->get('message_fales') }}
            </div>
        @endif
        <div class="form-content">
            <form id="create" action="{{url('store')}}" method="POST">
                {{csrf_field()}}
                <h2>احصل على نسختك المجانية الآن</h2>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : "" }}">
                    <input type="text" name="name" style="-webkit-appearance: none;" class="form-control form-input" value="{{Request::old('name')}}"
                           placeholder="الاسم">
                </div>
                <div class="row">
                    <div class="col-md-6"> <div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
                            <input type="email" style="-webkit-appearance: none;" name="email" class="form-control form-input" value="{{Request::old('email')}}"
                                   placeholder="الإيميل">
                        </div></div>
                    <div class="col-md-6"> <div class="form-group{{ $errors->has('mobile') ? ' has-error' : "" }}">
                            <input type="number" style="-webkit-appearance: none;" name="mobile" class="form-control form-input"
                                   value="{{Request::old('mobile')}}" placeholder="الموبايل">
                        </div></div>
                </div>


                <div  class="form-group{{ $errors->has('question1') ? ' has-error' : "" }}">
                    <div class="ques" >في الوقت الحالي كيف تدير وثائق التأمين الخاصه بعملائك؟</div>
                    <select id="optionselector1" name="question1" class="form-control form-input classic">
                        <option value="" selected disabled>برجاء الاختيار</option>
                        <option value="ورقيا">ورقيا</option>
                        <option value="شيت اكسل">شيت اكسل</option>
                        <option value="نظام جاهز">نظام جاهز</option>
                        <option value="others">أخرى</option>
                    </select>
                </div>
                <div id="contentInput1"  class="form-group{{ $errors->has('question2') ? ' has-error' : "" }}">
                </div>
           {{--     <div  class="form-group{{ $errors->has('question') ? ' has-error' : "" }}">
                    <div class="ques" >هل تحتاج الي برنامج لادارة وثائق التأمين؟</div>
                    <select id="question" name="question" class="form-control form-input classic">
                        <option value="" selected disabled>برجاء الاختيار</option>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>--}}
                <div  class="form-group{{ $errors->has('question3') ? ' has-error' : "" }}">
                    <div class="ques" >هل تعتقد انه باستخدامك لنظام الكتروني لاداره الوثائق سيساعدك علي خدمه عملائك بشكل افضل ويخفض تكلفه الخدمه؟</div>
                    <select id="question3" name="question3" class="form-control form-input classic">
                        <option value="" selected disabled>برجاء الاختيار</option>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>
                <div class="form-group{{ $errors->has('budget') ? ' has-error' : "" }}">
                    <div class="ques" >ما هو الأشتراك الشهري (للمستخدم الواحد) المناسب من وجهه نظرك؟</div>
                    <select id="optionselector" name="budget" class="form-control form-input classic">
                        <option value="" selected disabled>برجاء الاختيار</option>
                        <option value="500-700">500-700</option>
                        <option value="700-900">700-900</option>
                        <option value="others">أخرى</option>
                    </select>
                </div>
                <div id="contentInput" class="form-group{{ $errors->has('budget1') ? ' has-error' : "" }}">

                </div>
                <div class="form-group{{ $errors->has('service') ? ' has-error' : "" }}">
                    <div class="ques" > ما هي أهم الخصائص التي يجب توافرها في النظام الكتروني لاداره الوثائق من وجهه نظرك؟</div>
                    <div class="form-group{{ $errors->has('service') ? ' has-error' : "" }}">
                        <textarea id="style-1" name="service" type="text" class="form-control form-text"
                                  style="-webkit-appearance: none;"    placeholder="أكتب شيئأ">{{Request::old('service')}}</textarea>
                    </div>
                </div>
            {{--    <div class="form-group{{ $errors->has('service1') ? ' has-error' : "" }}">
                    <div class="ques" > ما هي اقتراحاتك لتطبيقات تساعدك علي تقديم خدمه افضل لعملائك؟</div>
                    <div class="form-group{{ $errors->has('service1') ? ' has-error' : "" }}">
                        <textarea id="style-1" name="service1" type="text" class="form-control form-text"
                                  placeholder="أكتب شيئأ">{{Request::old('service1')}}</textarea>
                    </div>
                </div>--}}
                <button type="submit" class="btn submit-btn">تحميل</button>
            </form>
        </div>
    </div>
</div>

</body>
<!-- these files must included here (header won't work correctly if not!) -->
<script src="{{asset('public/Files/jquery.min.js')}}"></script>
<script src="{{asset('public/Files/popper.min.js')}}"></script>
<script src="{{asset('public/Files/bootstrap.min.js')}}"></script>
<script>
    $(function () {    // Makes sure the code contained doesn't run until
        //     all the DOM elements have loaded


        console.log("enter")
        $('#optionselector').change(function () {
            console.log($(this).val())

            if ($(this).val() == "others") {
                $('#contentInput').empty();
                $('#contentInput').append('<input type="number" name="budget1" class="form-control form-input" value="{{Request::old('budget1')}}" placeholder="برجاء كتابه قيمة الاشتراك">');

            }else
            {
                $('#contentInput').empty();
            }
        });

    });
</script>
<script>
    $(function () {    // Makes sure the code contained doesn't run until
        //     all the DOM elements have loaded


        console.log("enter")
        $('#optionselector1').change(function () {
            console.log($(this).val())

            if ($(this).val() == "others") {
                $('#contentInput1').empty();
                $('#contentInput1').append('<input type="text" name="question2" class="form-control form-input" value="{{Request::old('question2')}}"placeholder="اكتب شيئا">');
            }
            else
            {
                $('#contentInput1').empty();
            }
        });

    });
</script>
<script type="text/javascript" src="{{ asset('public/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\TameenCreateRequest','#create') !!}

</html>