<?php


class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }

    public function __toString()
    {
        return $this->numero . " - ";
    }
}

class CPF extends Documento
{

    public function validar(): bool
    {

        # code...
        $numeroCPF = $this->getNumero();

        if (empty($numeroCPF)) {
            return false;
        }

        $cpf = preg_match('/[0-9]/', $numeroCPF) ? $numeroCPF : 0;

        $numeroCPF = str_pad($numeroCPF, 11, '0', STR_PAD_LEFT);


        if (strlen($numeroCPF) != 11) {
            echo "length";
            return false;
        } else if (
            $numeroCPF == '00000000000' ||
            $numeroCPF == '11111111111' ||
            $numeroCPF == '22222222222' ||
            $numeroCPF == '33333333333' ||
            $numeroCPF == '44444444444' ||
            $numeroCPF == '55555555555' ||
            $numeroCPF == '66666666666' ||
            $numeroCPF == '77777777777' ||
            $numeroCPF == '88888888888' ||
            $numeroCPF == '99999999999'
        ) {
            return false;
        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{
                        $c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($numeroCPF{
                    $c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

    public function __toString()
    {
        return "<br> Seu CPF: " . $this->getNumero() . " - ";
    }
    
}

$doc = new CPF();
$doc->setNumero("34741666891a");

echo "<br>";

var_dump($doc->validar());


echo "<br>";

if ($doc->validar() == false) {
    echo "CPF invalido!";
    echo $doc->__toString();
} else {
    echo "CPF valido!";
    echo $doc->__toString();
}
