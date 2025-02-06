<?php

namespace App\Controllers;

use App\Models\Voo;

class VooController
{
    private array $_voos = [];

    public function Main(): void
    {

        // Criando alguns voos
        $voo1 = new Voo('AB123', 'São Paulo', new \DateTime('14:00'));
        $voo2 = new Voo('CD456', 'Rio de Janeiro', new \DateTime('16:00'));

        $this->AdicionarVoo($voo1);
        $this->AdicionarVoo($voo2);

        // Obtendo lista de voos
        $voos = $this->ListarVoos();

        // Renderizando a view
        $this->render("ListaVoos", ["voos" => $voos]);
    }

    public function AdicionarVoo(Voo $voo): void
    {
        $this->_voos[] = $voo;
    }

    public function ListarVoos(): array
    {
        return $this->_voos;
    }

    private function render(String $view_path, Array|Null $params = []): void {
        if(!empty($params)) {
            extract($params);
        }
        // Debug
        print "<pre>";
        print_r($voos);
        print "</pre>";
        require_once dirname(__DIR__) . "/Views/$view_path.php";
    } 
}
