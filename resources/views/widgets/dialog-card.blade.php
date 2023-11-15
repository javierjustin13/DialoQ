@push('head')
<link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush

@php
$totaldata = DB::table('dialogues')->count();
$posting = DB::table('dialogues')
            ->join('users', 'dialogues.user_id', '=', 'users.id')
            ->orderBy('dialogues.id', 'desc')
            ->select('dialogues.*','users.name')
            ->get();


// dd($posting);
@endphp

@if ($totaldata != 0)

<div class="p-3 border rounded-4" id="midpane">
    @foreach ($posting as $item)
    <div class="p-3 border rounded-4 mb-3"  id="postcard">
        <div class="card-header">
            <div class="media flex-wrap w-100 align-items-center"> <img src="image/profile-image.jpeg" class="d-block ui-w-40 rounded-circle" alt="">
                <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">{{$item->name}}</a>
                </div>
                <div class="text-muted small ml-3">
                <a href="">View</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-3">
            <h4>{{$item->title}}</h4>
            <p>{{$item->content}}</p>
        </div>
        <div class="card-footer align-items-center px-0 pt-0 pb-3">
            <div class="pt-3 d-flex justify-content-between">
                <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                    <i class="bi bi-heart mr-1"></i>
                    <span class="align-middle">{{$item->likes}}</span>
                </span>
                <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                    <i class="bi bi-clock mr-1"></i>
                    <span class="align-middle">
                        @php
                            $diff=date_diff(new DateTime($item->created_at), new DateTime());
                        @endphp
                        {{$diff->format("%d days, %h hours ago")}}
                    </span>
                </span>
            </div>
        </div>
        <div class="comments pt-3">
            <h5>No Comments Found.</h5>
        </div>
    </div>
    @endforeach
</div>

@else
<h1>There is no discussion.</h1>

@endif
