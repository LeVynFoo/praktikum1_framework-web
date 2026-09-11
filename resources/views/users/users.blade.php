<!DOCTYPE html>
<html>
<head>
    <title>Kelola Akun Kasir</title>
</head>
<body>

    <h1>Kelola Akun Kasir</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>