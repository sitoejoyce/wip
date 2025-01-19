<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs por Usuário</title>
    <style>
        /* Caixa que envolve a tabela */
        .box-container {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        /* Tabela */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #1d72b8;
        }

        /* Estilo adicional para o cabeçalho */
        h1 {
            font-size: 2rem;
            color: #333;
        }

        /* Tamanho da caixa e centralização */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Margem extra nas tabelas */
        table {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4 text-center">Logs por Usuário</h1>

        <!-- Caixa envolvendo a tabela -->
        <div class="box-container">
            <table class="min-w-full table-auto border-collapse shadow-lg bg-white">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left border">Nome</th>
                        <th class="px-4 py-2 text-left border">Email</th>
                        <th class="px-4 py-2 text-left border">Número de Logs</th>
                        <th class="px-4 py-2 text-left border">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="bg-white">
                            <td class="px-4 py-2 border">{{ $user->name }}</td>
                            <td class="px-4 py-2 border">{{ $user->email }}</td>
                            <td class="px-4 py-2 border">{{ $user->logs_count }}</td>  <!-- Contagem de logs -->
                            <td class="px-4 py-2 border">
                                <a href="{{ route('logs.show', $user->id) }}" class="text-blue-500 hover:text-blue-700">Ver Logs</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
