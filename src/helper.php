<?php

if (! function_exists('datatables')) {
    /**
     * Helper to make a new DataTable instance from source.
     * Or return the factory if source is not set.
     *
     * @param mixed $source
     * @return \Sappachok\DataTables\DataTableAbstract|\Sappachok\DataTables\DataTables
     */
    function datatables($source = null)
    {
        if (is_null($source)) {
            return app('datatables');
        }

        return app('datatables')->make($source);
    }
}
