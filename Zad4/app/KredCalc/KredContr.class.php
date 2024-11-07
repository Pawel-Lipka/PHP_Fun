<?php 

//require_once dirname(__FILE__).'/../config.php';
require_once $config->root_path."/libs/Smarty/libs/Smarty.class.php";
require_once $config->root_path."/app/KredCalc/kredForm.class.php";
require_once $config->root_path."/libs/Messages/Messages.class.php";
require_once $config->root_path."/app/KredCalc/KredResults.class.php";
use Smarty\Smarty;

// stop if user not log in
//include _ROOT_PATH.'/app/security/check.php';

class KredContr{

//--------- fields ----------
    private $form;
    private $messages;
    private $results;

//--------- methods ---------

    public function __construct() {

        $this->form = new kredForm();
        $this->messages = new Messages();
        $this->results = new KredResults();
        
    }

    public function get_params(){

        $this->form->credit = isset($_REQUEST ['credit']) ? $_REQUEST ['credit'] : null;
        $this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST['percent'] : null;
        $this->form->months = isset($_REQUEST ['months']) ? $_REQUEST ['months'] : null;
    
    }

    public function are_params_correct(){
        
        // fields have to be initialized
        if (  is_null($this->form->credit) || is_null($this->form->percent) || is_null($this->form->months)) {
            return false;
        }

        // fields have to be numeric
        if (! (is_numeric($this->form->credit) && is_numeric($this->form->percent) && is_numeric($this->form->months))) {
            $this->messages->add_error('Błędne wywołanie aplikacji. Parametry nie są liczbami');
        }

        // if no error yet
        if ( ! ($this->messages->is_error())){

            //credit and months have to be higher then 0
            if ( $this->form->credit < 1 || $this->form->months < 1) {
                $this->messages->add_error('Błędne wywołanie aplikacji. Parametry muszą być większe od 0');
            }

            // percents have to be in range 0 - 100
            if ( $this->form->percent < 0 || $this->form->percent > 100) {
                $this->messages->add_error('Błędne wywołanie aplikacji. Procent musi być z zakresu 0 - 100 %');
            }
            return ! ($this->messages->is_error());
        
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
            $this->messages->add_info("Parametry wporządku");

            // calculation
            $installment = $this->form->credit / $this->form->months; //rata
            $this->results->monthly = $installment * ($this->form->percent/100) + $installment;
            $this->results->total = $this->results->monthly * $this->form->months;
            $this->messages->add_info("Obliczenia wykonane");

        }

        $this->generate_View();
    }

    public function generate_View(){
        
        global $config;

        $smarty = new Smarty();
        
        $smarty->assign('page_title','Kalkulator');
        $smarty->assign('page_header','Kalkulator kredytowy');
        $smarty->assign('header_desc','Prosty kalkulator na zawsze zmieniający Twoje podejście do finansów.');
        $smarty->assign('config',$config);
        $smarty->assign('results',$this->results);
        $smarty->assign('form',$this->form);
        $smarty->assign('messages',$this->messages);
        
        $smarty->display($config->root_path.'/app/KredCalc/kred_view.tpl');

    }
}

