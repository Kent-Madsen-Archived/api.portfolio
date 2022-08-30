<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create( 'image_version_categories',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->string( 'content' )
                          ->unique();

                    $table->json( 'attributes' )
                          ->nullable();
                }
            );

            //
            Schema::create( 'image_versions',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->bigInteger( 'image_id' )
                          ->unsigned();

                    
                    $table->bigInteger( 'version_category_id' )
                          ->unsigned();

                    $table->bigInteger( 'link_id' )
                          ->unsigned();


                    $table->integer( 'width' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->integer( 'height' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->foreign( 'link_id' )
                          ->references( 'identity' )
                          ->on( 'links' );

                    $table->foreign( 'version_category_id' )
                          ->references( 'identity' )
                          ->on( 'image_version_categories' );
                }
            );
        }


        public function down(): void
        {
            Schema::dropIfExists( 'image_versions' );
        }
    };
?>