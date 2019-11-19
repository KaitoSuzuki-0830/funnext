<div class="card-body">
    @if(count($plan) >0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th colspan="2"></th>
         </tr>
     </thead>
     <tbody>

      @foreach($plans as $plan)
        <tr>
           <td> <img src="{{ asset('uploads/plan/'.$plan->featured)}}" alt="{{ $plan->title }}" height="90px" width="90px"style="border-radius: 80%"></td>
           <td>{{ $plan->title}}</td>
           <td><a href="{{ route('plan.show',['id'=>$plan->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td>
             <form action="{{ route('plan.destroy',['id' => $plan->id])}}" method="plan">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
             </td>
        </tr>
       @endforeach
     </tbody>
     </table>
   @else
     <P class ="text-center">No plan found.</p>
  @endif
  </div>
  </div>

 @endsection
