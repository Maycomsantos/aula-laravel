<?php

namespace App\Checks;

use BeyondCode\SelfDiagnosis\Checks\Check;
use App\User;

class AdminCheck implements Check
{
    /**
     * The name of the check.
     *
     * @param array $config
     * @return string
     */
    public function name(array $config): string
    {
        return 'Usuário Admin foi criado';
    }

    /**
     * Perform the actual verification of this check.
     *
     * @param array $config
     * @return bool
     */
    public function check(array $config): bool
    {
        return User::where('email' , 'michaelsantos.the@hotmail.com')->count() == 1;
    }

    /**
     * The error message to display in case the check does not pass.
     *
     * @param array $config
     * @return string
     */
    public function message(array $config): string
    {
        return 'Nenhum Admin aqui';
    }
}
