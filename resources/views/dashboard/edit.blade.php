@extends('layouts.dashboard')

@section('content')
    <h1>Kelola Data Pegawai</h1>

    <!-- Tombol Tambah Pegawai -->
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

    <!-- Tabel data pegawai -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Bekerja Mulai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->start_date }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
