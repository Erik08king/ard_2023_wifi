@extends('layouts.master')
@section('title','RGB küldés')
@section('content')
    
    <div>
        
        <h1 >RGB ki küldésre egy wemos eszközre</h1>

        <form action="">

            <label for="ipaddress">Írjabe ide az aktuális ip címet</label> <input type="text" name="ipaddress" id="ipaddress"> <br>
            
            <label class="m-3">Kérlek válasz egy színt</label>
            <div class="row mb-4">
                <div class="col-4">
                    <button type="button" id="arduinoButton" class="btn btn-danger text-white btn-lg">Piros</button>
                </div>
                <div class="col-4">
                     <button type="button" class="btn btn-success text-white btn-lg">Zöld</button>
               </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary text-white btn-lg">Kék</button>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-lb">Küldés</button>

        </form>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#arduinoButton').click(function() {
                // Küldjük el az AJAX kérést a Laravel szervernek
                $.ajax({
                    url: '/sendCommand',
                    method: 'POST',
                    data: {
                        // Ide írd be azt a szöveget, amit az Arduino-nak küldeni szeretnél
                        command: 'Hello Arduino!'
                    },
                    success: function(response) {
                        // A kérés sikeres volt, itt dolgozhatunk fel bármit, amit az Arduino visszaküld
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Hiba történt
                        console.error(error);
                    }
                });
            });
        });
    </script>

@endsection 