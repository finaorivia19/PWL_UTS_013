@extends('penggajian.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>PEGAWAI STORE</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btnsuccess" href="{{ route('penggajian.create') }}"> Input Penggajian</a>
 </div>
 </div>
 </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif

 <table class="table table-bordered">
 <tr>
 <th>Nip</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jabatan</th>
 <th>Gaji Pokok</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($penggajian as $Penggajian)
 <tr>

 <td>{{ $Penggajian->Nip }}</td>
 <td>{{ $Penggajian->Nama }}</td>
 <td>{{ $Penggajian->Alamat }}</td>
 <td>{{ $Penggajian->Jabatan }}</td>
 <td>{{ $Penggajian->Gaji pokok }}</td>
 <td>
 <form action="{{ route('penggajian.destroy',$Penggajian->Nip) }}" method="POST">

 <a class="btn btninfo" href="{{ route('penggajian.show',$Penggajian->Nip) }}">Show</a>
 <a class="btn btnprimary" href="{{ route('penggajian.edit',$Penggajian->Nip) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
@endsection