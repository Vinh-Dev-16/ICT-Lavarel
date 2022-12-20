@extends('categories.index')
@section('create') 
   
<div class="card_close"><ion-icon name="close"></ion-icon></div>
<form action="{{url('categories/store')}}" method="POST">
    @csrf
        <div class="form-group">
        <label for="name"> Parent ID </label>
        <select name="parent_id" id="id_user">
            <option selected>Chọn post</option>
            @foreach($post as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </select>
        </div> 
        <div class="form-group">
        <label for="title" >Tên thể loại</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Điền tên thể loại">
        </div>
        <input type="submit" name="submit" value="Lưu" class="btn btn-success submit_add">
</form>
@endsection