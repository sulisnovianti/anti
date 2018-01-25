@extends('welcome')

@section('content')

<br><br>
                    <div class="panel-body">
                        
                            <br><br>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Barang</td>
                                    <td>Tanggal</td>
                                    <td>Opsi</td>
                                </tr>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($barang as $data)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{$data->created_at}}</td> 
                                    
                                    <td><a href="{{url('/kembali',$data->id)}}" class="btn btn-default btn-sm">Kembalikan</a></td>
                                    
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
