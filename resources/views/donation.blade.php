@php
    


// SDK de Mercado Pago
require base_path('/vendor/autoload.php');
// Agrega credenciales
                                //ACCESS TOKEN(CREDENCIALES DE PRUEBA NO PRODUCCION)  
MercadoPago\SDK::setAccessToken('TEST-6409510987466150-052400-8b854381df0c105d0b0cf4bf2681c7d9-1381583137');




// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Donaciones';
$item->quantity = 1;
$item->unit_price = 500;


$preference->items = array($item);
$preference->save();




@endphp



<x-layouts.app 

title="login"
 meta-description="Home meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky500">
        Donaciones
    </h1>

    <div class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800">

       
        <div class="space-y-4">

            
            <label class="flex flex-col">

                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Monto
                </span>
                <input placeholder="Aun no funciono :c" class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
                 name="monto"
                  type="number">
            
        </div>
    
        <div class="flex items-center justify-between mt-4">
            
       
            {{--"BOTON DE PAY WITH MERCADOPAGO" --}}
            <div id="wallet_container"></div>
        
        </div>

 
    


</x-layouts.app>




<script src="https://sdk.mercadopago.com/js/v2"></script>


<script>
                                //PUBLIC KEY (CREDENCIALES DE PRUEBA NO PRODUCCION)                        
    const mp = new MercadoPago('TEST-fb7a47b1-b954-424f-9048-3bc43bd2802b');
    const bricksBuilder = mp.bricks();

    
    mp.bricks().create("wallet", "wallet_container", {
    initialization: {
       preferenceId: "{{ $preference -> id }}",
   },
});


</script>