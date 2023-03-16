<?php

//SETANDO A TIMEZONE PARA PEGAR O HORARIO
date_default_timezone_set('America/Sao_Paulo');


class Ticket
{

    //ATRIBUTOS
    private int $id;

    private $dataAbertura;

    private $dataFechamento;

    private string $status;

    private string $descricao;

    private static int $idCount = 1;


    //CONSTRUTOR
    public function __construct($descricao, $dataAbertura = null, $dataFechamento = null, $id = null)
    {
        $this->descricao = $descricao;

        $this->dataAbertura = [
            "dia" => date("d"),
            "mes" => date("m"),
            "ano" => date("Y"),
            "hora" => date("h:i:s")
        ];

        $this->status = "ABERTO 👁‍🗨";

        $this->id = self::$idCount++;

    }


    //                    GETTERS E SETTERS

    public function getId(){
        return $this->id;
    }

    public function getDataAbertura(){
        $mes = $this->dataAbertura["mes"];
        $ano = $this->dataAbertura["ano"];
        $hora = $this->dataAbertura["hora"];

    }

    public function getDiaAbertura(){
        return $this->dataAbertura["dia"];
    }

    public function getMesAbertura(){
        return $this->dataAbertura["mes"];
    }

    public function getAnoAbertura(){
        return $this->dataAbertura["ano"];
    }

    public function getHoraAbertura(){
        return $this->dataAbertura["hora"];
    }


    public function getDataFechamento(){
        return $this->dataFechamento;
    }

    public function getDiaFechamento(){
        return $this->dataFechamento["dia"];
    }

    public function getMesFechamento(){
        return $this->dataFechamento["mes"];
    }

    public function getAnoFechamento(){
        return $this->dataFechamento["ano"];
    }

    public function getHoraFechamento(){
        return $this->dataFechamento["hora"];
    }


    public function getStatus(){
        return $this->status;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setId($newId){
        $this->id = $newId;
    }

    public function setDataAbertura($newDataAbertura){
        $this->dataAbertura = $newDataAbertura;
    }

    public function setDataFechamento($newDataFechamento){
        $this->dataFechamento = $newDataFechamento;
    }

    public function setStatus($newStatus){
        $this->status = $newStatus;
    }

    public function setDescricao($newDescricao){
        $this->descricao = $newDescricao;
    }

    //             FIM DOS GETTERS E SETTERS


    public function fecharTicket(){
        $this->dataFechamento = [
            "dia" => date("d"),
            "mes" => date("m"),
            "ano" => date("Y"),
            "hora" => date("h:i:s")
        ];

        $this->status = "FECHADO ✔";
    }

}

$ticket = new Ticket(
    "Este é o primeiro TICKET!, bla bla bla."
);

echo "PRIMEIRO TICKET! 1️⃣: ".PHP_EOL.PHP_EOL;

echo "ID: ", $ticket->getId().PHP_EOL;

echo "DESCRICAO: ", $ticket->getDescricao().PHP_EOL;

echo "DATA DE ABERTURA:".PHP_EOL;

echo "  HORA: ", $ticket->getHoraAbertura().PHP_EOL;

echo "  DIA: ", $ticket->getDiaAbertura().PHP_EOL;

echo "  MES: ", $ticket->getMesAbertura().PHP_EOL;

echo "  ANO: ", $ticket->getAnoAbertura().PHP_EOL;

echo "STATUS: ", $ticket->getStatus().PHP_EOL;



$ticket2 = new Ticket(
    "Este é o SEGUNDO ticket, QUE SERÁ FECHADO!"
);


echo ''.PHP_EOL.PHP_EOL,"SEGUNDO TICKET 2️⃣: ".PHP_EOL.PHP_EOL;

echo "ID: ", $ticket2->getId().PHP_EOL;

echo "DESCRICAO: ", $ticket2->getDescricao().PHP_EOL;

echo "DATA DE ABERTURA:".PHP_EOL;

echo "  HORA: ", $ticket2->getHoraAbertura().PHP_EOL;

echo "  DIA: ", $ticket2->getDiaAbertura().PHP_EOL;

echo "  MES: ", $ticket2->getMesAbertura().PHP_EOL;

echo "  ANO: ", $ticket2->getAnoAbertura().PHP_EOL;



echo "STATUS: ", $ticket2->getStatus().PHP_EOL;


echo "CONTANDO ATÉ 5 PARA FECHAR O TICKET".PHP_EOL;

for($i = 1; $i <= 5; $i++){
    echo $i.PHP_EOL;
    sleep(1);
}

$ticket2->fecharTicket();

echo ''.PHP_EOL,"TICKET 2 APÓS FECHADO 2️⃣❌: ".PHP_EOL.PHP_EOL;

echo "DATA DE FECHAMENTO:".PHP_EOL;

echo "  HORA: ", $ticket2->getHoraFechamento().PHP_EOL;

echo "  DIA: ", $ticket2->getDiaFechamento().PHP_EOL;

echo "  MES: ", $ticket2->getMesFechamento().PHP_EOL;

echo "  ANO: ", $ticket2->getAnoFechamento().PHP_EOL;



$ticket3 = new Ticket(
    "Este é o TERCEIRO TICKET, 3°"
);

echo ''.PHP_EOL.PHP_EOL,"TERCEIRO TICKET 3️⃣: ".PHP_EOL.PHP_EOL;

echo "ID: ", $ticket3->getId().PHP_EOL;

echo "DESCRICAO: ", $ticket3->getDescricao().PHP_EOL;

echo "DATA DE ABERTURA:".PHP_EOL;

echo "  HORA: ", $ticket3->getHoraAbertura().PHP_EOL;

echo "  DIA: ", $ticket3->getDiaAbertura().PHP_EOL;

echo "  MES: ", $ticket3->getMesAbertura().PHP_EOL;

echo "  ANO: ", $ticket3->getAnoAbertura().PHP_EOL;



echo "STATUS: ", $ticket3->getStatus().PHP_EOL;


?>