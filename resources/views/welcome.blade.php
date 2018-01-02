@extends('layouts.app')

@section('content')
<br><br>
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="active">Barang</li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Barang</h2>
                    </div>
                    
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-danger pull-right" href="{{ url('/admin/barangs/lab') }}">Laboratorium</a>
                            <a class="btn btn-warning pull-right" href="{{ url('/admin/barangs/bengkel') }}">Bengkel</a>
                            <a class="btn btn-info pull-right" href="{{ url('/admin/barangs') }}">Semua</a></p>
                            <br><br>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Barang</td>
                                    <td>Stok</td>
                                    <td>Opsi</td>
                                </tr>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($barang as $data)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->amount }}</td>
                                    <td><a href="{{ url('/pinjam', $data->id) }}" class="btn btn-warning">Pinjam</a></td>
                                </tr>
                                @php
                                $no++;
                                @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection