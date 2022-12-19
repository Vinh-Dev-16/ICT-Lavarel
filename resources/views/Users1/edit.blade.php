@extends('/layout')
@section('edit') 
<div class="tiltle_edit">
    <h2>Trang edit thông tin</h2>
</div>
<div class="add_hidden edit">
<form action="{{url('user/'.$users1->id)}}" method="POST">
    @csrf
    @method("PATCH")
        <div class="form-group">
        <label for="name"> Tên </label>
        <input type="text" class="form-control" value="{{ $users1->name}}" name="name" id="name" placeholder="VD: Đào Xuân Vinh" required >
        </div>
        <div class="form-group">
        <label for="email" >Email</label>
        <input type="email" class="form-control" value="{{$users1->email}}"  name="email" id="email" placeholder="VD: a@gmail.com">
        </div>
        <div class="form-group">
            <label for="address" >Địa chỉ
            </label>
            <input type="text" class="form-control" value="{{$users1->address}}"  name="address" id="address" placeholder="VD: Đường ABC">
        </div>
        <div class="form-group">
            <label for="SDT" >SDT</label>
            <input type="text" class="form-control" value="{{$users1->sdt}}"  name="sdt" id="SDT" placeholder="VD: 0123456789">
        </div>
        <div class="form-group">
            <label for="id_post" >ID Post</label>
            <input type="text" class="form-control" value="{{$users1->id_post}}"  name="id_post" id="id_post" placeholder="ID Post">
        </div>
        <input type="submit" name="submit" value="Lưu" class="btn btn-success submit_add">
</form>
</div>
@endsection