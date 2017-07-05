@extends('layouts.app')

@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="{{ url('books/update') }}" method="POST"　class="form-horizontal">
        <!-- CSRF -->
         {{ csrf_field() }}
        <!--/ CSRF -->
        
        <!-- 本のタイトル-->
        <div class="form-group">
            <div class="row">
            <label for="book" class="col-sm-12 control-label">本のタイトル:</label>
                <div class="col-sm-6">
                    <input type="text" id="book-name" name="item_name" class="form-control" value="{{$book->item_name}}">
                </div>
            </div>
        </div>
        <!--/ item_name -->
        
        <!-- item_number -->
        <div class="form-group">
            <div class="row">
            <label for="number" class="col-sm-12 control-label">冊数:</label>
                <div class="col-sm-3">
                    <input type="text" id="book-number" name="item_number" class="form-control" value="{{$book->item_number}}">
                </div>
                <div class="col-sm-1">
                    <p>冊</p>
                </div>
            </div>
        </div>
        <!--/ item_number -->

        <!-- item_amount -->
        <div class="form-group">
            <div class="row">
            <label for="amount" class="col-sm-12 control-label">金額:</label>
                <div class="col-sm-3">
                    <input type="text" id="book-amount" name="item_amount" class="form-control" value="{{$book->item_amount}}">
                </div>
                <div class="col-sm-1">
                    <p>円</p>
                </div>
            </div>
        </div>
        <!--/ item_amount -->
        
        <!-- published -->
        <div class="form-group">
            <div class="row">
            <label for="published" class="col-sm-12 control-label">公開日時：</label>
                <div class="col-sm-3">
                    <input type="datetime" id="published" name="created_at" class="form-control" value="{{$book->created_at}}"/>
                </div>
            </div>
        </div>
        <!--/ published -->
        
        <!-- Saveボタン/Backボタン -->
        <div class="form-group">
            <div class="row">
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i>Save</button>
            <a class="btn btn-link" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>Back
            </a>
            </div>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$book->id}}" />
         <!--/ id値を送信 -->
         

         
    </form>
</div>
@endsection