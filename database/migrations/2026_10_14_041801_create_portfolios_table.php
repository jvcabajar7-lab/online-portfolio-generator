public function up(): void
{
     Schema::create('portfolios', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email');
        $table->string('contact_number')->nullable();
        $table->text('address')->nullable();
        $table->text('about_me')->nullable();
        $table->text('education')->nullable();
        $table->text('skills')->nullable();
        $table->text('projects')->nullable();
        $table->text('work_experience')->nullable();
        $table->text('social_links')->nullable();
        $table->string('template_choice')->default('simple'); // simple, modern, creative
        $table->timestamps();
    });
}   