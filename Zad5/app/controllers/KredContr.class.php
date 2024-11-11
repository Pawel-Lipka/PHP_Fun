<?php 

namespace app\controllers;

use app\forms\KredForm;
use app\utilities\KredResults;


class KredContr{

//--------- fields ----------
    private $form;
    private $results;

//--------- methods ---------

    public function __construct() {

        $this->form = new kredForm();
        $this->results = new KredResults();
        
    }

    public function get_params(){

        $this->form->credit = getFromRequest('credit');  
        $this->form->percent = getFromRequest('percent');
        $this->form->months = getFromRequest('months');    
    }

    public function are_params_correct(){
        
        // fields have to be initialized
        if (  is_null($this->form->credit) || is_null($this->form->percent) || is_null($this->form->months)) {
            return false;
        }

        // fields have to be numeric
        if (! (is_numeric($this->form->credit) && is_numeric($this->form->percent) && is_numeric($this->form->months))) {
            getMessages()->add_error('Błędne wywołanie aplikacji. Parametry nie są liczbami');
        }

        // if no error yet
        if ( ! (getMessages()->is_error())){

            //credit and months have to be higher then 0
            if ( $this->form->credit < 1 || $this->form->months < 1) {
                getMessages()->add_error('Błędne wywołanie aplikacji. Parametry muszą być większe od 0');
            }

            // percents have to be in range 0 - 100
            if ( $this->form->percent < 0 || $this->form->percent > 100) {
                getMessages()->add_error('Błędne wywołanie aplikacji. Procent musi być z zakresu 0 - 100 %');
            }
            return ! (getMessages()->is_error());
        
        }
    }

    // calculates the monthly and total amount to be return
    public function calculate(){

        $this->get_params();

        if ($this->are_params_correct()){

            // conversion from strings to values
            $this->form->credit = floatval($this->form->credit);
            $this->form->percent = floatval($this->form->percent);
            $this->form->months = intval($this->form->months);
            getMessages()->add_info("Parametry wporządku");

            // calculation
            $installment = $this->form->credit / $this->form->months; //rata
            $this->results->monthly = $installment * ($this->form->percent/100) + $installment;
            $this->results->total = $this->results->monthly * $this->form->months;
            getMessages()->add_info("Obliczenia wykonane");

        }

        $this->generate_View();
    }

    public function generate_View(){
        
        
        getSmarty()->assign('page_title','Kalkulator');
        getSmarty()->assign('page_header','Kalkulator kredytowy');
        getSmarty()->assign('header_desc','Prosty kalkulator na zawsze zmieniający Twoje podejście do finansów.');
        getSmarty()->assign('results',$this->results);
        getSmarty()->assign('form',$this->form);
        
        getSmarty()->display('kred_view.tpl');

    }
}

