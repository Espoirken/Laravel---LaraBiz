@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Latest Business Listings <a href="/dashboard" class="float-right btn btn-primary btn-sm">Dashboard</a></div>

            <div class="card-body">
                    @if(count($listings))
                        <ul class="list-group">
                        @foreach ($listings as $listing)
                        <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                        @endforeach
                        </ul>
                    @else
                        <p>No listings found</p>
                    @endif
                    <div class="form-group">
                        Test<textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
