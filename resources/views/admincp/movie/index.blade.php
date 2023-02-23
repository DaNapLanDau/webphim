@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('movie.create')}}" class="btn btn-primary">Thêm phim</a>
                <table class="tablephim">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Active/Inactive</th>
                        <th scope="col">Category</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ngày update</th>
                        <th scope="col">Số tập</th>
                        <th scope="col">Top views</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $key => $cate)
                        <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$cate->title}}</td>
                            <td><img width="60%" src="{{asset('uploads/movie/'.$cate->image)}}"></td>
                            <td>{{$cate->description}}</td>
                            <td>{{$cate->slug}}</td>
                            <td>@if($cate->status)
                                    Hiển thị
                                @else
                                    Không hiển thị
                                @endif
                            </td>
                            <td>{{$cate->category->title}}</td>
                            <td>{{$cate->genre->title}}</td>
                            <td>{{$cate->sotap}}</td>
                            <td>{{$cate->ngaytao}}</td>
                            <td>{{$cate->ngaycapnhat}}
                            <td>  {!! Form::select('topview',['0'=>'Ngày','1'=> 'Tuần','2'=>'Tháng'], isset($cate->topview) ? $cate->topview: '' , ['class'=>'select-topview','id'=>$cate->id]) !!}
            </div></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route'=>['movie.destroy',$cate->id],'onsubmit'=>'return confirm("Đồng ý xóa ?")']) !!}
                                {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                <a href="{{route('movie.edit',$cate->id)}}"class="btn btn-warning">Sửa</a>
                            </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
