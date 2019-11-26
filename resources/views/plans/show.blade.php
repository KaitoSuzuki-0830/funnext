@extends('layouts.app')
@section('content')
 <h1>イベント　詳細　</h1>
 <div class="card" style="width:100%;">
        <img src="{{ $plan->featured }}" class="card-img-top" alt="{{$plan->title}}" height="200px" width="200px">
            <div class="card-body">
                <div class="card-title"><h3>{{$plan->title}}</h3></div>
                {{-- <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$plan->prefecture->name}}</p> --}}
                <p class="card-text"><i class="far fa-map"></i> {{$plan->place}}</p>
                <p class="card-text"><i class="fas fa-tag"></i> {{$plan->category->name}}</p>
                <p class="card-text"><i class="fas fa-users"></i> {{$plan->$group->name}}</p>
                <p class="card-text">{{$plan->description}}</p>
                <p class="card-text"><i class="fas fa-yen-sign"></i> {{$plan->price}}
                    <form action="{{ route('pay') }}" method="POST">
                        {{ csrf_field() }}
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_EtHmYNmqSKAqc3JTRo7H98vx003VgTohui"
                            data-amount="{{$plan->price}}"
                            data-name="参加費を支払う"
                            data-label="参加する"
                            data-description="Laravel-Myproduct.payment"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="JPY">
                        </script>
                    </form>
                </p>
            </div>
</div>

 </div>

@endsection
