@extends('layouts.dashboard')

@section('content')
    <h1>EVYN CYCLE DASHBOARD</h1>

    <!-- Tabel data pegawai -->
    {{-- <h2>Data Pegawai</h2>
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
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
