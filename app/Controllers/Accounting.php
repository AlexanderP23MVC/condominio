<?php

class Acounting{


    public function __construct(Type $var = null) {
        $this->var = $var;
    }


    public function amountToPay($pay){
        /*los montos por pagar del condominio */
         }
    

    public function debts(int $id, int $debts){
        /* enviar deudas que posee el usuario*/
    }

    public function active(){
        /* los activos que se reflejan el condominio  */
    }

    public function passive(){
        /* los pasivo que se reflejan el condominio  */
    }

    public function capital(){
        /* capital que posee el condominio */
    }

    public function invoice(){
        /* generar factura a los propietario de los condominio */
    }

    public function payEmployee(){
        /* pagar a los empleados */

        }

}