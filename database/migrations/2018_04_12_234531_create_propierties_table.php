<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiertiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propierties', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            // Caracteristicas
            $table->string('title');
            $table->string('property_description');
            $table->string('slug');
            $table->integer('id_type_operation')->unsigned();
            $table->foreign('id_type_operation')->references('id')->on('type_operations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('auxiliary_zone')->nullable();
            $table->integer('plant')->nullable();
            $table->integer('id_type_property')->unsigned();
            $table->foreign('id_type_property')->references('id')->on('type_properties')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('type_street', [0,1,2,3,4,5,6,7,8,9])->nullable();
            $table->string('door')->nullable();
            $table->integer('id_city')->unsigned();
            $table->integer('city_name');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->text('property_address');
            $table->integer('id_area')->unsigned();
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('number')->nullable();
            $table->string('building')->nullable();
            $table->boolean('anticretico')->nullable();

            // Distribución - Otros Datos
            $table->integer('n_simple_rooms')->nullable(); 
            $table->integer('n_rooms')->nullable(); 
            $table->integer('years_construction')->nullable(); 
            $table->integer('n_bathrooms')->nullable(); 
            $table->integer('n_parking')->nullable(); 
            $table->string('community')->nullable();
            $table->integer('n_toilets')->nullable(); 
            $table->integer('n_plants')->nullable(); 
            $table->boolean('suite')->nullable(); 

            // Datos Internos  ↓

            /* Datos Inmobiliarios */
            $table->boolean('key_chain')->nullable(); 
            $table->string('priority')->nullable();
            $table->string('created_by')->nullable();
            $table->string('contact_by')->nullable();
            $table->text('important_announcement')->nullable();
            
            /* Datos Catastrales */
            $table->integer('c_number')->nullable(); 
            $table->string('c_ref')->nullable();
            $table->string('folio')->nullable();
            $table->string('register_of')->nullable();
            $table->text('property_observation')->nullable();
            
            /* Datos de Venta */
            $table->integer('real_estate_price')->nullable(); 
            $table->integer('owner_price')->nullable(); 
            $table->integer('avaluo')->nullable(); 
            $table->string('commission_value')->nullable();
            $table->integer('price_open_mode')->nullable();
            $table->integer('calculation')->nullable(); 
            $table->dateTime('in_exclusive_from')->nullable(); 
            $table->dateTime('in_exclusive_to')->nullable(); 
            
            /* Datos de Alquiler */
            $table->integer('rental_price')->nullable(); 
            $table->enum('rental_month', [1,2,3,4,5,6,7,8,9,10,11,12])->nullable(); 
            $table->string('honorarium')->nullable();
            $table->boolean('m_included')->nullable(); 
            $table->boolean('option_to_buy')->nullable(); 
            $table->boolean('heating_included')->nullable(); 

            /* Preferencias del arrendador */
            $table->integer('minimum_period')->nullable(); 
            $table->boolean('admits_foreigners')->nullable(); 
            $table->boolean('max_tenants')->nullable(); 
            $table->boolean('pets_allowed')->nullable(); 
            $table->integer('maximum_period')->nullable(); 
            $table->boolean('students')->nullable(); 
            $table->text('preferences')->nullable();
            
            /* Superficie */
            $table->string('useful_meters')->nullable();
            $table->string('kitchen_meter')->nullable();
            $table->string('meters_built')->nullable();
            $table->string('hall_metro')->nullable();
            $table->string('meters_lot')->nullable();
            $table->string('front_metro')->nullable();

            /* Datos de la Propiedad */
            $table->boolean('type_floor')->nullable(); 
            $table->boolean('hot_water')->nullable(); 
            $table->boolean('kitchen')->nullable(); 

            /* Propietario */
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->text('description')->nullable();

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propierties');
    }
}
