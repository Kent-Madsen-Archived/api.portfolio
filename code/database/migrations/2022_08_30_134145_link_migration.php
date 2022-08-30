<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up()
        {
            //
             Schema::create( 'links',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->string( 'content' )
                          ->unique();

                    $table->json( 'attributes' )
                          ->nullable();
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'links' );
        }
    };
?>