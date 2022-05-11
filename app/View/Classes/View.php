<?php

namespace App\View\Classes;

class View {

    /**
     * Metodo responsavel por receber o conteudo da view
     * @param string $view
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__.'/../../View/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
///////////////////////////////////////////////////////////////////////
    /**
     * Metodo responsavel por renderizar o conteudo de uma view
     * @param string $view
     * @param array $vars
     * @return string 
     */
    public static function render($view, $vars = []){
    
        //Recebe o conteudo da view
        $contentView = self::getContentView($view);

        //Recebe as variaveis passadas pelo front-end
        $keys = array_keys($vars);
        //Realiza um tratamento para identificar as variaveis entre duas chaves {{}}
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);
  
        //Retorna o conteudo das variaveis
        return str_replace($keys, array_values($vars),$contentView);
    }
}