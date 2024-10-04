<x-layout title="Tugas">
    <x-navbar brand="Form"></x-navbar>
    <table class="table table-bordered" style="border: 1px;">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Nomor Telpon</th>
            </tr>
        </thead>                                
        <tbody>
        @foreach($data as $item)
        @if (is_array($item)) <!-- Check if $item is an array -->
        <tr>
            <td>{{ $item['NIM'] }}</td>
            <td>{{ $item['nama_lengkap'] }}</td>
            <td>{{ $item['kelas'] }}</td>
            <td>{{ $item['nomor_telpon'] }}</td>
        </tr>
    @else
        <tr>
            <td colspan="4">Unexpected data format</td>
        </tr>
    @endif
        @endforeach
        <tr style="border: 0px;">            
            <td colspan="4" style="border: 0px;"><center><a href="{{ route('input') }}" class="btn btn-primary">Daftar Baru</a></center></td>
        </tr>
        <tr style="border: 0px;">            
            <td colspan="4" style="border: 0px;"><center><a href="{{ route('clear.session') }}" class="btn btn-danger">Clear Session</a></center></td>
        </tr>
        </tbody>
    </table>
</x-layout>
