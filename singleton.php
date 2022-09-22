<?php

namespace Singleton;

class LogsSingleton {

    protected static LogsSingleton $instancia;

    public function gravaLog(array $dados): void {
        $nomeArquivo = 'logs.txt';
        $logsAnteriores = [];

        if (filesize($nomeArquivo) > 0) {
            
        }

    }

}


?>