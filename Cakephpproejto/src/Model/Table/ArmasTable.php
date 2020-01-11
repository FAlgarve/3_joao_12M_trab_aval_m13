<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArmasTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');

       /* $this->hasMany('Utilizacao')
            ->setForeignKey('ID_arma')
            ->setDependent(true);*/
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('Nome')
            ->notEmpty('tipo_arma')
            ->notEmpty('n_balas');

        return $validator;
    }
}