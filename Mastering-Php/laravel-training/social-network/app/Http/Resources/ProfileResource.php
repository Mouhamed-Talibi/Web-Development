<?php

    namespace App\Http\Resources;

    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    class ProfileResource extends JsonResource
    {
        /**
         * Transform the resource into an array.
         *
         * @return array<string, mixed>
         */
        public function toArray(Request $request): array
        {
            $values = parent::toArray($request);
            $values['image'] = url('storage/' . $values['image']);
            $values['created_at'] = date('d/m/Y', strtotime($values['created_at']));
            return $values;
        }
    }
