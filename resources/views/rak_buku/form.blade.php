@extends('layouts.app')
@section('title', 'Daftar Rak Buku')
@section('content')
<h2>{{ $store }} Data Rak Buku</h2>
<form method="POST" action="{{$action}}">
@csrf
@if (strtolower($store) == 'ubah')
@method('PUT')
@endif
<input type="hidden" name="id" value="{{ $rak->id }}" />
<input type="text" class="mail_text" name="nama" placeholder="Nama 
Rak" value="{{ $rak->nama }}" />
<input type="text" class="mail_text" name="lokasi" placeholder="Lokasi" value="{{ $rak->lokasi }}" />
<input type="text" class="mail_text" name="keterangan" placeholder="keterangan" value="{{ $rak->keterangan }}" />
<input type="submit" value="{{ $store }}" />
<div class="send_bt">
<a href="{{ url('/rak_buku') }}">Kembali</a>
</div>
</form>
@endsection