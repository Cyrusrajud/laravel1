<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: #eceef1;
            color: #2e2e2e;
            padding: 48px 20px;
        }

        .container {
            max-width: 880px;
            margin: 0 auto;
            background: #f4f5f7;
            border: 1px solid #dcdfe4;
            border-radius: 12px;
            padding: 32px;
        }

        h1 {
            margin-bottom: 24px;
            font-weight: 600;
            font-size: 1.5rem;
            color: #2a2a2a;
        }

        h2 {
            margin-bottom: 18px;
            font-weight: 600;
            color: #2a2a2a;
        }

        .alert-success {
            background: #e3f0e8;
            color: #2f6b47;
            border: 1px solid #c9dfd0;
            padding: 10px 16px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 0.9rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        th {
            text-align: left;
            padding: 12px 10px;
            color: #7a7e85;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #dcdfe4;
        }

        td {
            padding: 14px 10px;
            border-bottom: 1px solid #e4e6ea;
            font-size: 0.92rem;
        }

        tr:hover td { background: #eceef1; }

        .btn {
            display: inline-block;
            padding: 6px 13px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid transparent;
            cursor: pointer;
            margin-right: 6px;
        }

        .btn-add {
            background: #3d4451;
            color: #fff;
            padding: 10px 16px;
            font-size: 0.88rem;
            border-radius: 8px;
        }

        .btn-edit   { background: #e9eaed; color: #3d4451; border-color: #d6d9de; }
        .btn-delete { background: #f4e4e2; color: #a4443a; border-color: #e6cbc8; }
        .btn-toggle { background: #e4e9ee; color: #3d566e; border-color: #d2dbe3; }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.72rem;
            font-weight: 600;
        }
        .badge-pending   { background: #f0e6cf; color: #8a6a1f; }
        .badge-completed { background: #dcead9; color: #2f6b47; }

        form.inline-form { display: inline; }

        label {
            display: block;
            font-size: 0.82rem;
            color: #757a82;
            margin-bottom: 6px;
            font-weight: 500;
        }

        input, textarea, select {
            width: 100%;
            padding: 9px 11px;
            margin: 0 0 18px;
            background: #fbfbfc;
            border: 1px solid #d6d9de;
            border-radius: 7px;
            color: #2a2a2a;
            font-family: inherit;
            font-size: 0.9rem;
        }
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #9aa1ab;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task Manager</h1>
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>