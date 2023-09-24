@extends('layouts.master')

@section('content')
    <h1>Hasil Work Order</h1>
    <a class="btn btn-primary" href="{{ route('wo.create') }}">Create</a>
    <p>Ini adalah halaman hasil Work Order.</p>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No WO</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kategori OA</th>
                    <th scope="col">Nama PIC</th>
                    <th scope="col">Tlp. PIC</th>
                    <th scope="col">Layanan Mbps</th>
                    <th scope="col">Segmen</th>
                    <th scope="col">SID</th>
                    <th scope="col">SN ONT</th>
                    <th scope="col">LAN</th>
                    <th scope="col">IP</th>
                    <th scope="col">GW</th>
                    <th scope="col">SM</th>
                    <th scope="col">Actions</th> <!-- Kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($workOrders as $workOrder)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $workOrder->no_wo }}</td>
                        <td>{{ $workOrder->alamat }}</td>
                        <td>{{ $workOrder->kategoriOA->name }}</td>
                        <td>{{ $workOrder->nama_pic }}</td>
                        <td>{{ $workOrder->telp_pic }}</td>
                        <td>{{ $workOrder->layanan_mbps }}</td>
                        <td>{{ $workOrder->Segmen->name }}</td>
                        <td>{{ $workOrder->sid }}</td>
                        <td>{{ $workOrder->snont }}</td>
                        <td>{{ $workOrder->lan }}</td>
                        <td>{{ $workOrder->ip }}</td>
                        <td>{{ $workOrder->gw }}</td>
                        <td>{{ $workOrder->sm }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('wo.edit', $workOrder->id) }}" class="btn btn-sm btn-primary mr-1">Edit</a>

                            <!-- Tombol Delete (dalam bentuk form untuk konfirmasi) -->
                            <form action="{{ route('wo.destroy', $workOrder->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus Work Order ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
