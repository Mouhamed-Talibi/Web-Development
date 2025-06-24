<?php

    namespace App\Policies;

    use App\Models\Publication;
    use App\Models\User;
    use Illuminate\Auth\Access\Response;
    use Illuminate\Auth\GenericUser;

    class publicationPolicy
    {
        /**
         * Determine whether the user can view any models.
         */
        public function viewAny(User $user): bool
        {
            return false;
        }

        /**
         * Determine whether the user can view the model.
         */
        public function view(User $user, Publication $publication): bool
        {
            return false;
        }

        /**
         * Determine whether the user can create models.
         */
        public function create(User $user): bool
        {
            return false;
        }

        /**
         * Determine whether the user can update the model.
         */
        public function update(GenericUser $user, Publication $publication): bool
        {
            return $user->id === $publication->profile_id;
        }

        /**
         * Determine whether the user can delete the model.
         */
        public function delete(GenericUser $user, Publication $publication): bool
        {
            return $user->id === $publication->profile_id;  
        }

        /**
         * Determine whether the user can restore the model.
         */
        public function restore(User $user, Publication $publication): bool
        {
            return false;
        }

        /**
         * Determine whether the user can permanently delete the model.
         */
        public function forceDelete(User $user, Publication $publication): bool
        {
            return false;
        }

        // before 
        public function before(GenericUser $user, String $ability)
        {
           // 
        }
    }
