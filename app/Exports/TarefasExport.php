<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
    }

    public function headings():array { //declarando o tipo de retorno (detalhe obrigatório que a interface WithHeadings impõe)
        return [
            'ID DA TAREFA', 'TAREFA', 'DATA LIMITE CONCLUSÃO' 
        ];
    }

    public function map($linha):array {
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/Y', strtotime($linha->data_limite_conclusao)),
            'xyz',
            'abc',
            '12345'
        ];
    }
}
