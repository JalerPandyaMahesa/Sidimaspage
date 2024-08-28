<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $filter }} Sekolah</title>
</head>
<body>
    <h1>Displaying {{ $filter }} Sekolah</h1>
    <div>
        <a href="{{ route('sekolah.tk') }}"><button>TK</button></a>
        <a href="{{ route('sekolah.sd') }}"><button>SD</button></a>
        <a href="{{ route('sekolah.smp') }}"><button>SMP</button></a>
        <a href="{{ route('sekolah.index') }}"><button>All</button></a>
        <a href="{{ route('sekolah.create') }}"><button>Create Sekolah</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Bentuk Pendidikan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolah as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kabupaten }}</td>
                    <td>{{ $s->kecamatan }}</td>
                    <td>{{ $s->bentuk_pendidikan }}</td>
                    <td>
                        <a href="{{ route('sekolah.edit', ['peserta_didik_id' => $s->peserta_didik_id]) }}"><button>Edit</button></a>
                        <form action="{{ route('sekolah.destroy', ['peserta_didik_id' => $s->peserta_didik_id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
