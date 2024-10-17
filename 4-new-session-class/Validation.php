<?php 



class Validation{


    private array $errors = [];


    public function validate(array $rules){

        foreach($rules as $input_name => $input_rules){
            $input_value = $_POST[$input_name];
            foreach($input_rules as $rule){
                if(isset($this->errors[$input_name])){
                    break;
                }

                if(str_contains($rule,":")){
                    $new_rule = explode(":",$rule);
                    $active_rule = $new_rule[0];
                    $this->$active_rule($input_name, $input_value, $new_rule[1]);
                }else{
                    $this->$rule($input_name, $input_value);
                }
            }
        }
    }


    private function required($input_name, $input_value){
        if(empty($input_value)){
            $this->errors[$input_name] = "The $input_name field is required.";
        }
    }

    public function string($input_name, $input_value){
        if(!preg_match("/^[a-zA-Z0-9 .]+$/",$input_value)){
            $this->errors[$input_name] = "The $input_name field must contain only letters, numbers, and spaces.";
        }
    }

    private function email($input_name, $input_value){
        if(!filter_var($input_value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$input_name] = "The $input_name field must be a valid email address.";
        }
    }

    private function numeric($input_name, $input_value){
        if(!is_numeric($input_value)){
            $this->errors[$input_name] = "The $input_name field must be a numeric value.";
        }
    }


    private function min($input_name, $input_value, $min){
        if(strlen($input_value)<$min){
            $this->errors[$input_name] = "The $input_name field must be at least $min characters long.";
        }
    }

    private function max($input_name, $input_value, $max){
        if(strlen($input_value)>$max){
            $this->errors[$input_name] = "The $input_name field must be less than $max characters";
        }
    }



    public function getErrors(){
        if(!empty($this->errors)){
            Session::set('errors',$this->errors);
            return true;
        }
        return false;
    }


}












