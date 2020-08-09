<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('Id_empresa');
            $table->integer('Activo');
            $table->string('Nombre_empr',100);  
            $table->string('Correo_empr',100);
            $table->string('Tel_empresa',15);
            $table->binary('Logo_emp',100);
            $table->timestamps();
          
                      
        });

        Schema::create('asesors', function (Blueprint $table) {
            $table->id('Id_asesor');
            $table->integer('Activo');
            $table->string('Nombre',15);
            $table->string('Apellido',50);
            $table->string('Correo_asesor',100);
            $table->string('Contrasenia',20);     //pregunta: ¿debemos quitar esta contraseña porque se supone que tiene un usuario, donde esta su conraseña? no debería tener dos   
            $table->string('Telefono',15);    
            $table->timestamps();                    
                
            $table->unsignedBigInteger('Id_usuariofk'); // Relación con usuarios
            $table->foreign('Id_usuariofk')->references('id')->on('users'); // clave foranea
            $table->unsignedBigInteger('Id_empresafk'); // Relación con empresas
            $table->foreign('Id_empresafk')->references('Id_empresa')->on('empresas'); // clave foranea

            

         });

       Schema::create('estados', function (Blueprint $table) {
            $table->id('Id_estado');
            $table->integer('Activo');
            $table->string('Estado',200);    

            $table->timestamps();   

        });

        Schema::create('ciudads', function (Blueprint $table) {
            $table->id('id_ciudad');
            $table->integer('Activo');
            $table->string('Ciudad',200);  
            $table->timestamps();   
             

            $table->unsignedBigInteger('Id_estadofk'); // Relación con estados
            $table->foreign('Id_estadofk')->references('Id_estado')->on('estados'); // clave foranea
          
        });

        Schema::create('colonias', function (Blueprint $table) {

            $table->id('Id_colonia');
            $table->integer('Activo');
            $table->string('colonia',200);
            $table->timestamps();  
 
            $table->unsignedBigInteger('id_ciudadfk'); // Relación con ciudads
            $table->foreign('id_ciudadfk')->references('id_ciudad')->on('ciudads'); // clave foranea


        });

        Schema::create('desarrolladoras', function (Blueprint $table) {
          $table->id('Id_desarrolladora');
            $table->integer('Activo');
            $table->string('Nombre_desa',100);
            $table->string('Correo',100);
            $table->string('Tel_desa',15);
            $table->binary('Logo',100);
            $table->timestamps();  

            
        });

        Schema::create('tipoinmuebles', function (Blueprint $table) {
            $table->id('Id_tipo');
            $table->integer('Activo');
            $table->string('Tipo_inmueble',100);
            $table->timestamps();  
           
             $table->unsignedBigInteger('Id_desarrolladorafk'); // Relación con desarrolladoras
            $table->foreign('Id_desarrolladorafk')->references('Id_desarrolladora')->on('desarrolladoras'); // clave foranea
          

        });   
      

        Schema::create('modelos', function (Blueprint $table) {
            $table->id('Id_modelo');
            $table->integer('Activo');
            $table->string('Modelo',100);
            $table->timestamps();  

            $table->unsignedBigInteger('Id_tipofk'); // Relación con tipo_inmbuebles
            $table->foreign('Id_tipofk')->references('Id_tipo')->on('tipoinmuebles'); // clave foranea     


       });

        Schema::create('seminuevos', function (Blueprint $table) {
            $table->id('id_seminuevo');
            $table->integer('Activo');
            $table->string('antiguedad',25);
            $table->string('Tseminuevo',20);
            $table->string('contrato',35);
            $table->string('fecha',25);
            $table->timestamps();  
           
        });
        
        Schema::create('caracteristicas', function (Blueprint $table) {

           $table->id('id_producto');
            $table->integer('Activo');
            $table->string('Producto',10);
            $table->unsignedBigInteger('id_seminuevofk'); // Relación con seminuevos
            $table->timestamps();  
            $table->foreign('id_seminuevofk')->references('id_seminuevo')->on('seminuevos'); // clave foranea
          

        });

       Schema::create('tipoprecios', function (Blueprint $table) {

            $table->id('id_tipoPrecio');
            $table->integer('Activo');
            $table->string('Tipo',20);   
            $table->timestamps();           

        });

          Schema::create('inmuebles', function (Blueprint $table) {
            $table->id('Id_inmmueble');
            $table->integer('Activo');
            $table->string('Comision',15);
            $table->string('Latitud',255);
            $table->string('Longitud',255);
            $table->string('Zoom',255);
            $table->date('Creacion');
            $table->text('Descripcion',11);
            $table->string('Titulo',100);
            $table->decimal('Precio',10);
            $table->decimal('Construccion',10,2);
            $table->decimal('Terreno', 10,2);
            $table->decimal('Cuota_mantenimiento',10,2);
            $table->date('Fecha_entrega');
            $table->string('Planta',250);
            $table->string('Equipamiento',500);  
            $table->timestamps();  

            $table->unsignedBigInteger('Id_asesorfk'); // Relación con tipoprecios
            $table->foreign('Id_asesorfk')->references('Id_asesor')->on('asesors'); 

            $table->unsignedBigInteger('id_preciofk'); // Relación con tipoprecios
            $table->foreign('id_preciofk')->references('id_tipoPrecio')->on('tipoprecios'); 
            $table->unsignedBigInteger('id_productofk'); // Relación con tipoprecios
            $table->foreign('id_productofk')->references('id_producto')->on('caracteristicas'); 
            $table->unsignedBigInteger('id_modelofk'); // Relación con tipoprecios
            $table->foreign('id_modelofk')->references('id_modelo')->on('modelos'); 

            $table->unsignedBigInteger('id_coloniafk'); // Relación con tipoprecios
            $table->foreign('id_coloniafk')->references('id_colonia')->on('colonias'); 

            // clave foranea        
           
             });

        Schema::create('formadepagos', function (Blueprint $table) {
            $table->id('Id_forma');
            $table->integer('Activo');
            $table->string('forma',20);
            $table->timestamps();  
          
        });

        Schema::create('forma_inmuebles', function (Blueprint $table) {
            $table->id('Id_FI');        

            $table->unsignedBigInteger('Id_formafk'); // Relación con forma_pagos
            $table->foreign('Id_formafk')->references('Id_forma')->on('formadepagos'); // clave foranea             

            $table->unsignedBigInteger('Id_inmmueblefk'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk')->references('Id_inmmueble')->on('inmuebles'); // clave foranea             


        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id('Id_cliente');
            $table->integer('Activo');
            $table->string('Nombre',100);           
            $table->string('Correo',100);
            $table->string('Telefono',20);
            $table->string('Estatus',10);
            $table->string('Mensaje',500);   
            $table->timestamps();  
  $table->unsignedBigInteger('Id_inmmueblefk1'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk1')->references('Id_inmmueble')->on('inmuebles'); // clave foranea             


        });
        Schema::create('galerias', function (Blueprint $table) {        
            $table->id('Id_foto');
            $table->integer('Activo');
            $table->binary('Foto',200);
            $table->timestamps();  

            $table->unsignedBigInteger('Id_inmmueblefk2'); // Relación con forma_pagos
            $table->foreign('Id_inmmueblefk2')->references('Id_inmmueble')->on('inmuebles'); // clave foranea  
           

        });

        Schema::create('servicios', function (Blueprint $table) {

            $table->id('Id_servicio');
            $table->integer('Activo');
            $table->string('Servicio',18);
            $table->timestamps();  
            

        });

         Schema::create('servicio_inmuebles', function (Blueprint $table) {
          $table->id('Id_SI');
        
            $table->unsignedBigInteger('Id_inmmueblefk3'); // Relación con seminuevos
            $table->foreign('Id_inmmueblefk3')->references('Id_inmmueble')->on('inmuebles'); // clave foranea        
            $table->unsignedBigInteger('Id_serviciofk'); // Relación con seminuevos
            $table->foreign('Id_serviciofk')->references('Id_servicio')->on('servicios'); // clave foranea           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_inmuebles');
        Schema::dropIfExists('servicios');
         Schema::dropIfExists('inmuebles');
        Schema::dropIfExists('galerias');
         Schema::dropIfExists('clientes');
        Schema::dropIfExists('forma_inmuebles');
        Schema::dropIfExists('formadepagos');
        Schema::dropIfExists('inmuebles');
         Schema::dropIfExists('tipoprecios');
         Schema::dropIfExists('caracteristicas');
        Schema::dropIfExists('seminuevos');
        Schema::dropIfExists('modelos');
         Schema::dropIfExists('desarrolladoras');
          Schema::dropIfExists('tipoinmuebles');
          Schema::dropIfExists('colonias');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('ciudads');
        Schema::dropIfExists('asesors');
         Schema::dropIfExists('users');
          Schema::dropIfExists('empresas');
    }

   
}
