<?php

namespace Singleton;

class LogsSingleton {

    protected static LogsSingleton $instancia;

    public function gravaLog(array $dados): void {
        $sNomeArquivo = 'logs.txt';
        $aLogsAnteriores = [];

        if (filesize($sNomeArquivo) > 0) {
            $sConteudoArquivo = file_get_contents($sNomeArquivo);

            $aLogsAnteriores = json_decode($sConteudoArquivo, true);
        }

        $aLogsAnteriores[] = $dados;
        $xArquivo = fopen($sNomeArquivo, 'w');

        fwrite($xArquivo, json_encode($aLogsAnteriores));
        fclose($xArquivo);
    }

}


?>