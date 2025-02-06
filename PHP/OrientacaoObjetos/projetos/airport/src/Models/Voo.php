<?php

namespace App\Models;

class Voo
{
    private String $_numero;
    private String $_destino;
    private \DateTime $_horario;

    public function __construct(
        public String $Numero {
            get => $this->_numero;
            set(String $novoNumero) {
                if (!empty($novoNumero)) {
                    $this->_numero = $novoNumero;
                } else {
                    throw new \InvalidArgumentException("O número do voo não pode ser vazio.");
                }
            }
        },
        public String $Destino {
            get => $this->_destino;
            set(String $novoDestino) {
                if (!empty($novoDestino)) {
                    $this->_destino = $novoDestino;
                } else {
                    throw new \InvalidArgumentException("O destino não pode ser vazio.");
                }
            }
        },
        public \DateTime $Horario {
            get => $this->_horario;
            set(\DateTime $novoHorario) {
                $this->_horario = $novoHorario;
            }
        }
    ) {}
}
