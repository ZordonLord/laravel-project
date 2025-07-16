<h1>Логи обращений</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Method</th>
            <th>URL</th>
            <th>IP</th>
            <th>User Agent</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
    @foreach($logs as $log)
        <tr>
            <td>{{ $log->id }}</td>
            <td>{{ $log->method }}</td>
            <td>{{ $log->url }}</td>
            <td>{{ $log->ip }}</td>
            <td>{{ $log->user_agent }}</td>
            <td>{{ $log->status_code }}</td>
            <td>{{ $log->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table> 