<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up(): void
        {
            //
            Schema::create( 'person_emails',
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


        public function down(): void
        {
            //
            Schema::dropIfExists( 'person_emails' );
        }
    };
?>