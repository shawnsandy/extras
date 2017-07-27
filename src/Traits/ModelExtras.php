<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 6/23/2017
     * Time: 4:34 AM
     */

    namespace ShawnSandy\Extras\Traits;


    trait ModelExtras
    {

        /**
         * @param     $query
         * @param int $paginate
         * @return mixed
         */
        public function scopeLatestPaginated($query, $paginate = 20)
        {
            return $query->latest()->paginate($paginate);
        }

        public function getCreatedSinceAttribute($query)
        {
            return $this->created_at->diffForHumans();
        }

        public function getUpdatedSinceAttribute($query)
        {
            return $this->updated_at->diffForHumans();
        }

    }
