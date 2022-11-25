<?php

class A {
    public function test1(){
        return "function test1 class A <br>";
    }

    protected function testProtected(){
        return "function en portée protected <br>";
    }

}

class B extends A {

    public function test2(){
        return "function test2 class B <br>";
    }
}

$b = new B(); // j'instancie un objet de la classe B
echo $b->test2();
echo $b->test1();




class C extends B { 
    public function test3(){
        
        return "function test3 class C <br>" . $this->testProtected();
    }

}

// par effect de transitivité l'objet 'C'
$c = new C();
echo $c->test3();
echo $c->test2();
echo $c->test1();

// echo $b->test3(); // B n'a pas accè aux méthodes de ses enfants. 

/*
une classe peut pas herité directement de 2 classes différents.
     ex: class C extends B,A => interdit


non réfléxible : une class  extends ne peut pas herité d'elle meme
     ex : class A extends A {}


     non sylétrique 
     ex : class F extends E {}
     ex : class E extends F {}
     => interdit. si F herite de E , alors E ne peux pas hériterde F 
*/
//echo $C->testProtected(); // ERREUR car jene peux pas accéder  à une méthode à l'exterieur de ma class. je peux donc y accéder uniquement dans la classe A ou dans les classes qui héritent de A directement ou indirectement.


?>