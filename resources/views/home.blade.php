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
                                    <td>Stok</td>
                                    <td>Gambar</td>
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
                                    <td><img src="{{asset('img/'.$data->cover.'')}}" width="50" height="50"></td>
                                    @if($data->amount !=0)
                                    <td><a href="{{ route('guest.barangs.borrow', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Pinjam</a></td>
                                    @endif
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