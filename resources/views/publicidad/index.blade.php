<div id ="publicidad" name="publicidad" style="">
     <div class="animate__animated animate__shakeX animate__slow contenedor " style="position:absolute;z-index:3; right:25%" id="cuadroPublicidad" name="cuadroPublicidad"> 
        {{-- animate__animated animate__zoomIn --}}
         {{-- animate__animated animate__infinite	infinite animate__shakeX --}}

        <div class="grid grid-cols-6" style="position: absolute">
            <button onclick="cerrarPublicidad();"style ="position:absolute; margin-left:95%; margin-top:5px" id="cierreCuadroPublicidad">X</button>
            <div class="col-start-1 col-end-4">
                <img class="" style="height: auto; width:550px" src="{{ asset('src/img/download-doc.png') }}">
            </div>
           
            <div class="col-start-4 col-span-7">
                <div  style="margin-left:30px;margin-top: 40px; display: flex; ">
                    <div class="animate__animated animate__headShake animate__slower flex ">
                        {{-- animate__animated animate__bounce animate__slower  animate__infinite  animate_bounceIn--}}
                        <img class="" style="height: 60px; width:auto" src="{{ asset('src/img/favicon.png') }}">
                        <h1   class=" font-bold text-gray-700"style="font-size:35px;margin-left:10px" >SYSTRAN</h1>
                    </div>
                </div>
                <div >
                    <label style="font-size:25px;margin-left:30px" 
                        class="font-bold text-blue ">
                        Actualiza tu plan a:
                    </label><br>                   
                    
                    <h1 style="font-size: 50px;margin-left:30px" 
                        class="animate__animated animate__infinite animate__pulse animate__faster font-bold text-green">
                        {{-- animate__animated animate__infinite animate__pulse --}}
                        PREMIUM
                </h1>
                    
                     <h3 class=" pb-2 mx-auto mb-3 text-small font-light leading-relaxed" 
                     style="margin-left:30px">
                     para poder utilizar esta función.
                 </h3>
    
                </div>
                <div style ="margin-top: 15px">
                    <button onclick="direccionDasboard();" class="btnActualizar">Actualizar</button>
                </div>
    
              
            </div>
        </div>
    
        </div>
</div>  

