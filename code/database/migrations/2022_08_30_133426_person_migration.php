<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up(): void
        {
            Schema::create( 'person_surnames',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->string( 'content' )
                          ->unique();
                }
            );

            Schema::create( 'person_firstnames',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->string( 'content' )
                          ->unique();

                }
            );

            Schema::create( 'person_names',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->bigInteger( 'firstname_id' )
                          ->unsigned();

                    $table->json( 'surname_ids' )
                          ->nullable();

                    $table->foreign( 'firstname_id' )
                          ->references( 'identity' )
                          ->on( 'person_firstnames' );
                }
            );
        }


        public function down(): void
        {
            //
            Schema::dropIfExists( 'person_names' );

            Schema::dropIfExists( 'person_firstnames' );
            Schema::dropIfExists( 'person_surnames' );
        }
    };
?>