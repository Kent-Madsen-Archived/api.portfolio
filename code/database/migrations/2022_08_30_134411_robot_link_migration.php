<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up(): void
        {
             Schema::create( 'robot_links',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->bigInteger( 'link_id' )
                          ->unsigned();

                    $table->json( 'rules' )
                          ->nullable();

                    $table->foreign( 'link_id' )
                          ->references( 'identity' )
                          ->on( 'links' );
                }
            );
        }


        public function down(): void
        {
            Schema::dropIfExists( 'robot_links' );
        }
    };
?>