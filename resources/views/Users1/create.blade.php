@extends('users1.index')
@section('create') 
   
<div class="card_close"><ion-icon name="close"></ion-icon></div>
<form action="{{url('user')}}" method="POST">
    @csrf
        <div class="form-group">
        <label for="name"> Tên </label>
        <input type="text" class="form-control" name="name" id="name" placeholder="VD: Đào Xuân Vinh" required >
        </div> 
        <div class="form-group">
        <label for="email" >Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="VD: a@gmail.com">
        </div>
        <div class="form-group">
            <label for="address" >Địa chỉ
            </label>
            <input type="text" class="form-control" name="address" id="address" placeholder="VD: Đường ABC">
        </div>
        <div class="form-group">
            <label for="SDT" >SDT</label>
            <input type="text" class="form-control" name="sdt" id="SDT" placeholder="VD: 0123456789">
        </div>
        <div class="form-group">
            <label for="id_post" >ID Post</label>
            <input type="text" class="form-control" name="id_post" id="id_post" placeholder="ID Post">
        </div>
        <input type="submit" name="submit" value="Lưu" class="btn btn-success submit_add">
</form>
@endsection