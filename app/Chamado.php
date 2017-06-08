<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chamados';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'descricao', 'categoria_id', 'data_abertura', 'data_vencimento', 'requerente_id', 'responsavel_id', 'status_id', 'localizacao_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id','id');
    }

    public function localizacao()
    {
        return $this->belongsTo('App\Localizacao','localizacao_id','id');
    }

    public function requerente()
    {
        return $this->belongsTo('App\Requerente','requerente_id','id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','status_id','id');
    }

    public function responsavel()
    {
        return $this->belongsTo('App\User','responsavel_id','id');
    }
}
