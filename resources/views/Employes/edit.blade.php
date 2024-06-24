@extends('layouts.dashboard')

@section('content')
    <h1>Edit Pegawai</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}">
        </div>
        <div class="form-group">
            <label for="phone_number">No HP</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $employee->phone_number }}">
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
        </div>
        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}">
        </div>
        <div class="form-group">
            <label for="start_date">Bekerja Mulai</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $employee->start_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
