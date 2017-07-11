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
         * @param $query
         * @return mixed
         */
        public function scopeLatest($query, $limit = 15)
        {
            return $query->orderBy("id", "DESC")->take($limit);
        }

        /**
         * @param     $query
         * @param int $paginate
         * @return mixed
         */
        public function scopeLatestPaginated($query, $paginate = 20)
        {
            return $query->orderBy("id", "DESC")->paginate($paginate);
        }

        public function scopeAsc($query, $column = "id")
        {
            return $query->orderBy($column, "ASC");
        }

        public function scopeDesc($query, $column = "id")
        {
            return $query->orderBy($column, "DESC");
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
