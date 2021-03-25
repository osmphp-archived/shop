<html>
<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <link href="{{ $asset('styles.css') }}" rel="stylesheet">
</head>
<body>
<h1>Todos</h1>
<hr/>
{{ $slot }}
<script src="{{ $asset('scripts.js') }}"></script>
</body>
</html>