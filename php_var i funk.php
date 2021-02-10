<?php
    /* ^ znaczniki między którymi zamykamy kod PHP */

    $zmienna_x = 5; //deklaracja zmiennej

    /*
    deklaracja zaczyna się od $ i pierwszym znakiem po $ musi być litera albo _ , potem mogą to być litery, cyfry albo _
    zmienne zadeklarowane poza funkcjami są zmiennymi globalnymi
    */

    /* deklaracja funkcji - taka sama jak w JavaScript */
    function suma1() {
        global $zmienna_x; //żeby użyć zmiennej globalnej wewnątrz funkcji, należy do niej zrobić odnośnik wewnątrz funkcji z notacją global
        $zmienna_y = 2; // zmienna lokalna dla funkcji suma, kasowana po tym jak funkcja skończy swoje działanie
    
        echo "Suma x + y = " . $zmienna_x + $zmienna_y;

        /* komenda echo wypisuje co jej każemy do pliku dla przeglądarki do przetworzenia
           kod PHP jest przetwarzany na serwerze a jego "efekty" są wysyłane do przeglądarki jako tekst do zinterpretowania przez przeglądarkę
           komendy arytmetyczne działają normalnie (+ - * /) ale stringi łączy się z innymi elementami przez znacznik konkatenacji (kropkę . )*/
    }

    suma1(); // wywołanie funkcji (takie samo jak w JavaScript)

    function suma2() {
        static $zmienna_z = 0; // zmienna statyczna - jeśli chcemy zadeklarować lokalną zmienną której wartość jest zapamiętywana po każdym działaniu funkcji, deklarujemy ją ze słowem static
        $zmienna_z++;
        echo "<br>" . $zmienna_z ;
    }

    suma2();
    suma2();
    suma2();
?>