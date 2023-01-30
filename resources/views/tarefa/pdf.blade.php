<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style>
            .titulo {
                border: 1px;
                background-color: #c2c2c2;
                text-align: center;
                width: 100%;
                text-transform: uppercase;
                font-weight: bold;
                margin-bottom: 25px;
            }

            .tabela {
                width: 100%;
            }

            .page-break {
                page-break-after: always;
            }

        </style>
    </head>

    <body>
        <div class="titulo">Lista de tarefas</div>

        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data limite conclusão</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tarefas as $key => $tarefa)
                    <tr>
                        <th>{{ $tarefa->id }}</th>
                        <th>{{ $tarefa->tarefa }}</th>
                        <th>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="page-break"></div>
        <h2>Página 2</h2>
    </body>
</html>