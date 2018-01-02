@extends('layouts.app')

@section('content')
<br><br>
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="active">Peminjam</li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Statistik</h2>
                    </div>
                    
                    <div class="panel-body">
                        @foreach($barang as $data)
                        <p>{{$data->nama_barang}} <a href="{{url('/kembali',$data->id)}}" class="btn btn-default btn-sm">Kembalikan</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
@endsection