<?php

class Vertebrates{
    public function __construct(){
        $this->stampavertebrato();
    }

    protected function stampavertebrato(){
        echo "Sono un animale vertebrato \n";
    }


}


class Warmblooded extends Vertebrates{
    public function __construct(){
        parent:: __construct();
        $this->stampasanguecaldo();
    }

    protected function stampasanguecaldo(){
        echo "sono un animale a sangue caldo \n";
    }
}

class Mammals extends Warmblooded{
    public function __construct(){
        parent:: __construct();
        $this->stampamammiferi();
    }

    protected function stampamammiferi(){
        echo "sono un mammifero \n";
    }
}


class Birds extends Warmblooded{
    public function __construct(){
        parent:: __construct();
        $this->stampauccelli();
    }

    protected function stampauccelli(){
        echo "sono un uccello \n";
    }
}




class Coldblooded extends Vertebrates{
    public function __construct(){
        parent:: __construct();
        $this->stampasanguefreddo();
    }

    protected function stampasanguefreddo(){
        echo "sono un animale a sangue freddo \n";
    }
}


class Fish extends Coldblooded{
    public function __construct(){
        parent:: __construct();
        $this->stampapesci();
    }

    protected function stampapesci(){
        echo "sono un pesce \n";
    }
}


class Reptiles extends Coldblooded{
    public function __construct(){
        parent:: __construct();
        $this->stamparettili;
    }

    protected function stamparettili(){
        echo "sono un rettile \n";
    }
}

class Amphibians extends Coldblooded{
    public function __construct(){
        parent:: __construct();
        $this->stampaanfibi;
    }

    protected function stampaanfibi(){
        echo "sono un anfibio \n";
    }
}



$leone = new Mammals();