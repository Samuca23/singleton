<?php

namespace Singleton;

class LogsSingleton {

    protected static LogsSingleton $instancia;

    private function __construct()
    {
        
    }

    private function __clone()
    {
        
    }

    public function __wakeup()
    {
        
    }

    /**
     * Grava o log em um arquivo txt
     *
     * @param array $dados
     * @return void
     */
    public function gravaLog(array $dados): void 
    {
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

    /**
     * Retorna uma nova instância de LogsSingleton, porém como
     * esta dentro da classe pode ser chamado como new self()
     *
     * @return self
     */
    public static function obterInstancia(): self 
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

}

?>