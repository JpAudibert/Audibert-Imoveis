<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'titulo', 'areatt', 'endereco', 'valor', 'bairro', 'cidade', 'estado', 'cep', 'obs', 'areapv', 'garagem', 'jardim', 'churras', 'quartos', 'banheiros', 'aguaq', 'sala', 'lavanderia', 'quiosque', 'mobilia', 'cozinha', 'sacada', 'fone', 'net', 'elevador', 'gas', 'festas', 'portaria', 'medidores', 'cerca', 'energia', 'categoria', 'notas', 'nome_prop', 'matricula', 'telefone_prop', 'celular_prop', 'valor_real'
    ];
    protected $casts = [
        'img' => 'array',
    ];
}
