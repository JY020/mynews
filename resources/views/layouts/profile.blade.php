@extends('layouts.front')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <h2>My Profile</h2>
                    <form action="{{ action('Auth\NewsController@update') }}" method="post" enctype="multipart/form-date">
                        @if (count($errors)) >0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach    
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <lavel class="col-md-2" for="name">氏名</lavel>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                    </div>    
                  </div>
                  
                  <div class="form-group row">
                        <lavel class="col-md-2" for="name">性別</lavel>
                    <div class="col-md-10">
                        <div class="radio-inline">
                            <input type="radio" value ="男" name="gender" id="male" {{ $profile_form->gender=="男性"? "checked": ""}}>
                        <label for ="male">男性</label>
                        </div>
                        
                        <div class="radio-inline">
                            <input type="radio" value ="女" name="gender" id="female" {{ $profile_form->gender=="女性"? "checked": ""}}>
                        <label for ="female">女性</label>
                        </div>
                        
                        <div class="radio-inline">
                            <input type="radio" value ="その他" name="gender" id="other" {{ $profile_form->gender=="その他"? "checked": ""}}>
                        <label for ="other">その他</label>
                        </div>
                    </div>    
                  </div>
                  
                  <div class="form-group row">
                        <lavel class="col-md-2" for="hobby">趣味</lavel>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                    </div>    
                  </div>
                  
                  <div class="form-group row">
                        <lavel class="col-md-2" for="introduction">自己紹介</lavel>
                    <div class="col-md-10">
                        <textarea classs="form-control" name="introduction" row="20">{{ $profile_form->introduction }} </textarea> 
                    </div>    
                    
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                          {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary btn-block" value="送信">
                  </div>
                  </form>
    
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->histories !=NULL)
                               @foreach ($profile_form->histories as $history)
                                   <li class="list-group-item">{{ $history->edited_at }}</li>
                               @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 