@extends('/layout')
@section('edit')
<div class="tiltle_edit">
    <h2>Trang edit thông tin</h2>
</div>
<div class="add_hidden edit">
    <div class="card_close"><ion-icon name="close"></ion-icon></div>
<form action="{{url('posts/' .$post->id)}}" method="POST">
    @csrf
    @method("PATCH")
        <div class="form-group">
        <label for="name"> ID User </label>
        <select name="id_user" id="id_user">
            <option selected>{{$post->id_user}}</option>
            @foreach($user as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        </div> 
        <div class="form-group">
        <label for="title" >Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="posts" >Bài đăng
            </label>
            <input type="text" class="form-control" name="posts" id="posts" value="{{$post->posts}}">
        </div>
        <div class="form-group">
            <label for="category_id" >Thể loại
            </label>
            <input type="text" class="form-control" name="category_id" id="category_id" value="{{$post->category_id}}">
        </div>
        <input type="submit" name="submit" value="Lưu" class="btn btn-success submit_add">
</form>
</div> 
@endsection