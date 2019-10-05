@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info" button class="btn btn-primary">List Artikel</div> 
                <div class="card-body">
                              <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-warning">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Kategori Id</th>
                            <th scope="col">User_id</th>
                            <th scope="col">Create</th>
                            <th scope="col">Aksi</th>

                    </thead>
                    <tbody>

                        @foreach ($artikel as $item)
                            <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->kategori_artikel_id !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>{!! $item->created_at !!}</td>
                            <td>
                            
                            <a href="{!! route('artikel.show',[$item->id]) !!}" button class="btn btn-sm btn-success" type="button"> Lihat </td></a>

                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                
            </div>
         <a href ="{!! route('artikel.create',[$item->id]) !!}" button class="btn btn-primary" type="button"> Tambah </button></td></a>
        </div>
    </div>
</div>
@endsection