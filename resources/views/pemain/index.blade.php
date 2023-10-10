@extends('pemain.template')

@include('pemain.navbar')

@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Pemain</th>
        <th scope="col">No. Punggung</th>
        <th scope="col">Posisi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($data_pemain as $pemain)
        <tr>
            <td>{{ $pemain->id }}</td>
            <td>{{ $pemain->nama_pemain }}</td>
            <td>{{ $pemain->no_punggung }}</td>
            <td>{{ $pemain->posisi }}</td>
        </tr>
      @empty
          <div class="alert alert-danger">
              Data Pemain Belum Tersedia.
          </div>
      @endforelse
    </tbody>
</table>  
@endsection