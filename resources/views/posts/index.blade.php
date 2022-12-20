@extends('/layout')
@section('content')
        @if(Session::has('thongbao'))
        <div class='noti success_noti' style="top: 43px;right:8px"> 
          <h2> Thông báo thành công </h2>
          <p> Đã thêm bài post </p>
        </div>
        @endif
        @if(Session::has('xoa'))
        <div class='noti success_noti' style="top: 43px;right:8px"> 
          <h2> Thông báo thành công </h2>
          <p> Đã xóa post </p>
        </div>
        @endif
        @if(Session::has('loi'))
        <div class='noti ' style="top: 43px;right:8px"> 
          <h2> Thông báo lỗi </h2>
          <p> Đã lỗi về thứ gì đó </p>
        </div>
        @endif
        @if(Session::has('sua'))
        <div class='noti success_noti' style="top: 43px;right:8px"> 
          <h2> Thông báo thành công </h2>
          <p> Đã sửa thể loại </p>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card_user">
                    <div class="card_title">
                        <h2>TRANG POST</h2>
                    </div>
                   
                    <div class="card_body">
                        <div class="card_add">
                            <input type="text" class="textBox btn btn-outline-success" placeholder="Thêm" readonly >
                          
                        <div class="add_hidden">
                          @yield('create')
                        </div>
                        <div class="card_table">
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên tác giả</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Post</th>
                                <th scope="col">CRUD</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ( $post as $item)
                              <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{ Illuminate\Support\Str::of ($item->posts)->words(6)}}</td>
                                <td class="table_crud">
                                   
                                    <a href="{{url('posts/'.$item->id.'/edit')}}" title="Sửa User" style="border: none;outline:none"><ion-icon name="create" style="color: green; font-size:25px;"></ion-icon></a>
                                   
                                    <form method="POST" action="{{url('posts/'.$item->id)}}">
                                      @csrf
                                      @method('DELETE')
                                    <button type="submit" title="Xóa post" onclick="  return confirm ('Bạn có muốn xóa không?') " style="border: none;outline:none"><ion-icon name="trash" style="color: red; font-size:25px;"></ion-icon></ion-icon></button>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection