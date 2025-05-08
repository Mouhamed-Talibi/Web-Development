<?php

    namespace App\Providers;
    use App\Models\Profile;
    use App\Models\Publication;
    use App\Policies\PublicationPolicy;
    use Generator;
    use Illuminate\Auth\GenericUser;
    use Illuminate\Support\Facades\Gate;
    use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

    class AuthServiceProvider extends ServiceProvider
    {

        protected $policies = [
            Publication::class => PublicationPolicy::class
        ];

        /**
         * Register any authentication / authorization services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap any authentication / authorization services.
         */
        public function boot(): void
        {
            $this->registerPolicies();
        }
}
