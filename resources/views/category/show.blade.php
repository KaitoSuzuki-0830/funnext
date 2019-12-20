@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        @foreach ($plans as $plan)
            <a href="{{ route('plans.show',['id'=>$plan->id])}}" id="planoverall">
                <div class="d-inline-block" id="cardsize">
                    <div class="card" style="width: 18rem;" id="outlineeventcard">
                        <img src="{{asset($plan->featured)}}" class="card-img-top" alt="{{$plan->title}}">
                        <div class="card-body" id="outlinecard">
                        <h5 class="card-title" id="eventtitle">{{ $plan->title}}</h5>
                        <table class="eventtableposition">
                            <tr class="tablelist">
                                <td><i class="far fa-clock"></i></td>
                                <td>{{$plan->date}}</td>
                            </tr>
                            <tr class="tablelist">
                                <td><i class="fas fa-users"></i></td>
                                <td>5</td>
                            </tr>
                            <tr class="tablelist">
                                <td><i class="fas fa-hand-holding-usd"></i></td>
                                <td>¥{{$plan->price}}</td>
                            </tr>
                        </table>
                        <a href="{{ route('plans.show',['id'=>$plan->id])}}" class="btn btn-info"　role="button" id="showbutton">Details</a>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</body>
@endsection
