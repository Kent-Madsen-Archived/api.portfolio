<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create( 'accounts',
                function ( Blueprint $table )
                {
                    $table->id( 'identity' );

                    $table->bigInteger( 'email_identity' )
                          ->unsigned()
                          ->unique();

                    $table->timestamp( 'email_verified_at' )
                          ->nullable();

                    $table->string( 'password' );
                    $table->rememberToken();

                    $table->timestamps();

                    $table->foreign( 'email_identity' )
                          ->references( 'identity' )
                          ->on( 'person_emails' );
                }
            );
        }

        public function down(): void
        {
            Schema::dropIfExists( 'accounts' );
        }
    };
?>