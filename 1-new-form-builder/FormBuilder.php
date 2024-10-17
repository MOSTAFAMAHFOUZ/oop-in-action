<?php 



class FormBuilder{

    private string $form;

    public function __construct($action,$method="GET",array $attributes=[])
    {
        $attributes = $this->buildAttributes($attributes);
        $this->form = "<form action=\"$action\" method=\"$method\" $attributes >";
    }


    public function input(string $type,string $name,string $value='',array $attributes=[]){
        $attributes = $this->buildAttributes($attributes);
        $this->form .= "<input type=\"$type\" name=\"$name\" value=\"$value\" $attributes>";
        return $this;
    }


    public function submit($value="Submit",array $attributes=[]){
        $attributes = $this->buildAttributes($attributes);
        $this->form .= "<input type=\"submit\" value=\"$value\" $attributes>";
        return $this;
    }


    public function textarea(string $name, string $value, array $attributes=[]){
        $attributes = $this->buildAttributes($attributes);
        $this->form.= "<textarea name=\"$name\" $attributes>$value</textarea>";
        return $this;
    }

    public function dropDown(string $name,array $options=[],$value='',array $attributes=[]){
        $attributes = $this->buildAttributes($attributes);


        $this->form.= "<select name=\"$name\" $attributes>";
        foreach($options as $key => $val){
            $selected = ($key === $value)? "selected" : "";
            $this->form.= "<option value=\"$key\" $selected>$val</option>";
        }
        $this->form.= "</select>";
        return $this;
    }


    public function build(){
        $this->form.= "</form>";
        return $this->form;
    }


    private function buildAttributes($attributes){
        $attr = "";
        foreach($attributes as $key => $value){
            $attr .= "$key=\"$value\" ";
        }
        return $attr;
    }
}