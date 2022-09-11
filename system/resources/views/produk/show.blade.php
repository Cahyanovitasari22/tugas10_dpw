@extends('template.base')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 ">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('public', $produk->foto)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
                <div class="card">
                    <div class="card-header">
                      Detail Produk
                    </div>
                    <div class="card-body">
                        <h3>{{$produk->nama}}</h3>
                        <hr>
                        <p>
                           {{$produk->harga}} |
                            Stok : {{$produk->stok}} |
                            Berat : {{$produk->berat}} kg |
                            Seller : {{$produk->seller->username}} |
                            Tanggal Produksi : {{$produk->created_at->diffForHumans()}}
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection