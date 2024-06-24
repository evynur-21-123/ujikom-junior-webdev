@extends('layouts.dashboard')

@section('content')
    <h1>EVYN CYCLE</h1>

    <!-- Animasi sepeda ontel -->
    {{-- <div class="bike">
        <img src="https://example.com/path-to-bike-image.png" alt="Sepeda Ontel">
    </div> --}}

    <a href="{{ route('employees.create')}}" class="btn btn-primary btn-sm">Tambah Employee</a>

    <!-- Tabel data pegawai -->
    <h2>Data Pegawai</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Bekerja Mulai</th>
                <th>Action</th>
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
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
