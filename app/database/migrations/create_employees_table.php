public function up()
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('position');
        $table->integer('salary');
        $table->timestamps();
    });
}
