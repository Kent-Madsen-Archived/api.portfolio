<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        public function up()
        {
            //
            Schema::create( 'images',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    //
                    $table->bigInteger( 'link_id' )
                          ->unsigned();

                    $table->bigInteger( 'uploaded_by_id' )
                          ->unsigned();

                    $table->json( 'attributes' );

                    //
                    $table->integer( 'width' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->integer( 'height' )
                          ->unsigned()
                          ->nullable()
                          ->index();


                    $table->timestamps();

                    //
                    $table->foreign( 'uploaded_by_id' )
                          ->references( 'identity' )
                          ->on( 'accounts' );

                    $table->foreign( 'link_id' )
                          ->references( 'identity' )
                          ->on( 'links' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'images' );
        }
    };
?>