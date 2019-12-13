@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h2>プロフィール</h2>
              @foreach($profile_form as $profile)
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            {{ $profile->title }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            {{ $profile->body }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-5">
                            {{ $profile->name }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-5">
                            <div class="radio-inline">
                                {{ $profile->gender}}
                            </div> 
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-8">
                            {{ $profile->hobby }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            {{ $profile->introduction }}
                        </div>
                    </div>
                                   
                    <div class="form-group row">
                        <div class="col-md-10">
                            {{ $profile->id }}
                        </div>
                    </div>
                @endforeach
               </div>
            </div>
        </div>
@endsection