@extends('posts.index')
@section('create') 
   
<div class="card_close"><ion-icon name="close"></ion-icon></div>
<form action="{{url('posts/store')}}" method="POST">
    @csrf
        <div class="form-group">
        <label for="name"> ID User </label>
        <select name="id_user" id="id_user">
            <option selected>Chọn user đăng bài</option>
            @foreach($user as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        </div> 
        <div class="form-group">
        <label for="title" >Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Điền tiêu đề">
        </div>
        <div class="form-group">
            <label for="posts" >Bài đăng
            </label>
            <input type="text" class="form-control" name="posts" id="posts" placeholder="Đăng">
        </div>
        <div class="form-group">
            <label for="category_id" >Thể loại
            </label>
            <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Thể loại">
        </div>
        <input type="submit" name="submit" value="Lưu" class="btn btn-success submit_add">
</form>
@endsection